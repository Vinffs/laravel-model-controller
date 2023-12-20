@extends('layouts.app')

@section('title', 'Show Movies')

@section('content')
    <main class="container">
        <div class="row justify-content-center py-4">
            <div class="col-4">
                <img src="{{ $movie->image }}" class="card-img-top my-ratio" alt="{{ $movie->title }}">
            </div>
            <div class="col-6 d-flex flex-column justify-content-center">
                <div>
                    <h5>
                        <span class="fw-bold">Title: </span>{{ $movie->title }}
                    </h5>
                    <h6>
                        <span class="fw-bold">Original Title: </span>{{ $movie->original_title }}
                    </h6>
                    <h6>
                        <span class="fw-bold">Vote: </span>{{ $movie->vote }}
                    </h6>
                    <h6>
                        <span class="fw-bold">Language: </span>{{ $movie->language }}
                    </h6>
                    <h6>
                        <span class="fw-bold">Release Date: </span>{{ $movie->date }}
                    </h6>
                </div>
            </div>
        </div>
    </main>

@endsection
