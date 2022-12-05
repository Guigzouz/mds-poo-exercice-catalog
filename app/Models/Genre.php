<?php

namespace App\Models;

use App\Models\Episode;
use App\Models\Movie;
use App\Models\Series;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'genres';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movies_genres');
    }

    public function series()
    {
        return $this->belongsToMany(Series::class, 'series_genre');
    }

    public function episodes()
    {
        return $this->belongsToMany(Episode::class, 'episodes_genre');
    }
}
