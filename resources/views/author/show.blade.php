@extends('layouts.main')

@section('container')
    <h2 class="mb-3">Penulis: {{ $author->name }}</h2>
    @if ($posts->count())
        <div class="card mb-5">
            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.6)">
                {{ $posts[0]->category->name }}
            </div>
            <img src="https://source.unsplash.com/1200x500/?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h5 class="card-title"><a class="text-decoration-none text-dark"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
                <small class="text-muted">
                    in <a class="text-decoration-none"
                        href="/categories/{{ $posts[0]->category->name }}">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }} </p>
                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">selengkapnya</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.6)">
                            {{ $post->category->name }}
                        </div>
                        <img src="https://source.unsplash.com/500x500/?{{ $post->category->name }}"
                            class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-decoration-none text-dark"
                                    href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                            <small class="text-muted">
                                in <a class="text-decoration-none"
                                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                {{ $post->created_at->diffForHumans() }}
                            </small>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <a class="text-decoration-none" href="/authors">kembali</a>
@endsection
