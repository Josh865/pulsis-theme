<?php

namespace Pulsis\Theme;

use Illuminate\Support\ServiceProvider;

class PulsisThemeProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'pulsis-theme');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/theme'),
        ]);

        $this->publishes(
            [
                __DIR__ . '/../public' => public_path('theme'),
            ],
            'assets'
        );
    }
}
