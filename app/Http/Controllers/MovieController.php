<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function show($id){
        $movie = Movie::find($id);
        // dd($movie);
        return view('single', ['movie' => $movie]);
    }




    public function list(){
        Paginator::useBootstrap();
        $movies = Movie::paginate(20);
        // dd($movie);
        return view('list', ['movies' => $movies]);
    }
}
