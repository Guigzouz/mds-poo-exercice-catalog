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




    public function list(Request $request){
        $order_by = $request->query('order_by');
        $order = $request->query('order');
        // $query = Movie::query();
        
        if ($order_by && $order){
            $movies = Movie::orderBy($order_by, $order)->paginate(20);
        } else {
            $movies = Movie::paginate(20);
        }



        Paginator::useBootstrapFive();
        // $movies = Movie::paginate(20);
        // dd($movie);
        return view('list', ['movies' => $movies]);
        
        //averageRating handler
        // if($order_by === 'averageRating'){
        //     $movies=Movie::orderBy('averageRating', 'asc')->paginate(20);
        //     if($order === 'asc'){
        //         $movies=Movie::orderBy('averageRating', 'asc')->paginate(20);
        //     } else {
        //         $movies=Movie::orderBy('averageRating', 'desc')->paginate(20);
        //     };

        // //realease date handler
        // } elseif ($order_by === 'releaseDate'){
        //     $movies=Movie::orderBy('releaseDate', 'asc')->paginate(20);
        //     if($order === 'asc'){
        //         $movies=Movie::orderBy('releaseDate', 'asc')->paginate(20);
        //     } else {
        //         $movies=Movie::orderBy('releaseDate', 'desc')->paginate(20);
        //     };
        // } else {
        //     $movies = Movie::paginate(20);
        //     echo "ici";

        // }

    }
}
