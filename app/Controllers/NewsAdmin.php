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

        return view('addNews', ["categories" => $news,"lng"=>"fa"]);
    }

    public function addNewsEn()
    {
        $Model = model('category');
        $news = $Model->findAll();

        return view('addNews', ["categories" => $news,"lng"=>"en"]);
    }


    function add()
    {

        $Model = model('News');
        $data = ($this->request->getPost());
        $data['slug'] = str_replace(" ", "-", $data['slug']);

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
            $data['image'] = $this->AddImgToFile($img);
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
        return view('editNews', ["news" => $news, "categories" => $category,"lng"=>"fa"]);
    }

    function editPageEn($id)
    {
        $category = model('category');
        $category = $category->findAll();
        $newModel = model('News');
        $news = $newModel->where('id', $id)->first();
        return view('editNews', ["news" => $news, "categories" => $category,"lng"=>"en"]);
    }


    function update()
    {
        $Model = model('News');
        $data = $this->request->getPost();
        $data['slug'] = str_replace(" ", "-", $data['slug']);
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
            $this->RemoveNewsFile($id);
            $img = $this->request->getFile('img');
            $data['image'] = $this->AddImgToFile($img);
        }

        try {
            $Model->update($id, $data);
            return $this->respond(["status" => "success", "data" => $Model]);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage(), "data" => $data]);
        }
    }

    function remove($id)
    {
        $Model = model('News');
        try {

            $this->RemoveNewsFile($id);
            $Model->delete($id);
            return $this->respond($Model);
        } catch (\Exception $e) {
            return $this->respond(["error" => $e->getMessage()]);;
        }
    }

    private function RemoveNewsFile($id): void
    {
        $Model = model('News');
        $RecordData = $Model->find($id);
        $this->RemoveFile($RecordData['image']);
        $Model->update($id, ["image" => null]);
    }

    private function AddImgToFile($img): int
    {
        if (!$img->hasMoved()) {
            $name = $img->store();
            $path = WRITEPATH . 'uploads/' . $name;
            $params = ["path" => $path, "name" => $name];
            $ModelFile = model('File');

            $ModelFile->insert($params);
            return  $ModelFile->getInsertID();
        }
    }
    private function RemoveFile($id): void
    {

        $ModelFile = model('File');
        $File = $ModelFile->where('id', $id)->first();
        if ($File == null)
            return;

        if (file_exists($File['path'])) {
            unlink($File['path']);
            $ModelFile->delete($id);
        }
    }
}
