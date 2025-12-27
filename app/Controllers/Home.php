<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('simpleView');
    }
    
    public function contact(): string
    {
        return view('contactView');
    }
}
