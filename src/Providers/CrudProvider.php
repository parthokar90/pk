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
       
            $this->publish([
                __DIR__ . '/../routes/web.php' => base_path('routes/web.php'),
            ]);

            $this->publish([
                __DIR__ . '/../views' => base_path('resources/views/'),
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
