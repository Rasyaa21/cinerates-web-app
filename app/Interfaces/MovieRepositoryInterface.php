<?php

namespace App\Interfaces;

interface MovieRepositoryInterface{
    public function getAllMovie();
    public function getMovieByGenre($category);
    public function getWatchlistMovie($user_id);
    public function getPopularMovie();
    public function addLikedMovie($id);
    public function addMovieToWatchlist($user_id, $movie_id);
}
