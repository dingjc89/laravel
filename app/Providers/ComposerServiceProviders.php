<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProviders extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*','App\Http\ViewComposers\ProfileComposer');//视图被渲染时执行
        // view()->creator('profile', 'App\Http\ViewCreators\ProfileCreator');//视图在实例化后执行 ？？
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
