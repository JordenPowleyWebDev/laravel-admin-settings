<?php

namespace JordenPowleyWebDev\LaravelAdminSettings;

use Illuminate\Support\ServiceProvider;

class LaravelAdminSettingsServiceProvider extends ServiceProvider
{
    /**
     * LaravelAdminSettingsServiceProvider::register()
     */
    public function register()
    {
        // Merge in the package config
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-admin-settings.php', 'laravel-admin-settings');
    }

    /**
     * LaravelAdminSettingsServiceProvider::boot()
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            // Make Config Files Available To The App
            $this->publishes([
                __DIR__.'/../config/laravel-admin-settings.php' => config_path('laravel-admin-settings.php'),
            ], 'config');
        }

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}