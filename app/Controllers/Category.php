<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Category extends BaseController
{
    use ResponseTrait;

    function all()  {
        $categoryModel = model('Category');
        return $this->respond($categoryModel->findAll());
    }

    public function form()
    {
        return view("categoryAdmin");
    }

    function add()
    {
        $categoryModel = model('Category');
        $data = json_decode($this->request->getBody(), true);
        $data['slug']=str_replace(" ","-",$data['title']);

        try {
            $categoryModel->insert($data);
            return $this->respond($categoryModel);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);;
        }
    }

    function update()
    {
        $categoryModel = model('Category');
        $data = json_decode($this->request->getBody(), true);
        $data['slug']=str_replace(" ","-",$data['title']);
        $id=$data['id'];
        unset($data['id']);

        try {
            $categoryModel->update($id,$data);
            return $this->respond($categoryModel);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);;
        }
    }
    
    function remove()
    {
        $categoryModel = model('Category');
        $data = json_decode($this->request->getBody(), true);
        $id=$data['id'];
 
        try {
            $categoryModel->delete($id);
            return $this->respond($categoryModel);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);;
        }
    }
}
