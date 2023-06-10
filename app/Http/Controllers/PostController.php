<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate();

        return view('post.index', compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * $posts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        $categories = Category::all();
        $postTypes = Post::$postType;
        $statuss = Post::$status;

        return view('post.create', compact('post', 'categories', 'postTypes', 'statuss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(Post::$rules);
        $data = $request->all();

        if(isset($request->image)){
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/posts', $fileName);
            $data['image'] = 'posts/'.$fileName;
        }
        
        $post = Post::create($data);

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }
    protected function storeImage(Request $request) {
        $fileName = time() . '.' . $request->image->extension();
        $path = $request->image->storeAs('public/posts', $fileName);
        return substr($path, strlen('public/'));
    }
      

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $postTypes = Post::$postType;
        $statuss = Post::$status;

        return view('post.edit', compact('post', 'categories', 'postTypes', 'statuss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(Post::$rules);
        $data = $request->all();
        $post = Post::find($id);

        if(isset($request->image)){
            $fileName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/posts', $fileName);
            $data['image'] = 'posts/'.$fileName;
        }
        $post->update($data);

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
}
