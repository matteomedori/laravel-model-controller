<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    {{-- header --}}
    <header>
        <h1 class="container text-center my-3 text-uppercase">Movies</h1>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">Home</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Trending Movies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Tv Series</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn " type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        {{-- /navbar --}}
    </header>
    {{-- /header --}}

    {{-- main --}}
    <main>
        <div class="container text-center">
            <div class="row row-cols-4 gy-4">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie['title'] }}</h5>
                                <h6 class="card-subtitle mb-2 ">{{ $movie['original_title'] }}</h6>
                                <p class="card-text">{{ Str::substr($movie['date'], 0, 4) }}</p>
                                <p class="card-text">Votazione: {{ $movie['vote'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    {{-- /main --}}

</body>

</html>
