<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Contract\UserInterface', 'App\Services\UserServices');
        $this->app->bind('App\Contract\NewsInterface', 'App\Services\NewsServices');
        $this->app->bind('App\Contract\CategoryInterface', 'App\Services\CategoryServices');

    }
}
