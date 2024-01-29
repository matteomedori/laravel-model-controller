<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1 class="container text-center my-3">Movies</h1>

    <div class="container text-center">
        <div class="row row-cols-4 gy-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie['original_title'] }}</h6>
                            <p class="card-text">Anno d'uscita: {{ Str::substr($movie['date'], 0, 4) }}</p>
                            <p class="card-text">Votazione: {{ $movie['vote'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
