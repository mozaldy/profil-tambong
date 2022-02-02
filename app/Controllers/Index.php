<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadModel;
use App\Models\ProductModel;
class Index extends BaseController
{
    protected $UploadModel;
    protected $ProductModel;
    public function __construct()
    {
        helper('form');
        $this->UploadModel= new UploadModel();
        $this->ProductModel = new ProductModel();
    }
    public function index()
    {
        $data=[
            'title' =>  'Tambong',
            'isi'   =>  'index',
            'data'  => $this->UploadModel->get_upload(),
            'product' => $this->ProductModel->get_product(),
        ];
        echo view('layout2/wrapper', $data); 
    }
}
