<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    protected $fillable = [
        'movie_id',
        'user_id',
        'is_watched',
    ];

    protected $casts = [
        'is_watched' => 'boolean',
    ];

    /**s
     * Get the user that owns the Watchlist
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the movie for the Watchlist
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movie()
    {
        return $this->hasMany(Movie::class);
    }
}
