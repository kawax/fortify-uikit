<?php

namespace Revolution\Fortify\Uikit;

use Illuminate\Support\ServiceProvider;

class UikitServiceProvider extends ServiceProvider
{
    protected const TAG = 'fortify-uikit';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', self::TAG);

        $this->publishes(
            [
                __DIR__.'/../views' => $this->app->resourcePath('views/vendor/'.self::TAG),
            ],
            self::TAG
        );
    }
}
