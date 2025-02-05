<?php

namespace App\Models;

use App\Models\Episode;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'series';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function episodes()
    {
        return $this->hasMany(Episode::class, 'series_id');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'series_genres');
    }

    // public function seasons()
    // {
        
    // }
}
