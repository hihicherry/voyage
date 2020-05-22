<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Faker\Generator::class, function(){
            return \Faker\Factory::create('zh_TW');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        //全域共享
        view()->share('tel', '12345678');
        //部分共享
        view()->composer(['index', 'home'], function($view){
            $view->with('address', '中山路一號');
        });
    }
}
