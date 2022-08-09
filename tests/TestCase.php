<?php

namespace Jcgdev\BlashboardUi\Tests;

use Jcgdev\BlashboardUi\BlashboardUiServiceProvider;
use Jcgdev\BlashboardUi\Facades\BlashboardUi;
use Jcgdev\BlashboardUi\RouteServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{


    public function getPackageProviders($app)
    {
        return [
            BlashboardUiServiceProvider::class,
            RouteServiceProvider::class
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            "BlashboardUi" => BlashboardUi::class
        ];
    }

}

    
    