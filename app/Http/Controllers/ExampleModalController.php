<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleModalController extends Controller
{
    public function __invoke()
    {
        return inertia()
            ->modal('Example')
            ->baseRoute('dashboard');
    }
}
