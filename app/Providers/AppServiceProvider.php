<?php

namespace App\Providers;

use App\Dua;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view) {
            $view->with('duas', Dua::active()->latest()->get());
        
        });

        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->role_id == 1;
        });
    }
}
