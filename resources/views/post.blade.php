@extends('layouts.main')

@section('content')
    <article class="mb5">
        <h2>
            <a href="/posts/{{ $post['slug'] }}">
                {{ $post['title'] }}
            </a>
        </h2>
        <h5>By: {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>

    <a href="/posts">Back to Posts</a>
@endsection
