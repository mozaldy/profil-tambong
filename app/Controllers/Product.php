<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductModel;



class Product extends BaseController
{
    protected $ProductModel;
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        $data=[
            'title' => 'Read data product',
            'product' => $this->ProductModel->get_product(),
            'isi'   => 'product/list',
        ];
        echo view('layout/wrapper',$data);
    }
    public function tambah()
    {
        $data=[
            'title' => 'Tambah product',
            'isi'   => 'product/tambah',
        ];
        echo view('layout/wrapper',$data);
    }
    public function save()
    {    
    $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_description' => $this->request->getPost('product_description'),
        ];
        $this->ProductModel->insert_product($data);
        session()->setFlashdata('success','data berhasil ditambahkan');
        return redirect()->to(base_url('product'));
    }
    public function edit($product_id)
    {
        $data=[
            'title' => 'Edit product',
            'product' => $this->ProductModel->edit_product($product_id),
            'isi'   => 'product/edit',
        ];
        echo view('layout/wrapper',$data);
    }
    public function update($product_id)
    {    
    $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_description' => $this->request->getPost('product_description'),
        ];
        $this->ProductModel->update_product($data, $product_id);
        session()->setFlashdata('success','data berhasil diupdate :)');
        return redirect()->to(base_url('product'));
    }
    public function delete($product_id){
        $this->ProductModel->delete_product($product_id);
        session()->setFlashdata('success','data berhasil didelete :(');
        return redirect()->to(base_url('product'));
    }
}