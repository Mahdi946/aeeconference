<?php

namespace App\Controllers;
class Home extends BaseController
{
    public function index(): string
    {
        $auth=auth()->loggedIn();
        $newModel = model('News');
        $newsData = $newModel->where("lang",$this->locale)->findAll(3, 0);
        return view('home-'.$this->locale,["newsData"=>$newsData,"auth"=>$auth]);
    }
}
