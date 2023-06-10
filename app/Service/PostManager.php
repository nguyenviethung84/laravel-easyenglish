<?php

namespace App\Service;
use App\Models\Post;

class PostManager{
    public static function get_latest_posts($post_type = 'EASY', $limit = 10, $offset = 1)
    {
        $paginator = Post::where('post_type', 'LIKE', $post_type)->latest()->paginate($limit, ['*'], 'page', $offset);
        /*$paginator->count();*/
        return [
            'total_size' => $paginator->total(),
            'limit' => (integer)$limit,
            'offset' => (integer)$offset,
            'posts' => $paginator->items()
        ];
    }

}