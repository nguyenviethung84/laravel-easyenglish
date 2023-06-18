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
                'content' => strip_tags($item['body']),
            ];
        }

        return [
            'total_size' => $paginator->total(),
            'limit' => (integer)$limit,
            'offset' => (integer)$offset,
            'posts' => $data
        ];
    }

}