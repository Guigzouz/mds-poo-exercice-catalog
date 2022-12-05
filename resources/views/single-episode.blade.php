@extends('layouts.master')

@section('content')
 <div class="single-div">
    <div class="single-img">
        <img src="{{$episode->poster}}" alt="{{$episode->primaryTitle}} poster">
        <div class="single-desc">
            <div class="single-title">
                <h1>{{$episode->originalTitle}}</h1>
                <a href="/series/{{$series->id}}">
                    <p>from : {{$series->originalTitle}}</p>
                </a>
            
            </div>
            <p>{{$episode->plot}}</p>
            {{-- <p>endYear= {{$serie->endYear}}</p> --}}
            <div class="single-first">
                <p>{{$episode->averageRating}}/10 for {{$episode->numVotes}} votes</p>
                <p>{{$episode->startYear}}</p>
                <p>{{$episode->runtimeMinutes}} mins</p>
                <p>id= {{$episode->id}}</p>
            </div>
            
        </div>
    </div>

</div>

@endsection
