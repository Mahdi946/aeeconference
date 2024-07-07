<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Category extends BaseController
{
    use ResponseTrait;

    function all()
    {
        $categoryModel = model('Category');
        return $this->respond($categoryModel->findAll());
    }

    public function form()
    {
        $user = auth()->user();

        if ($user->can("category.access"))
            return view("categoryAdmin", ["user" => $user]);

        return redirect()->to('/login');
    }

    function add()
    {
        $user = auth()->user();
        if (!$user->can('category.add'))
        return $this->respond(["error" => '403', "data" => []]);

        $categoryModel = model('Category');
        $data = json_decode($this->request->getBody(), true);
        $data['slug'] = str_replace(" ", "-", $data['title']);

         
        try {
            $categoryModel->insert($data);
            return $this->respond($categoryModel);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);
        }
    }

    function update()
    {
        $user = auth()->user();
        if (!$user->can('category.edit'))
        return $this->respond(["error" => '403', "data" => []]);

        $categoryModel = model('Category');
        $data = json_decode($this->request->getBody(), true);
        $data['slug'] = str_replace(" ", "-", $data['title']);
        $id = $data['id'];
        unset($data['id']);

        try {
            $categoryModel->update($id, $data);
            return $this->respond($categoryModel);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);;
        }
    }

    function remove()
    {
        $user = auth()->user();
        if (!$user->can('category.delete'))
        return $this->respond(["error" => '403', "data" => []]);

        $categoryModel = model('Category');
        $data = json_decode($this->request->getBody(), true);
        $id = $data['id'];

        try {
            $categoryModel->delete($id);
            return $this->respond($categoryModel);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);;
        }
    }
}
