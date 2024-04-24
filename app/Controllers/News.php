<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class News extends BaseController
{
    public function index()
    {
        
        $newModel = model('News');
        $allNews = $newModel->findAll();
  
        return view('news-'.$this->locale,["allNews"=>$allNews]);

    }

    public function view($id)
    {
        $newModel = model('News');
        $news = $newModel->find($id);
        return view('newsDetail-'.$this->locale,["news"=>$news]);
 
    }


}
