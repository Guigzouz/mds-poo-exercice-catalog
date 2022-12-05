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
</div>

@endsection
