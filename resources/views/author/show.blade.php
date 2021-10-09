@extends('layouts.main')

@section('container')
    <h2>Penulis: {{ $author->name }}</h2>
    @foreach ($author->posts as $post)
        <article class="mb-3">
            <h5>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h5>
            <p>{{ $post->excerpt }} <a href="/categories/{{ $post->category->slug }}">#{{ $post->category->name }}</a>
            </p>
            <a href="/posts/{{ $post->slug }}">selengkapnya</a>
        </article>
    @endforeach

    <a href="/authors">kembali</a>
@endsection
