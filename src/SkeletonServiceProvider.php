<?php

namespace VendorName\LaravelSkeletonLibrary;

use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load Routes
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');

        // Load Views
        $this->loadViewsFrom(__DIR__ . '/Resources/views', 'laravel-skeleton-library');

    }

    public function register()
    {
        //
    }
}