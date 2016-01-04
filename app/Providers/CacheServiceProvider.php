<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cache;
use App\Extensions\MongoStore;

class CacheServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Cache::extend('mongo', function($app) {
            return new Cache::repository(new MongoStore);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
