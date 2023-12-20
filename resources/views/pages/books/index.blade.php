@extends('layouts.app')

@section('title', 'Index Books')

@section('content')
    <main class="container text-center">
        <h2 class="red py-3">Latest Books</h2>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-12 col-md-4 col-lg-3 py-2">
                    <div class="card my-card d-flex flex-column justify-content-between">
                        <div>
                            <img src="{{ $book->cover_image }}" class="card-img-top my-ratio" alt="{{ $book->title }}">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">
                                {{ $book->title }}
                            </h6>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mb-2">
                            <a href="{{ route('books.show', $book->id) }}" class="buttonDetails">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

@endsection
