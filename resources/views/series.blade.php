@extends('layouts.master')

@section('content')

<div class="filters">  

    <div class="dropdown-startYear">
        <a href="/series?order_by=startYear&order=desc"><button>Newest</button></a>
        <a href="/series?order_by=startYear&order=asc"><button>Oldest</button></a>
    </div>
    <div class="dropdown-averageRating">
        <a href="/series?order_by=averageRating&order=desc"><button>Top rated</button></a>
        <a href="/series?order_by=averageRating&order=asc"><button>Bottom rated</button></a>
    </div>
    <a href="/series"><button>Vanilla</button></a>        
    
</div>
<div class="genre-list">

    @foreach ($genres as $genre)
    <div style="display: flex">
        <a href="/series?genre={{$genre->label}}"><button>{{$genre->label}}</button></a>
    </div>
    @endforeach
    
</div>

<div class="list-div">
    <div class="cta">
        <a href="/serie/rdm"><h3>Click me to see a random serie !</h3></a>
    </div>
@foreach ($series as $serie)
    <main style="display: flex">
        <div class="preview">
            <a href="/series/{{ $serie->id }}"><img src="{{$serie->poster}}" alt=""></a>
            <h2 class="serie-title">{{$serie->primaryTitle}}</h2>
        </div>
        <p>{{$serie->plot}}</p>
    </main>
@endforeach
</div>

<div class="pagination-div">
    <div class="pagination">
        {{ $series->appends(request()->query())->links() }} 
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