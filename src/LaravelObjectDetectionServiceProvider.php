<?php
namespace Livijn\LaravelObjectDetection;

use Illuminate\Support\ServiceProvider;

class LaravelObjectDetectionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('laravel-object-detection', function () {
            return new LaravelObjectDetection;
        });
    }
}
