<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>
<body>
    <h1>Laravel Template</h1>
    <img src="{{ Vite::asset('resources/img/prova.jpg') }}" alt="">
</body>
</html>