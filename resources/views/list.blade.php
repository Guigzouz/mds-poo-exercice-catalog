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

        <div class="dropdown-startYear">
            <a href="/movies?order_by=startYear&order=desc"><button>Newest</button></a>
            <a href="/movies?order_by=startYear&order=asc"><button>Oldest</button></a>
        </div>
        <div class="dropdown-averageRating">
            <a href="/movies?order_by=averageRating&order=desc"><button>Top rated</button></a>
            <a href="/movies?order_by=averageRating&order=asc"><button>Bottom rated</button></a>
        </div>
        <a href="/movies"><button>Vanilla</button></a>        

    </div>
    @foreach ($movies as $movie)
    <div style="display: flex">
        <a href="/movies/{{ $movie->id }}"><img src="{{$movie->poster}}" alt=""></a>
        <h2>{{$movie->primaryTitle}}</h2>
        <p>{{$movie->plot}}</p>
    </div>
    @endforeach
    <div class="pagination">
        {{ $movies->appends(request()->query())->links() }} 
    </div>
    


</body>
</html>