<?php

namespace Toolkito\Larabase;

use Illuminate\Support\ServiceProvider;

class LarabaseServiceProvider extends ServiceProvider {

    public function boot() {
        // Load package routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Publish package's configuration file to the application
        $this->publishes([
            __DIR__.'/../config/lara_base.php' => config_path('lara_base.php'),
        ], 'lara_base');

        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/../databases/migrations');

        // Publishing Translations
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang/en', 'lara_base');
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/lara_base'),
        ]);

        // Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lara_base');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/lara_base'),
        ]);
    }

    public function register() {
        // Default Package Configuration
        $this->mergeConfigFrom( __DIR__.'/../config/lara_base.php', 'lara_base');
    }

    public function provides() {
        return ['lara_base'];
    }
}
