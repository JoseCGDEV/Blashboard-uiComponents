<?php

namespace Jcgdev\BlashboardUi;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ProvidersRouteServiceProvider
{

    protected $namespace = 'Jcgdev\BlashboardUi\Http\Controllers';

    public function map()
    {
        Route::namespace($this->namespace)
            ->group(__DIR__.'/../routes/web.php');
    }

}