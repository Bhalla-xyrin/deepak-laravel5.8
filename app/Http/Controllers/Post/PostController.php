<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use View;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return View::make('posts.ahow-all', compact('posts'));
    }

    public function show($id)
    {
        return Post::findOrFail($id);
    }

    public function store(Request $request)
    {
        Post::store($request);
    }

    //Get category list
    public function categories($category)
    {
        $posts = Post::whereCategory($category)->get();

        return View::make('posts.categories-detail', compact('posts'));
    }
}

