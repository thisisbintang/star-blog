@extends('layouts.main')

@section('container')
    <h2 class="mb-3">Penulis</h2>
    <div class="container">
        <div class="row">
            @foreach ($authors as $author)
                <div class="col-md-4 mb-3">
                    <a href="/authors/{{ $author->username }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500/?model" class="card-img"
                                alt="{{ $author->name }}">
                            <div class="card-img-overlay d-flex align-items-center">
                                <h5 class="card-title text-center flex-fill" style="background-color: rgba(0, 0, 0, 0.6)">
                                    {{ $author->username }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
