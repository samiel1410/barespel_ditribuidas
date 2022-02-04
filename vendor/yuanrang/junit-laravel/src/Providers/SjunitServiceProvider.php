<?php

namespace Yuanrang\JunitLaravel\Http\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class SjunitServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
//        echo '这是一个register';
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__ . '/../../resources/views', 'junit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Yuanrang\JunitLaravel\Http\Controllers',
            'prefix' => 'junit',
        ];
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
        });
    }

}