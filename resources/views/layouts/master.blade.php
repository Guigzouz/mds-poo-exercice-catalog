<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <header class="global-header">
        <nav class="global-navbar">
        <a href="/"><h1>{{ config('app.name') }}</h1></a>
        <a href="/movies"><h3>See more movies</h3></a>
        <a href="/movie/rdm"><h3>See a random movie</h3></a>
        </nav>
    </header>
    @yield('content')
</body>
</html>
