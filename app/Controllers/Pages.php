<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
//        return view('home.fa');
    }

    public function view($page = 'home')
    {
        $user=null;
        $isSuperAdmin = false;
        $auth=auth()->loggedIn();
        if($auth)
        $user=auth()->user();

        if ($user !== null) {
            $isSuperAdmin = $user->can("news.access");
        }


        return view($page.'-'.$this->locale,["auth"=>$auth,"isSuperAdmin"=>$isSuperAdmin]);
    }
}