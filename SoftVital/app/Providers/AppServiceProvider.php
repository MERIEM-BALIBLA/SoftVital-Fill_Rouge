<?php

namespace App\Providers;

use App\Repositories\AuthRepository;
use App\Repositories\AuthInterfaceRepository;
use App\Repositories\post\PostInterfaceRepository;
use App\Repositories\post\PostRepository;
use App\Repositories\profile\ProfileInterfaceRepository;
use App\Repositories\profile\ProfileRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthInterfaceRepository::class, AuthRepository::class);
        $this->app->bind(ProfileInterfaceRepository::class, ProfileRepository::class);
        $this->app->bind(PostInterfaceRepository::class, PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
