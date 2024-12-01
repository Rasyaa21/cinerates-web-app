<?php

namespace App\Http\Controllers;

use App\Interfaces\MovieRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    private MovieRepositoryInterface $movieRepository;

    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function getAllMovie()
    {
        $movies = $this->movieRepository->getAllMovie();
        return view('topfilm', compact('movies'));
    }

    public function getMovieByGenre($category)
    {
        $movies = $this->movieRepository->getMovieByGenre($category);
        return view('topfilm', compact('movies'));
    }

    public function getWatchlistMovie(){
        $user_id = Auth::id();
        $movies = $this->movieRepository->getWatchlistMovie($user_id);
        return view('topfilm', compact('movies'));
    }

    public function getPopularMovie(){
        $movies = $this->movieRepository->getPopularMovie();
        return view('topfilm', compact('movies'));
    }

    public function addLikedMovie($movie_id){
        $this->movieRepository->addLikedMovie($movie_id);
        return redirect()->back()->with('success', 'Movie added to liked list!');
    }

    public function addMovieToWatchlist($movie_id){
        $user_id = Auth::id();
        $this->addMovieToWatchlist($user_id, $movie_id);
        return redirect()->back()->with('success', 'Movie added to watchlist');
    }
}

