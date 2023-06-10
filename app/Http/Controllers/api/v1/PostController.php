<?php

namespace App\Http\Controllers\api\v1;
use Illuminate\Http\Request;
use App\Service\PostManager;
use App\Http\Controllers\Controller;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_latest_posts(Request $request)
    {
        print($request['post_type']);
        $request['post_type'] = isset($request['post_type'])? $request['post_type'] : 'EASY';
        $request['limit'] = isset($request['limit'])? $request['limit'] : 10;
        $request['offset'] = isset($request['offset'])? $request['offset'] : 1;
        $posts = PostManager::get_latest_posts($request['post_type'], $request['limit'], $request['offset']);
        // $posts['posts'] = Helpers::product_data_formatting($posts['posts'], true);
        return response()->json($posts, 200);
    }

}