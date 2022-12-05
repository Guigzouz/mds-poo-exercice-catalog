<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\EpisodeController;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $movies = Movie::inRandomOrder()->whereNotNull('poster')->limit(12)->get();
    $movie = Movie::inRandomOrder()->whereNotNull('poster')->limit(1)->get();

    return view('home', ['movies' => $movies, 'movie' => $movie]);
});

Route::get('/movies/{id}', [MovieController::class, 'show'])->name('single');
Route::get('/movie/rdm', [MovieController::class, 'randomizer']);
Route::get('/movies', [MovieController::class, 'list']);
Route::get('/genres', [GenreController::class, 'list']);
Route::get('/series', [SeriesController::class, 'list']);
Route::get('/serie/rdm', [SeriesController::class, 'randomizer']);
Route::get('/series/{id}', [SeriesController::class, 'show'])->name('single-serie');
Route::get('/episode/{id}', [EpisodeController::class, 'show'])->name('single-episode');

