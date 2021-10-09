@extends('layouts.main')

@section('container')
    <h2>Postingan</h2>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <h5>by <a href="/authors/{{ $post->author->slug }}">{{ $post->author->name }}</a></h5>
            <p>{{ $post->excerpt }} <a href="/categories/{{ $post->category->slug }}">#{{ $post->category->name }}</a>
            </p>
        </article>

    @endforeach

@endsection
