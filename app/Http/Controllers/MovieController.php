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
    
    public function randomizer(Request $request){
        $rdmId = Movie::all();
        $rdmLength = count($rdmId);
        $rdm = rand(0, $rdmLength - 1);
        $movie = Movie::find($rdm);
        return redirect(route('single', $rdm));
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
    }
}
