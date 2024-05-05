<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class NewsAdmin extends Controller
{
    use ResponseTrait;




    public function viewPanel()
    {
        $newModel = model('News');
        $news = $newModel->findAll();

        return view('newsAdmin', ["allNews" => $news]);
    }

    public function addNews()
    {
        $Model = model('category');
        $news = $Model->findAll();

        return view('addNews', ["categories" => $news]);
    }


    function add()
    {
        $Model = model('News');
        $data = json_decode($this->request->getBody(), true);
        $data['slug'] = str_replace(" ", "-", $data['title']);

        try {
            $Model->insert($data);
            return $this->respond(["status" => "success", "data" => $Model]);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);
        }
    }

    function editPage($id)
    {
        $category = model('category');
        $category = $category->findAll();
        $newModel = model('News');
        $news = $newModel->where('id', $id)->first();;
        return view('editNews', ["news" => $news, "categories" => $category]);
    }


    function update()
    {
        $Model = model('News');
        $data = json_decode($this->request->getBody(), true);
        $data['slug'] = str_replace(" ", "-", $data['title']);
        $id = $data['id'];
        unset($data['id']);

        try {
            $Model->update($id, $data);
            return $this->respond(["status" => "success", "data" => $Model]);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);
        }
    }

    function remove()
    {
        $Model = model('News');
        $data = json_decode($this->request->getBody(), true);
        $id = $data['id'];

        try {
            $Model->delete($id);
            return $this->respond($Model);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);;
        }
    }
}
