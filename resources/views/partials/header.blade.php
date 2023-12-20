<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="logo" src="{{ Vite::asset('resources/images/laravel.png') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navSelection"
            aria-controls="navSelection" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navSelection">
            <div class="navbar-nav">
                <a class="nav-link px-3 fs-4" href="{{ route('home') }}">Home</a>
                <a class="nav-link px-3 fs-4" href="{{ route('movies.index') }}">Movies</a>
                <a class="nav-link px-3 fs-4" href="{{ route('books.index') }}">Books</a>
            </div>
        </div>
    </div>
</nav>
