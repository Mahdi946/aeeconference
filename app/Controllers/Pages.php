<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('home.fa');
    }

    public function view($page = 'home.fa')
    {
        // ...
    }
}