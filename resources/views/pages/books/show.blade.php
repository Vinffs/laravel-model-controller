@extends('layouts.app')

@section('title', 'Show Books')

@section('content')
    <main class="container justify-content-center py-4">
        <div class="row">
            <div class="col-4">
                <img src="{{ $book->cover_image }}" class="card-img-top my-ratio" alt="{{ $book->title }}">
            </div>
            <div class="col-8 mx-auto">
                <div class="col-6 d-flex flex-column justify-content-center">
                    <div>
                        <h5>
                            <span class="fw-bold">Title: </span>{{ $book->title }}
                        </h5>
                        <p>
                            <span class="fw-bold">Description:</span> <br>
                            {{ $book->plot }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
