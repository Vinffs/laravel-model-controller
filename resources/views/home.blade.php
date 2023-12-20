@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="container text-center">
        <h1>Home page</h1>
        <div>
            <a href="{{ route('movies.index') }}">Movies</a>
        </div>
        <div>
            <a href="{{ route('books.index') }}">Books</a>
        </div>
    </main>

@endsection
