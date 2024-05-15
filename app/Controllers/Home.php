<?php

namespace App\Controllers;
class Home extends BaseController
{
    public function index(): string
    {
        $auth=auth()->loggedIn();

        return view('home-'.$this->locale,["newsData"=>[],"auth"=>$auth]);
    }
}
