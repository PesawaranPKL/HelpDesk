<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class PengaduanController extends BaseController
{
    public function __construct()
    {
        //meload session
        $this->session = session();
        
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_sistem'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->to('login_sistem');
        }
    }
    public function index()
    {
        return view('admin/daftar_pengaduan');
    }
    public function detail_proses()
    {   
        return view('admin/detail_pengaduan_proses');
    }
    public function detail_solusi()
    {   
        return view('admin/detail_pengaduan_solusi');
    }
    public function detail_selesai()
    {   
        return view('admin/detail_pengaduan_selesai');
    }
}
