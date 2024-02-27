<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $locale = service('request')->getLocale();
        return view('home-'.$locale);
    }
}
