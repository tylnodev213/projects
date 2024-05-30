<?php

namespace App\Http\Controllers\Frontend;

class HomeController extends FrontendController
{
    public function index()
    {
        return $this->customView('home.index');
    }
}
