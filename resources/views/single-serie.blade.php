@extends('layouts.master')

@section('content')
 <div class="single-div">
    <div class="single-img">
        <img src="{{$serie->poster}}" alt="{{$serie->primaryTitle}} poster">
        <div class="single-desc">
            <div class="single-title">
                <h1>{{$serie->originalTitle}}</h1>
                <p>{{$serie->primaryTitle}}</p>

            </div>
            <p>{{$serie->plot}}</p>
            {{-- <p>endYear= {{$serie->endYear}}</p> --}}
            <div class="single-first">
                <p>{{$serie->averageRating}}/10 for {{$serie->numVotes}} votes</p>
                <p>{{$serie->startYear}}</p>
                <p>{{$serie->runtimeMinutes}} mins</p>
                <p>id= {{$serie->id}}</p>
            </div>
            
        </div>
    </div>

    <div class="episodes-list">
        <h1>Episodes list (in a random order)</h1>
        @foreach ($episodes as $episode)
        <div class="episodes">
            <a href="/episode/{{$episode->id}}">
                <div style="display: flex">
                    <p>{{$episode->episodeNumber}}.</p>
                    <img src="{{$episode->poster}}" alt="{{$episode->originalTitle}}" width="100px" height="50px">
                    
                </div>
                <p>{{$episode->primaryTitle}}</p>
                <p>{{$episode->averageRating}}</p>
                <p>{{$episode->runtimeMinutes}}</p>
            </a>
        </div>
        @endforeach
    </div>

</div>

@endsection
