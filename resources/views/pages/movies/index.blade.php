@extends('layouts.app')

@section('title', 'Index Movies')

@section('content')
    <main class="container text-center">
        <h2>THIS IS THE MOVIE SECTION</h2>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-12 col-md-4 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ $movie->image }}" class="card-img-top my-ratio" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h6 class="card-title">
                                {{ $movie->title }}
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

@endsection
