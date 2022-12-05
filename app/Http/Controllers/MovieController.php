<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function show($id){
        $movie = Movie::find($id);
        // dd($movie);
        return view('single', ['movie' => $movie]);
    }
    
    public function randomizer(){
        $rdmId = Movie::all();
        $rdmLength = count($rdmId);
        $rdm = rand(1, $rdmLength);
        $movie = Movie::find($rdm);
        return redirect(route('single', $rdm));
        // dd($movie);
        return view('single', ['movie' => $movie]);
    }
    
    public function list(Request $request){
        $order_by = $request->query('order_by');
        $order = $request->query('order');
        $genre = $request->query('genre');
        $query = Movie::query();

        if ($order_by && $order){
            $query->orderBy($order_by, $order);
        }

        if ($genre != null){
            //query filtre genre
            $query->whereHas('genres', function (Builder $query) use ($genre) {
                $query->where('label', '=', $genre);
            });
        }

        $movies = $query->paginate(20);
        $genres = Genre::all();
        Paginator::useBootstrapFive();
        // $movies = Movie::paginate(20);
        // dd($movie);
        return view('list', ['movies' => $movies, 'genres' => $genres]);
    }
}
