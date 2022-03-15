@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if ( count($posts) > 0 )
        @foreach ($posts as $post)
            <diiv class="well p-2">
                <h3> <a href="/posts/{{ $post->id }}"> {{ $post->title }} </a>   </h3>
                <small> {{ $post->created_at }} </small>
            </diiv>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No post found!</p>
    @endif

@endsection
