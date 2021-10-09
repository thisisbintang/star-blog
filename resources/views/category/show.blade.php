@extends('layouts.main')

@section('container')
    <h2>Kategori: {{ $category->name }}</h2>
    @foreach ($category->posts as $post)
        <article class="mb-3">
            <h5>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                by <a href="/authors/{{ $post->author->slug }}">{{ $post->author->name }}</a>
            </h5>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}">selengkapnya</a>
        </article>
    @endforeach

    <a href="/categories">kembali</a>
@endsection
