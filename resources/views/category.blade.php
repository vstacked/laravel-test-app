@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Post Category: {{ $title }}</h1>

    @foreach ($posts as $post)
        <article class="mb5">
            <h2>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>
            <h5>By: {{ $post->author }}</h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
