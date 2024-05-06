<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Files\File;

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
        
        
        $validationRule = [
            'img' => [
                'label' => 'News Image File',
                'rules' => [
                    'uploaded[img]',
                    'is_image[img]',
                    'mime_in[img,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    // 'max_size[img,10000]',
                    // 'max_dims[img,1024,1024]',
                ],
            ],
        ];
        $data=($this->request->getPost());
        if (! $this->validateData([], $validationRule)) {
            return $this->respond(["error" => $this->validator->getErrors()]);
        }

        $img = $this->request->getFile('img');

        if (! $img->hasMoved()) {
            $filepath = WRITEPATH . 'uploads/' . $img->store();

            $data = ['uploaded_fileinfo' => new File($filepath)];
            return $this->respond($data);
        }

        
        // $data=$_REQUEST;

        // if($_FILES['img']){
     
        //     $tmp_name = $_FILES["img"]["tmp_name"];
        //     $name = $_FILES["img"]["name"];
        //     //$path=WRITEPATH."uploads/$name";
        //     $path = "uploads/$name";
        //     $data['image']=$path;
        //     move_uploaded_file($tmp_name, WRITEPATH."uploads/$name");

        // }
    
        // print_r($data);
        // die;
        // try {
        //    // $Model->insert($data);
        //     return $this->respond(["status" => "success", "data" => $Model]);
        // } catch (\Exception $e) {
        //     return $this->respond(["error" => $e->getMessage(), "data" => $data]);
        // }
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
