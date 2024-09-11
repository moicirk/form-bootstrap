<?php

namespace Moicirk\FormBootstrap;

use Illuminate\Support\ServiceProvider;

class FormBootstrapServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'moicirk');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'moicirk');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/formbootstrap.php', 'formbootstrap');

        // Register the service the package provides.
        $this->app->singleton('formbootstrap', function ($app) {
            return new FormBootstrap;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['formbootstrap'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/formbootstrap.php' => config_path('formbootstrap.php'),
        ], 'formbootstrap.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/moicirk'),
        ], 'formbootstrap.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/moicirk'),
        ], 'formbootstrap.assets');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/moicirk'),
        ], 'formbootstrap.lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
