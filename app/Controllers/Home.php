<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get('nama_user')=='') {
        session()->setFlashdata('gagal', 'bruh anda masih belum login');
        return redirect()->to(base_url('login'));
    }
        $data=[
            'title' => 'Home',
            'isi'   => 'home',
        ];
        echo view('layout/wrapper',$data);
    }
    public function menu2()
    {
        $data=[
            'title' => 'Menu 2',
            'isi'   => 'menu2',
        ];
        echo view('layout/wrapper',$data);
    }
    public function menu3()
    {
        $data=[
            'title' => 'Menu 3',
            'isi'   => 'menu3',
        ];
        echo view('layout/wrapper',$data);
    }
    public function menu4()
    {
        $data=[
            'title' => 'Menu 4',
            'isi'   => 'menu4',
        ];
        echo view('layout/wrapper',$data);
    }
}
