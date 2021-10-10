@extends('layouts.main')

@section('container')
    <h2 class="mb-3">Kategori: {{ $category->name }}</h2>
    @if ($posts->count())
        <div class="card mb-5">
            <img src="https://source.unsplash.com/1200x500/?{{ $category->name }}" class="card-img-top"
                alt="{{ $category->name }}">
            <div class="card-body text-center">
                <h5 class="card-title"><a class="text-decoration-none text-dark"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h5>
                <small class="text-muted">
                    by <a class="text-decoration-none"
                        href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
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
                        <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="card-img-top"
                            alt="{{ $category->name }}">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-decoration-none text-dark"
                                    href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                            <small class="text-muted">
                                by <a class="text-decoration-none"
                                    href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
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
    <a class="text-decoration-none" href="/categories">kembali</a>
@endsection
