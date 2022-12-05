@extends('layouts.master')

@section('content')
    <h1>genres</h1>
    <div class="genre-div">
    @foreach ($genres as $genre)
    <div style="display: flex">
        <a href="/movies?genre={{$genre->label}}"><p>{{$genre->label}}</p></a>
    </div>
    @endforeach
    </div>

    @endsection
