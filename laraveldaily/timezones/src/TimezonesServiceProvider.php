<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/laraveldaily/timezones'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       include __DIR__.'/routes/routes.php';
        $this->app->make('Laraveldaily\Timezones\TimezonesController');
    }
}
