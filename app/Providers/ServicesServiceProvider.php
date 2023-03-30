<?php

namespace App\Providers;

use App\Contracts\Services\FindUserServiceContract;
use App\Contracts\Services\LoggingServiceContract;
use App\Services\FindUserService;
use App\Services\LoggingService;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FindUserServiceContract::class, FindUserService::class);
        $this->app->singleton(LoggingServiceContract::class, LoggingService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
