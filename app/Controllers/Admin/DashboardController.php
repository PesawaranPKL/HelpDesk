<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\NotifikasiModel;


class DashboardController extends BaseController
{
    public function __construct()
    {
        //meload session
        $this->session = session();
        $this->notifikasiModel = new NotifikasiModel();
    }
    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_sistem'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->to('login_sistem');
        }

        $data['notif'] = $this->notifikasiModel->get_notifikasi_belum_dibaca();

        return view('admin/dashboard', $data);
    }
}
