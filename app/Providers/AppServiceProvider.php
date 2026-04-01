<?php

namespace App\Providers;

use App\Repositories\Eloquent\DashboardRepository;
use App\Repositories\Eloquent\EntrepriseRepository;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Interfaces\DashboardRepositoryInterface;
use App\Repositories\Interfaces\EntrepriseRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
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
        $this->app->bind(DashboardRepositoryInterface::class, DashboardRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
