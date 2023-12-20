@extends('layouts.app')

@section('title', 'Index Books')

@section('content')
    <main class="container text-center">
        <h2>THIS IS THE MOVIE SECTION</h2>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-12 col-md-4 col-lg-3 py-2">
                    <div class="card">
                        <img src="{{ $book->cover_image }}" class="card-img-top my-ratio" alt="{{ $book->title }}">
                        <div class="card-body">
                            <h6 class="card-title">
                                {{ $book->title }}
                            </h6>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

@endsection
