<?php

namespace App\Http\Controllers\api\v1;
use Illuminate\Http\Request;
use App\Service\EdictManager;
use App\Http\Controllers\Controller;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class WordController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_word(Request $request)
    {
        $request['word'] = isset($request['word'])? $request['word'] : 'a';
        $words = EdictManager::get_word($request['word']);
        // $posts['posts'] = Helpers::product_data_formatting($posts['posts'], true);
        return response()->json($words, 200);
    }

}