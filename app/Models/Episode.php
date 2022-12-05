<?php

namespace App\Models;

use App\Models\Series;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Episode extends Model
{
    use HasFactory;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'episodes';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'episodes_genres');
    }

    public function series()
    {
        return $this->belongsTo(Series::class, 'series_id');
    }
}
