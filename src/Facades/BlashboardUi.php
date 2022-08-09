<?php

namespace Jcgdev\BlashboardUi\Facades;

use Illuminate\Support\Facades\Facade;

class BlashboardUi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'blashboard-ui';
    }
}