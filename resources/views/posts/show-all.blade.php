
@extends('layouts.auth')

<?php

$admin = \Auth::guard('admin')->user();

if(is_null($admin)){
    $admin = \Auth::guard('author')->user();
}
if(is_null($admin)){
    $admin = \Auth::guard('web')->user();
}
?>
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <button type="button" onclick="window.location='http://localhost:8000/categories-list'">Click here to see categories</button>
        @if(!is_null($admin))
        <button type="button" onclick="window.location='http://localhost:8000/post'">Create New Post</button>
        @endif
        <form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <form action="/search" method="POST" role="search">
    <div class="input-group">
    <div class = "row ">
        <div class="col-md-6"><div>
        <div class="col-md-4" style="margin-left:700px">
            <input type="text" class="form-control" name="search"
                placeholder="Search posts"> <span class="input-group-btn">
            <div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-default" style="margin-left:140px">
                    <span class="glyphicon glyphicon-search"> Search</span>
                </button>
            </span>
            </div>
        </div>
    </div>
</form>
        
            <h1> Posts</h1>
            <table class="table table-bordered">
                <thead>
                    <th width="80px">Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th width="150px">Category</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>  
                    <td>{{ strip_tags($post->description) }}</td>
                    <td>{{ $post->category}}</td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
