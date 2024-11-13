<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieImage extends Model
{
    protected $fillable = [
        'movie_id',
        'movie_trailer',
        'movie_poster',
        'image'
    ];

    /**
     * Get the movie that owns the MovieImage
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
