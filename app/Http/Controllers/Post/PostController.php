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

        return View::make('posts.show-all', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return View::make('posts.show', compact('post'));
    }

    public function edit($post)
    {
        $task = Post::findOrFail($post);
        
        return view('posts.edit',compact('task', $task));
    }

    public function update(Request $request, Post $task)
    {
        $task->update($request->all());
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

