@extends('layouts.main')

@section('container')
    <article class="mb-2">
        <h2>{{ $post->title }}</h2>
        <h5>by <a href="/authors/{{ $post->author->slug }}">{{ $post->author->name }}</a>

        </h5>
        <p>{!! $post->body !!} <a href="/categories/{{ $post->category->slug }}">#{{ $post->category->name }}</a>
        </p>
    </article>
    <a href="/posts">kembali</a>
@endsection
