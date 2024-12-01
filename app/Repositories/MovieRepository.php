<?php

namespace App\Repositories;

use App\Interfaces\MovieRepositoryInterface;
use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class MovieRepository implements MovieRepositoryInterface
{
    public function getAllMovie()
    {
        return Movie::with('image.movie_poster')->get();
    }

    public function getMovieByGenre($category)
    {
        return Movie::where('category_id', $category)->with('image.movie_poster')->get();
    }

    public function getPopularMovie()
    {
        return Movie::where('is_popular', true)->with('image.movie_poster')->get();
    }

    public function getWatchlistMovie($user_id)
    {
        return Watchlist::where('user_id', $user_id)->with('movie.image.movie_poster')->get();
    }

    public function addLikedMovie($id)
    {
        try {
            $movie = Movie::findOrFail($id);
            $movie->increment('like_count');
            return $movie;
        } catch (ModelNotFoundException $e) {
            return ['error' => 'Movie not found'];
        }
    }

    public function addMovieToWatchlist($user_id, $movie_id)
    {
        if (Watchlist::where('user_id', $user_id)->where('movie_id', $movie_id)->exists()) {
            return ['error' => 'Movie already exists in watchlist'];
        }
        try {
            return Watchlist::create([
                'movie_id' => $movie_id,
                'user_id' => $user_id,
                'is_watched' => false
            ]);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}

