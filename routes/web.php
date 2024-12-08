<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/boxoffice', function () {
    return view('boxoffice');
}); 

Route::get('/topfilm', [MovieController::class, 'getPopularMovie'])->name('topfilm');
