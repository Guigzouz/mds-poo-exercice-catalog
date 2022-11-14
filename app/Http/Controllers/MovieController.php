<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id){
        $movie = Movie::find($id);
        // dd($movie);
        return view('single', ['movie' => $movie]);
    }

    public function list(){
        
    }
}
