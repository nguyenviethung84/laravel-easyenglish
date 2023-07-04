<?php

namespace App\Service;
use App\Models\Post;

class PostManager{
    public static function get_latest_posts($post_type = 'EASY', $limit = 10, $offset = 1)
    {
        $selectColumn = [
            'id',
            'title',
            'image',
            'body',
        ];
        $paginator = Post::select($selectColumn)
        ->where('post_type', 'LIKE', $post_type)
        ->where('status', 'LIKE', 'PUBLISHED')
        ->latest()
        ->paginate($limit, ['*'], 'page', $offset);
        /*$paginator->count();*/

        $data = array();
        foreach($paginator->items() as $item){
            $data[] = [
                'id' => $item['id'],
                'title' => $item['title'],
                'urlToImage' => asset('storage/'.$item['image']),
                'content' => strip_tags(self::convertCurlyQuotes($item['body'])),
            ];
        }

        return [
            'total_size' => $paginator->total(),
            'limit' => (integer)$limit,
            'offset' => (integer)$offset,
            'posts' => $data
        ];
    }
    private static function convertCurlyQuotes($text){
        $quoteMapping = [
            // U+0082⇒U+201A single low-9 quotation mark
            "\xC2\x82"     => "'",

            // U+0084⇒U+201E double low-9 quotation mark
            "\xC2\x84"     => '"',

            // U+008B⇒U+2039 single left-pointing angle quotation mark
            "\xC2\x8B"     => "'",

            // U+0091⇒U+2018 left single quotation mark
            "\xC2\x91"     => "'",

            // U+0092⇒U+2019 right single quotation mark
            "\xC2\x92"     => "'",

            // U+0093⇒U+201C left double quotation mark
            "\xC2\x93"     => '"',

            // U+0094⇒U+201D right double quotation mark
            "\xC2\x94"     => '"',

            // U+009B⇒U+203A single right-pointing angle quotation mark
            "\xC2\x9B"     => "'",

            // U+00AB left-pointing double angle quotation mark
            "\xC2\xAB"     => '"',

            // U+00BB right-pointing double angle quotation mark
            "\xC2\xBB"     => '"',

            // U+2018 left single quotation mark
            "\xE2\x80\x98" => "'",

            // U+2019 right single quotation mark
            "\xE2\x80\x99" => "'",

            // U+201A single low-9 quotation mark
            "\xE2\x80\x9A" => "'",

            // U+201B single high-reversed-9 quotation mark
            "\xE2\x80\x9B" => "'",

            // U+201C left double quotation mark
            "\xE2\x80\x9C" => '"',

            // U+201D right double quotation mark
            "\xE2\x80\x9D" => '"',

            // U+201E double low-9 quotation mark
            "\xE2\x80\x9E" => '"',

            // U+201F double high-reversed-9 quotation mark
            "\xE2\x80\x9F" => '"',

            // U+2039 single left-pointing angle quotation mark
            "\xE2\x80\xB9" => "'",

            // U+203A single right-pointing angle quotation mark
            "\xE2\x80\xBA" => "'",

            // HTML left double quote
            "&ldquo;"      => '"',

            // HTML right double quote
            "&rdquo;"      => '"',

            // HTML left sinqle quote
            "&lsquo;"      => "'",

            // HTML right single quote
            "&rsquo;"      => "'",
        ];

        return strtr(html_entity_decode($text, ENT_QUOTES, "UTF-8"), $quoteMapping);
    }

}