<?php

namespace Altafin\Inspire\Providers;

use Illuminate\Support\ServiceProvider;

class InspirationProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Altafin\Inspire\Controllers\InspirationController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }
}
