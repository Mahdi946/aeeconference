<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Files\File;

class News extends BaseController
{
    public function index()
    {
        $user=null;
        $isSuperAdmin = false;
        $newModel = model('News');
        $allNews = $newModel->findAll();
        $auth=auth()->loggedIn();
        if($auth)
        $user=auth()->user();

                
        if ($user !== null) {
            $isSuperAdmin = $user->can("news.access");
        }

        return view('news-' . $this->locale, ["allNews" => $allNews,"auth"=>$auth,"isSuperAdmin"=>$isSuperAdmin]);
    }

    public function image($id)
    {
        $fileModel = model('File');
        $newModel = model('News');
        $news = $newModel->where('id', $id)->first();
        $file = $fileModel->where('id', $news['image'])->first();
        $fileImg = new File($file['path']);
        $mimType = explode(".", $fileImg->getFilename());
        $mimType = $mimType[count($mimType) - 1];

        http_response_code(200);
        header('Content-Length: ' . filesize($file['path']));
        header("Content-Type: application/image/$mimType");
        header('Content-Disposition: attachment; filename="'.$file['name'].'"'); // feel free to change the suggested filename
        readfile($file['path']);
      

        return;
    }



    public function view($slug)
    {
        $user = null;
        $auth=auth()->loggedIn();
        $isSuperAdmin = false;
        if($auth)
        $user=auth()->user();

        
        if ($user !== null) {
            $isSuperAdmin = $user->can("news.access");
        }

        $newModel = model('News');
        $news = $newModel->where('slug', $slug)->first();;
        return view('newsDetail-' . $this->locale, ["news" => $news,"auth"=>$auth,"isSuperAdmin"=>$isSuperAdmin ]);
    }
}
