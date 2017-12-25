<?php

namespace Toolkito\Larabase;

use Illuminate\Support\ServiceProvider;

class LarabaseServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // Load package routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Publish package's configuration file to the application
        $this->publishes([
            __DIR__.'/../config/lara_base.php' => config_path('config.php'),
        ], 'larabase');

        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/../databases/migrations');

        // Publishing Translations
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang/en', 'Larabase');
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/larabase'),
        ]);

        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'Larabase');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/larabase'),
        ]);
    }

    public function register()
    {
        // Default Package Configuration
        $this->mergeConfigFrom( __DIR__.'/../config/config.php', 'larabase');
    }

    public function provides()
    {
        return ['larabase'];
    }
}
