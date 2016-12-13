<?php

namespace ffy\greeklish;

use Illuminate\Support\ServiceProvider;

class GreeklishProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Greeklish::class, function ($app) {
            return new Greeklish();
        });
    }
}
