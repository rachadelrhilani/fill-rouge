<?php

namespace App\Providers;

use App\Interfaces\EntrepriseRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\EntrepriseRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(EntrepriseRepositoryInterface::class, EntrepriseRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
