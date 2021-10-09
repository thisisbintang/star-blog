@extends('layouts.main')

@section('container')
    <h2>Penulis</h2>
    @foreach ($authors as $author)
        <article class="mb-5">
            <h2><a href="/authors/{{ $author->slug }}">{{ $author->name }}</a></h2>
            @foreach ($author->posts as $post)
                <article class="mb-2">
                    <h6><a href="/categories/{{ $post->category->slug }}">#{{ $post->category->name }}</a></h6>
                    <p>{{ $post->excerpt }}</p>
                </article>
            @endforeach

        </article>

    @endforeach

@endsection
