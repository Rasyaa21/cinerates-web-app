<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    protected $fillable = [
        'category',
        'category_desc',
        'sort_order'
    ];

    /**
     * Get all of the movie for the MovieCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
