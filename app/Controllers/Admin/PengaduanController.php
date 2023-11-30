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
    public function detail()
    {   
        return view('admin/detail_pengaduan');
    }
}
