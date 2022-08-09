<?php

namespace Jcgdev\BlashboardUi;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BlashboardUiServiceProvider extends ServiceProvider
{

    protected $name;

    public function boot()
    {
        $this->loadViewsFrom(__DIR__. '/../resources/views/', 'blashboard-ui');

        $this->publishes([
            __DIR__. '/../resources/views/components/' => resource_path('views/components/blashboard')
        ], 'blashboard-ui-bladeComponents');

        Blade::componentNamespace('Jcgdev\\BlashboardUi\\Views\\Components', 'blashboard');

    }

    public function register()
    {
        $this->app->bind('Jcgdev\BlashboardUi\Views\Components', 'components');
    }
}
