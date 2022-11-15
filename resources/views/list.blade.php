<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>list</title>
    <style>
        .pagination>nav>div{
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
    </style>
</head>
<body>
    <div class="filters">
        <a href="/movies?order_by=startYear&order=asc"><button>Newest</button></a>
        <a href="/movies?order_by=averageRating&order=desc"><button>Top rated</button></a>
        
    </div>
    @foreach ($movies as $movie)
    <div style="display: flex">
        <img href="/movies/{{ $movie->id }}" src="{{$movie->poster}}" alt="">
        <h2>{{$movie->primaryTitle}}</h2>
        <p>{{$movie->plot}}</p>
    </div>
    @endforeach
    <div class="pagination">
        {{ $movies->appends(request()->query())->links() }}
    </div>
    


</body>
</html>