<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {

        $newModel = model('News');
        $newsData = $newModel->where("lng",$this->locale)->findAll(3, 0);
        return view('home-'.$this->locale,["newsData"=>$newsData]);
    }
}
