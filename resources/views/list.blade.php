<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list</title>
    <style>
        .pagination{
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
    @foreach ($movies as $movie)
    <div style="display: flex">
        <img src="{{$movie->poster}}" alt="">
        <h2>{{$movie->primaryTitle}}</h2>
        <p>{{$movie->plot}}</p>
    </div>
    @endforeach
    {{ $movies->links() }}


</body>
</html>