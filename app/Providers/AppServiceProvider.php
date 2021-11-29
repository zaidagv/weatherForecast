<?php

namespace App\Providers;

use App\Contracts\WeatherService;
use App\Adapters\RestWeatherAdapter;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(WeatherService::class, RestWeatherAdapter::Class);
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
