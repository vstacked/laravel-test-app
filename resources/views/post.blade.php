@extends('layouts.main')

@section('content')
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}

    <a href="/posts">Back to Posts</a>
@endsection
