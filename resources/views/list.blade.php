@extends('layouts.master')

@section('content')

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
    <div class="genre-list">

        @foreach ($genres as $genre)
        <div style="display: flex">
            <a href="/movies?genre={{$genre->label}}"><button>{{$genre->label}}</button></a>
        </div>
        @endforeach
        
    </div>
    <div class="list-div">
        <div class="cta">
            <a href="/movie/rdm"><h3>Click me to see a random movie !</h3></a>
        </div>

    @foreach ($movies as $movie)
    <main style="display: flex">
        <div class="preview">
            <a href="/movies/{{ $movie->id }}"><img src="{{$movie->poster}}" alt=""></a>
            <h2 class="movie-title">{{$movie->primaryTitle}}</h2>
        </div>
        <p>{{$movie->plot}}</p>
    </main>
    @endforeach
    </div>

    <div class="pagination-div">
    <div class="pagination">
        {{ $movies->appends(request()->query())->links() }} 
    </div>
    </div>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .pagination>nav>div{
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
        </style>

@endsection
