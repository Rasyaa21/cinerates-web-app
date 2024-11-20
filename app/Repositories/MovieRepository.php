<?php

namespace App\Repositories;

use App\Interfaces\MovieRepositoryInterface;
use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Support\Facades\Auth;

class MovieRepository implements MovieRepositoryInterface{
    public function getAllMovie()
    {
        return Movie::with(['image.movie_poster'])->get();
    }

    public function getMovieByGenre($category)
    {
        return Movie::where('category_id', $category)->with(['image.movie_poster'])->get();
    }

    public function getPopularMovie()
    {
        return Movie::where('is_popular', true)->with(['image.movie_poster'])->get();
    }

    public function getWatchlistMovie()
    {
        $user_id = Auth::user()->id;
        return Watchlist::where('user_id', $user_id)->with(['image.movie_poster'])->get();
    }

    public function addLikedMovie($id)
    {
        $movie = Movie::where('id', $id)->get();
        return $movie->increment('like_count');
    }

    public function addMovieToWatchlist($id){

    }
}
