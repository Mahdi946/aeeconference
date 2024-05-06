<?php

namespace App\Models;

use CodeIgniter\Files\File;
use CodeIgniter\Model;

class News extends Model
{
    protected $table            = 'news';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['title', 'content', 'slug', 'image', 'date',"category"];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = ['getImage'];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

         
    protected function getImage( $data) {
        $newData=[];
        foreach($data['data'] as $d){
            $d['image']=$d['image']!==null?new File(WRITEPATH .'uploads/'.$d['image']):null;
            array_push($newData,$d);
        }
 
        $data['data']=$newData;
            return $data;
        
    }
}
