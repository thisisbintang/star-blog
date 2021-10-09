@extends('layouts.main')

@section('container')
    <h2>Kategori</h2>
    @foreach ($categories as $category)
        <article class="mb-5">
            <h2><a href="/categories/{{ $category->slug }}">#{{ $category->name }}</a></h2>
            @foreach ($category->posts as $post)
                <article class="mb-3">
                    <h6><a href="/authors/{{ $post->author->slug }}">by {{ $post->author->name }}</a></h6>
                    <p>{{ $post->excerpt }}</p>
                    <a href="/posts/{{$post->slug}}">selengkapnya</a>
                </article>
            @endforeach

        </article>

    @endforeach

@endsection
