<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Files\File;

use function PHPUnit\Framework\isNull;

class NewsAdmin extends BaseController
{
    use ResponseTrait;
    protected $helpers = ['form'];

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
        $data = ($this->request->getPost());
        $data['slug'] = str_replace(" ", "-", $data['title']);

        if ($this->request->getFile('img') !== null) {
            $validationRule = [
                'img' => [
                    'label' => 'News Image File',
                    'rules' => [
                        'uploaded[img]',
                        'is_image[img]',
                        'mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    ],
                ],
            ];
            if (!$this->validateData([], $validationRule)) {
                return $this->respond(["error" => $this->validator->getErrors()]);
            }

            $img = $this->request->getFile('img');
            $data['image']=$this->AddImgToFile($img);
          
        }

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
        $news = $newModel->where('id', $id)->first();
        return view('editNews', ["news" => $news, "categories" => $category]);
    }


    function update()
    {
        $Model = model('News');
        $data = $this->request->getPost();
        $data['slug'] = str_replace(" ", "-", $data['title']);
        $id = $data['id'];
        unset($data['id']);

        if ($this->request->getFile('img') !== null) {
            $validationRule = [
                'img' => [
                    'label' => 'News Image File',
                    'rules' => [
                        'uploaded[img]',
                        'is_image[img]',
                        'mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    ],
                ],
            ];
            if (!$this->validateData([], $validationRule)) {
                return $this->respond(["error" => $this->validator->getErrors()]);
            }

            $img = $this->request->getFile('img');
            $data['image']=$this->AddImgToFile($img);
          
        }
        
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

    private function AddImgToFile($img) : int {
        if (!$img->hasMoved()) {
            $name = $img->store();
            $path = WRITEPATH . 'uploads/' . $name;
            $params = ["path" => $path, "name" => $name];
            $ModelFile = model('File');

            $ModelFile->insert($params);
            return  $ModelFile->getInsertID();
        }   
    }
}
