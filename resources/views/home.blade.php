@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="container pt-4">

        <h1 class="text-white pb-5">
            <span class="red"><i class="fas fa-film"></i></span>
            <span class="red"><i class="fas fa-book"></i></span>
            Welcome to Laravel Cinematic and Literary Haven!
            <span class="red"><i class="fas fa-book"></i></span>
            <span class="red"><i class="fas fa-film"></i></span>
        </h1>
        <h5 class="pb-5 text-center balanceText">
            Hello and a warm welcome to our digital sanctuary dedicated to the magic of storytelling! Whether you're a
            cinephile seeking the latest blockbuster or a bookworm on the hunt for your next literary escape, you've just
            stepped into the perfect realm.
        </h5>

        <h3 class="text-center text-white pb-2">
            🍿 Lights, Camera, Action!🍿</h3>
        <h6 class="text-center pb-5 balanceText">
            Embark on a thrilling cinematic journey with our Movie Page. Immerse yourself in the world of film as we curate
            a
            diverse selection of genres, from heartwarming dramas to pulse-pounding action, and everything in between.
            Explore
            insightful reviews, stay updated on upcoming releases, and let the silver screen transport you to new realms of
            imagination.
        </h6>


        <h3 class="text-center text-white pb-2">📖 Unleash Your Imagination 📖</h3>
        <h6 class="text-center pb-5 balanceText">
            For the literary adventurers among us, our Book Page is a treasure trove waiting to be discovered. Dive into the
            realms of fiction and non-fiction alike, where every page opens a portal to new ideas, characters, and
            universes.
            From classic novels to contemporary bestsellers, find your next literary companion through our curated
            recommendations and insightful reviews.
        </h6>

        <div class="d-flex justify-content-evenly pb-5">
            <div class="introImage mx-2">
                <h5 class="text-center red">Movies</h5>
                <a href="{{ route('movies.index') }}">
                    <img src="{{ Vite::asset('resources/images/movies.jpg') }}" alt="movies">
                </a>
            </div>
            <div class="introImage mx-2">
                <h5 class="text-center red">Books</h5>
                <a href="{{ route('books.index') }}">
                    <img src="{{ Vite::asset('resources/images/books.jpg') }}" alt="books">
                </a>
            </div>
        </div>
    </main>

@endsection
