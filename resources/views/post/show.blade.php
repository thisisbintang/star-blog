@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="mb-2">
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <small class="text-muted">by <a class="text-decoration-none"
                            href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
                        in <a class="text-decoration-none"
                            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                        {{ $post->created_at->diffForHumans() }}
                    </small>
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="mt-3 img-fluid"
                        alt="{{ $post->category->name }}">
                    <article class="my-3 fs-5">{!! $post->body !!}
                        </p>
                    </article>
                    <a class="d-block mt-3" href="/posts">kembali</a>
            </div>
        </div>
    </div>

@endsection
