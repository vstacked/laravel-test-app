@extends('layouts.main')

@section('content')
    <h2>{{ $post->title }}</h2>

    <p>By. me in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {!! $post->body !!}

    <a href="/posts">Back to Posts</a>
@endsection
