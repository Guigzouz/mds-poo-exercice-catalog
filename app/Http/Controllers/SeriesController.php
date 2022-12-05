<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Series;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SeriesController extends Controller
{
    public function show($id){
        $serie = Series::find($id);
        // dd($movie);
        return view('single-serie', ['serie' => $serie]);
    }
    
    public function randomizer(){
        $rdmId = Series::all();
        $rdmLength = count($rdmId);
        $rdm = rand(1, $rdmLength);
        $serie = Series::find($rdm);
        return redirect(route('single-serie', $rdm));
        // dd($movie);
        return view('single-serie', ['serie' => $serie]);
    }
    
    public function list(Request $request){
        $order_by = $request->query('order_by');
        $order = $request->query('order');
        $genre = $request->query('genre');
        $query = Series::query();

        if ($order_by && $order){
            $query->orderBy($order_by, $order);
        }

        if ($genre != null){
            //query filtre genre
            $query->whereHas('genres', function (Builder $query) use ($genre) {
                $query->where('label', '=', $genre);
            });
        }

        $series = $query->paginate(20);
        $genres = Genre::all();
        Paginator::useBootstrapFive();
        // $movies = Movie::paginate(20);
        // dd($series);
        return view('series', ['series' => $series, 'genres' => $genres]);
    }
}
