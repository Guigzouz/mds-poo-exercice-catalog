<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list</title>
</head>
<body>
    @foreach ($movie as $movie)
    <div style="display: flex">
        <img src="{{$movie->poster}}" alt="">
        <h2>{{$movie->primaryTitle}}</h2>
        <p>{{$movie->plot}}</p>
    </div>
    @endforeach
</body>
</html>