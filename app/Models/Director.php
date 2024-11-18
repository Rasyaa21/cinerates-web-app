<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image'
    ];

    /**
     * Get all of the movie for the Director
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movie()
    {
        return $this->hasMany(Movie::class);
    }
}
