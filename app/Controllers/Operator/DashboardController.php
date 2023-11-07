<?php

namespace App\Controllers\Operator;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function __construct()
    {
        //meload session
        $this->session = session();
    }
    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_sistem'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'operator') {
            return redirect()->to('login_sistem');
        }


        return view('operator/dashboard');
    }
}
