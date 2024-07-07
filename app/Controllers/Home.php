<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $user = null;
        $isSuperAdmin = false;
        $auth = auth()->loggedIn();

        if ($auth)
            $user = auth()->user();

        if ($user !== null) {
            $isSuperAdmin = $user->can("news.access");
        }



        $newModel = model('News');
        $newsData = $newModel->where("lang", $this->locale)->findAll(3, 0);
 
        return view('home-' . $this->locale, ["newsData" => $newsData, "auth" => $auth, "isSuperAdmin" => $isSuperAdmin]);
    }
}
