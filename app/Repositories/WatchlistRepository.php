<?php

namespace App\Repositories;

use App\Interfaces\WatchlistRepositoryInterface;
use App\Models\Movie;
use App\Models\Watchlist;

class WatchlistRepository implements WatchlistRepositoryInterface{
    public function addToWatchlist($movie_id, $user_id)
    {
        $movie = Movie::where('id', $movie_id)->first();
        if (!$movie) {
            $movie = Watchlist::create([
                'user_id' => $user_id,
                'movie_id' => $movie_id
            ]);
        }

        return $movie;
    }
    public function removeFromWatchlist($movie_id, $user_id)
    {
        if ($movie = Watchlist::where('user_id', $user_id)->where('movie_id', $movie_id)->first()) {
            return $movie->delete();
        }
        return ['error' => 'movie not found'];
    }

    public function isWatchedWatchlist($movie_id, $user_id)
    {
        $movie = Watchlist::where('movie_id', $movie_id)->where('user_id', $user_id)->first();
        if (!$movie){
            return ['error' => 'movie not found'];
        }
        $movie->update(['is_watched' => true]);
        return $movie;
    }
}
