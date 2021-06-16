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

        $this->publishes(
            [
                __DIR__ .
                '/../resources/views/layout.blade.php' => resource_path(
                    'views/layout.blade.php'
                ),
            ],
            'pulsis-theme-layout'
        );

        $this->publishes(
            [
                __DIR__ . '/../resources/views/components' => resource_path(
                    'views/theme/components'
                ),
            ],
            'pulsis-theme-components'
        );

        $this->publishes(
            [
                __DIR__ . '/../public' => public_path('theme'),
            ],
            'pulsis-theme-assets'
        );
    }
}
