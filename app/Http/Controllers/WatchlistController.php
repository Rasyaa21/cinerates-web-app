<?php

namespace App\Http\Controllers;

use App\Interfaces\WatchlistRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    private WatchlistRepositoryInterface $watchlistRepository;

    public function __construct(WatchlistRepositoryInterface $watchlistRepository)
    {
        $this->watchlistRepository = $watchlistRepository;
    }

    public function addToWatchlist($movie_id)
    {
        $user_id = Auth::id();
        $this->watchlistRepository->addToWatchlist($movie_id, $user_id);
        return redirect()->route('watchlist')->with('success', 'Movie added to watchlist');
    }

    public function removeFromWatchlist($movie_id){
        $user_id = Auth::id();
        $this->watchlistRepository->removeFromWatchlist($movie_id, $user_id);
        return redirect()->route('watchlist')->with('success', 'Movie removed from watchlist');
    }

    public function isWatchedWatchlist($movie_id){
        $user_id = Auth::id();
        $this->watchlistRepository->isWatchedWatchlist($movie_id, $user_id);
        return redirect()->route('watchlist')->with('success', 'Movie marked as watched');
    }
}

