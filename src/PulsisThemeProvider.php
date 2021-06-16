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
            __DIR__ . '/../resources/views/components' => resource_path(
                'views/theme/components',
                'components'
            ),
            __DIR__ . '/../resources/views/layout' => resource_path(
                'views',
                'layout'
            ),
            __DIR__ . '/../public' => public_path('theme', 'assets'),
        ]);
    }
}
