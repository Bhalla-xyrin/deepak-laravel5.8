@extends('layouts.auth')
@php 
    $posts = \App\Post::paginate(3);
@endphp
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <button type="button" onclick="window.location='http://localhost:8000/categories-list'">Click here to see categories</button>
        <button type="button" onclick="window.location='http://localhost:8000/post'">Click New Post</button>
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
