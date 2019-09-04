
@php 
$posts = \App\Post::all();
@endphp

@foreach ($posts as $post)
    @if(isset($post->category))
        <a href="/categories-detail/{{ $post->category }} ">{{ $post->category }} </a>
        <br>
    @endif
    
@endforeach


