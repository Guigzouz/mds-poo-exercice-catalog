<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function list(Request $request){
        $genres = Genre::all();
        $genre = $request->query('genre');

        if($genre != null){
        };
        // dd($genres);
        return view('genre', ['genres' => $genres]);
    }
}
