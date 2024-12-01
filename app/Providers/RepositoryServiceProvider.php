<?php

namespace App\Providers;

use App\Interfaces\MovieRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Interfaces\WatchlistRepositoryInterface;
use App\Repositories\MovieRepository;
use App\Repositories\UserRepository;
use App\Repositories\WatchlistRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MovieRepositoryInterface::class, MovieRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(WatchlistRepositoryInterface::class, WatchlistRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

