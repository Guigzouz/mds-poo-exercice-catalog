@extends('layouts.master')

@section('content')
    <div class="container">
        
        {{-- <iframe id="inlineFrame" width="100%" height="1000" src="/movie/rdm"></iframe> --}}
        @foreach ($movie as $movie)
        <div class="recommendation">
            <div class="home-recommendation">
            <a href="/movies/{{ $movie->id }}">
                <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
            </a>
            <div class="home-desc">
                <p>{{ $movie->plot}} </p>
                <div class="single-first">
                    <p>{{$movie->averageRating}}/10 for {{$movie->numVotes}} votes</p>
                    <p>{{$movie->startYear}}</p>
                    <p>{{$movie->runtimeMinutes}} mins</p>
                    <p>id= {{$movie->id}}</p>
                </div>
            </div>
            </div>
            <h1>Why not watch "{{ $movie->primaryTitle }}" ?</h1>

        </div>
        @endforeach


        <div class="wrapper">
            @foreach ($movies as $movie)
            <div>
                <a href="/movies/{{ $movie->id }}">
                    <img src="{{ $movie->poster }}" alt="{{ $movie->primaryTitle }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <style>
        .container {
            margin: auto;
            max-width: 900px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
        }
    </style>

@endsection

