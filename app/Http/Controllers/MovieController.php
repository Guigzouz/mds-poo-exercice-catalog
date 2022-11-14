<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id){
        $movie = Movie::find($id)->first();
        // dd($movie);
        return view('single', ['movie' => $movie]);
    }

    public function list(){
        $movie = Movie::all()->take(20);
        // dd($movie);
        return view('list', ['movie' => $movie]);
    }
}
