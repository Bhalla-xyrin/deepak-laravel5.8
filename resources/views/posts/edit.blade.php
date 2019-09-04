@extends('layouts.auth')

@section('content')
   <form action="{{ route('posts.update', $task) }}" method="post">
 
    {{ csrf_field() }}
 
    {{ method_field('PUT') }}
    
    <textarea name="description">{{ strip_tags($task->description) }}</textarea>
 
    <BR>
    <input type="submit">
 
</form>
@endsection