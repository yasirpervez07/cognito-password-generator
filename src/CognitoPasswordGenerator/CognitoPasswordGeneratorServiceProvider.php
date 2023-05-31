<?php

namespace yasirpervez07\CognitoPasswordGenerator;

use Illuminate\Support\ServiceProvider;
use yasirpervez07\CognitoPasswordGenerator\CognitoPasswordGenerator;

class CognitoPasswordGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CognitoPasswordGenerator::class, function ($app) {
            return new CognitoPasswordGenerator();
        });
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // You can optionally add any bootstrapping logic here
    }
}
