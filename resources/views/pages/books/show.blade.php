@extends('layouts.app')

@section('title', 'Show Books')

@section('content')
    <main class="container text-center">
        <h2>{{ $book->title }}</h2>
        <div class="row">
            <div class="col-8 mx-auto">
                <div>
                    <img src="{{ $book->cover_image }}" class="card-img-top my-ratio" alt="{{ $book->title }}">
                    <div>
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
