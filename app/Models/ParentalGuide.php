<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentalGuide extends Model
{
    protected $fillable = [
        'pg_name',
        'pg_rate'
    ];

    /**
     * Get all of the movie for the ParentalGuide
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movie()
    {
        return $this->hasMany(Movie::class);
    }
}
