<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/boxoffice', function () {
    return view('boxoffice');
})->name('boxoffice'); 

Route::get('/topfilm', [MovieController::class, 'getPopularMovie'])->name('topfilm');
