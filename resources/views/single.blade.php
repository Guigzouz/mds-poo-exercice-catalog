<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$movie->primaryTitle}}</title>
</head>
<body>
    <img src="{{$movie->poster}}" alt="{{$movie->primaryTitle}} poster">
    <p>id= {{$movie->id}}</p>
    <p>primaryTitle= {{$movie->primaryTitle}}</p>
    <p>originalTitle= {{$movie->originalTitle}}</p>
    <p>startYear= {{$movie->startYear}}</p>
    <p>endYear= {{$movie->endYear}}</p>
    <p>runtime(mins)= {{$movie->runtimeMinutes}}</p>
    <p>plot= {{$movie->plot}}</p>
    <p>averageRatings= {{$movie->averageRating}}</p>
    <p>numvotes= {{$movie->numVotes}}</p>
</body>
</html>