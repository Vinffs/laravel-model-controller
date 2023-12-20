@extends('layouts.app')

@section('title', 'Show Movies')

@section('content')
    <main class="container text-center">
        <h2>{{ $movie->title }}</h2>
        <div class="row">
            <div class="col-8 mx-auto">
                <div>
                    <img src="{{ $movie->image }}" class="card-img-top my-ratio" alt="{{ $movie->title }}">
                    <div>
                        <h6>
                            Original Title: {{ $movie->original_title }}
                        </h6>
                        <h6>
                            Vote: {{ $movie->vote }}
                        </h6>
                        <h6>
                            Release Date: {{ $movie->date }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
