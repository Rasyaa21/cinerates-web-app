<?php

namespace App\Interfaces;

interface WatchlistRepositoryInterface{
    public function addToWatchlist($movie_id, $user_id);
    public function removeFromWatchlist($movie_id, $user_id);
    public function isWatchedWatchlist($movie_id, $user_id);
}
