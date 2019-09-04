@extends('layouts.auth')
@php 
    $posts = \App\Post::all();
@endphp
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> Posts</h1>
            <table class="table table-bordered">
                <thead>
                    <th width="80px">Id</th>
                    <th>Title</th>
                    <th width="150px">Category</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category}}</td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>
@endsection
