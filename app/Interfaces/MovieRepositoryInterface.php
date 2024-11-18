<?php

namespace App\Interfaces;

interface MovieRepositoryInterface{
    public function getAllMovie();
    public function getMovieByGenre($category);
    public function getWatchlistMovie();
    public function getPopularMovie();
    public function addLikedMovie($id);
    public function addMovieToWatchlist($id);
}
