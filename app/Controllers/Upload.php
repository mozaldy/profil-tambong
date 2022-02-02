<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UploadModel;



class Upload extends BaseController{

    protected $UploadModel;

    public function __construct()
    {
        helper('form');
        $this->UploadModel= new UploadModel();
    }
    public function index()
    {
        $data=[
            'title'     => 'Upload gambar',
            'data'      => $this->UploadModel->get_upload(),
            'validation'=> $this->validator,
            'isi'       => 'upload',
        ];
        echo view('layout/wrapper',$data);
    }
    public function save()
    {
        if ($this->request->getMethod() !=='post') {
            return redirect()->to(base_url('upload/index'));
        }

        $validated = $this->validate([
            'gambar' => 'uploaded[gambar]'
        ]);
        if ($validated== FALSE) {
            return redirect()->to(base_url('upload/index'));
        }
        else{
            $file_gambar = $this->request->getFile('gambar');
            $file_gambar->move(ROOTPATH.'/uploads');
            $data= [
                'keterangan' => $this->request->getPost('keterangan'),
                'gambar'     => $file_gambar->getName(),
            ];
            $this->UploadModel->insert_gambar($data);
            return redirect()->to(base_url('upload'))->with('success', 'Data Berhasil diupload :))');
        }
    }
}