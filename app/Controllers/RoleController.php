<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RoleController extends BaseController
{
    public function __construct()
    {
        //meload session
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        //cek masuk ke role apa wajib sudah login
        if (!$this->session->has('isLogin')) return redirect()->to('/login_sistem');

        $status = $this->session->get('role');
        return redirect()->to('dashboard/' . $status);
    }
}
