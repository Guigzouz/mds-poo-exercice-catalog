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
        <a href="/movies"><h3>Movies</h3></a>
        <a href="/series"><h3>Series</h3></a>
        <a href="/movie/rdm"><h3>Random Movie</h3></a>
        <a href="/serie/rdm"><h3>Random Serie</h3></a>
        <a href="/genres"><h3>List all genres</h3></a>
        </nav>
    </header>
    @yield('content')
</body>
</html>
