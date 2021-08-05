<?php

namespace App;

use App\View\View;

class Controller
{
    public function index()
    {
        return new View('index', ['title' => 'Index Page']);
    }

    public function about()
    {
        return new View('about', ['title' => 'About']);
    }
}