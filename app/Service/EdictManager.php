<?php

namespace App\Service;
use App\Models\Edict;

class EdictManager{
    public static function get_word($word = 'a', $limit = 10, $offset = 1)
    {
        // $selectColumn = [
        //     'id',
        //     'title',
        //     'image',
        //     'body',
        // ];
        $paginator = Edict::select()
        ->where('word', 'LIKE', $word)
        ->paginate($limit, ['*'], 'page', $offset);

        $data = array();
        foreach($paginator->items() as $item){
            $data[] = [
                'word' => $item['word'],
                'detail' => $item['detail'],
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