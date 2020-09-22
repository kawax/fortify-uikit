<?php

namespace Revolution\Fortify\Uikit;

use Illuminate\Support\ServiceProvider;

class UikitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'fortify-uikit');

        $this->publishes(
            [
                __DIR__.'/../views' => resource_path('views/vendor/fortify-uikit'),
            ],
            'fortify-uikit'
        );
    }
}
