@extends('layouts.app')
@section('content')
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1> Posts</h1>
            <table class="table table-bordered">
                <thead>
                    <th width="80px">Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th width="150px">Action</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ strip_tags($post->description )}}</td>
                    <td><button type="button" onclick="window.location='{{ url('/posts/'.$post->id. '/edit') }}'">Edit Post</button></td>
                </tr>
                @endforeach
                </tbody>
   
            </table>
        </div>
    </div>
</div>
@endsection
