<?php

namespace Jcgdev\BlashboardUi\Http\Controllers;

use Jcgdev\BlashboardUi\Facades\BlashboardUi;

class ExampleController 
{


    public function __invoke()
    {
        //return BlashboardUi::hello();
        return view('blashboard-ui::home', [
            'message' => BlashboardUi::hello()
        ]);
    }
}
