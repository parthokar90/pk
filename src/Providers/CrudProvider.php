<?php

namespace Crud\Operation\Providers;

use Illuminate\Support\ServiceProvider;

class CrudProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       
             $this->publishes([
                $this->loadRoutesFrom(__DIR__.'/../routes/web.php'),
                $this->loadViewsFrom(__DIR__.'/../views', 'view'),
                $this->loadMigrationsFrom(__DIR__ . '/../database/migrations'),
            ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'view');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
