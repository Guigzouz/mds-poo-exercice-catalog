<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Series;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class EpisodeController extends Controller
{
    public function show($id){
        $episode = Episode::find($id);
        // $series = Series::where('id', $id)->get();
        $series = $episode->series;
        // dd($episode);
        return view('single-episode', ['episode' => $episode, 'series' => $series]);
    }
}
