<?php

namespace App\Controllers;
use App\models\Controllers;
use App\Models\LoginModel;
class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->LoginModel = new LoginModel();
    }
    public function index()
    {
        echo view('login');
    }
    public function cek_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $this->LoginModel->cek_login($username, $password);

        if (($cek['username']==$username) &&($cek['password']==$password))  {
            session()->set('username',$cek['username']);
            session()->set('nama_user',$cek['nama_user']);
            session()->set('level',$cek['level']);
            return redirect()->to(base_url('home'));
        }else {
            session()->setFlashdata('gagal', 'bruh anda siapa');
            return redirect()->to(base_url('login'));
            }
        }
    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
