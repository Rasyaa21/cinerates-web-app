<?php

namespace App\Interfaces;

interface MovieRepositoryInterface{
    public function getAllMovie();
    public function getMovieByGenre($genre);
    public function getWatchlistMovie();
    public function getPopularMovie();
}
