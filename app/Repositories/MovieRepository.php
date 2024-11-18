<?php

namespace App\Repositories;

use App\Interfaces\MovieRepositoryInterface;
use App\Models\Movie;

class MovieRepository implements MovieRepositoryInterface{
    public function getAllMovie()
    {
        Movie::with(['image', 'image.movie_poster'])->get();
    }

    public function getMovieByGenre($genre)
    {

    }

    public function getPopularMovie()
    {

    }

    public function getWatchlistMovie()
    {

    }

    public function addLikedMovie($id)
    {

    }
}
