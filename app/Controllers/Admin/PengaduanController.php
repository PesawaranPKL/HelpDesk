<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;
use App\Models\PengaduanModel;
use App\Models\NotifikasiModel;

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

        $this->kategoriModel = new KategoriModel();
        $this->pengaduanModel = new PengaduanModel();
        $this->notifikasiModel = new NotifikasiModel();

        //meload email
        $this->email = \Config\Services::email();
    }
    public function index()
    {
        // return view('admin/daftar_kategori');

        if (!$this->session->has('isLogin')) {
            return redirect()->to('login'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->back();
        }
        $data['notif'] = $this->notifikasiModel->get_notifikasi_belum_dibaca();
        $data['kategori'] = $this->kategoriModel->get_kategori();

        return view('admin/daftar_kategori', $data);
    }

    public function list_pengaduan($kategori)
    {
        // return view('admin/daftar_pengaduan');

        if (!$this->session->has('isLogin')) {
            return redirect()->to('login'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->back();
        }
        $data['notif'] = $this->notifikasiModel->get_notifikasi_belum_dibaca();
        $nama_kategori = $this->kategoriModel->get_name_kategori($kategori);
        $data['nama_kategori'] = $nama_kategori;
        $data['pengaduan'] = $this->pengaduanModel->get_data_pengaduan($kategori);

        return view('admin/daftar_pengaduan', $data);
    }

    public function detail_pengaduan($id)
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->back();
        }
        $data['notif'] = $this->notifikasiModel->get_notifikasi_belum_dibaca();
        $data['kategori'] = $this->kategoriModel->get_kategori();
        $data['pengaduan'] = $this->pengaduanModel->get_one_pengaduan($id);
        return view('Admin/detail_pengaduan', $data);
    }
    public function proses($id)
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->back();
        }

        $dataupdate = [
            'proses_pengaduan' => date('Y-m-d H:i:s'),
            'id_user'      => $this->session->get('id_user')
        ];

        $update = $this->pengaduanModel->updatedata($dataupdate, $id);

        // Jika berhasil melakukan update
        if ($update) {
            // mengirim Email
            /* ========================== Email ============================== */
            // $email_pelapor = $this->pengaduanModel->get_email_pelapor($id);
            $data['notif'] = $this->notifikasiModel->get_notifikasi_belum_dibaca();
            $data['kategori'] = $this->kategoriModel->get_kategori();
            $data['pengaduan'] = $this->pengaduanModel->get_one_pengaduan($id);
            return redirect()->back();
            // $to = $email_pelapor;
            // $subject = 'Proses Pengaduan HELPDESK';
            // $html = view('Email/Email_proses', $data);
            // $this->email->setTo($to);
            // $this->email->setFrom('helpdesk@pesawarankab.go.id', 'Dinas Kominfotiksan Kabupaten Pesawaran');
            // $this->email->setSubject($subject);
            // $this->email->setMessage($html);

            // if ($this->email->send()) {
            //     //  Kehalaman Login dan ada notif verif dikirim ke email
            //     // echo "Verif telah terkirim ke email".$data['email'];
            //     session()->setFlashdata('reg', 'done');
            //     return redirect()->back();
            // } else {
            //     // Saat gagal
            //     // echo $this->email->print_debugger();
            //     // die;
            //     return redirect()->back();
            // }
        }
    }

    public function selesai($id)
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->back();
        }
        $data = $this->request->getPost();
        helper('upload');
        $uploadedFileName = uploadFile('file_balasan', 'dokumen/pengaduan/admin');

        $dataupdate = [
            'selesai_pengaduan' => date('Y-m-d H:i:s'),
            'pesan_balasan'     => $data['pesan_balasan'],
            'file_balasan'      => $uploadedFileName
        ];

        $update = $this->pengaduanModel->updatedata($dataupdate, $id);

        // Jika berhasil melakukan update
        if ($update) {
            // mengirim Email
            /* ========================== Email ============================== */
            return redirect()->back();
            // $model = new PelaporanModel();
            // $email_pelapor = $model->get_email_pengaduan($id);
            // $data['pengaduan'] = $model->get_one_pengaduan($id);
            // $to = $email_pelapor;
            // $subject = 'Proses Pengaduan HELPDESK';
            // $html = view('Email/Email_selesai', $data);
            // $this->email->setTo($to);
            // $this->email->setFrom('helpdesk@pesawarankab.go.id', 'Dinas Kominfotiksan Kabupaten Pesawaran');
            // $this->email->setSubject($subject);
            // $this->email->setMessage($html);

            // if ($this->email->send()) {
            //     //  Kehalaman Login dan ada notif verif dikirim ke email
            //     // echo "Verif telah terkirim ke email".$data['email'];
            //     session()->setFlashdata('reg', 'done');
            //     return redirect()->back();
            // } else {
            //     // Saat gagal
            //     // echo $this->email->print_debugger();
            //     // die;
            //     return redirect()->back();
            // }
        }
    }

    public function notif_show($id, $pengajuan)
    {
        //cek apakah ada session yang sudah masuk
        if (!in_array(session()->get('role'), ['admin'])) {
            return redirect()->back();
        }

        $id = base64_decode(base64_decode($id));
        $pengajuan = base64_decode(base64_decode($pengajuan));

        $dataupdate = [
            'waktu_baca' => date('Y-m-d H:i:s')
        ];
        $update = $this->notifikasiModel->updatenotif($dataupdate, $id);

        // Jika berhasil melakukan update
        if ($update) {

            // // Redirect ke halaman path
            return redirect()->to('dashboard/admin/detail_pengaduan//' . $pengajuan);
        }
    }
    public function notif_deleteall()
    {

        if (!in_array(session()->get('role'), ['admin'])) {
            return redirect()->back();
        }
        $dataupdate = [
            'waktu_baca' => date('Y-m-d H:i:s')
        ];

        $this->notifikasiModel->hapus_semua_notif($dataupdate);
        return redirect()->back();
    }

    // public function detail_proses()
    // {
    //     return view('admin/detail_pengaduan_proses');
    // }
    // public function detail_solusi()
    // {
    //     return view('admin/detail_pengaduan_solusi');
    // }
    // public function detail_selesai()
    // {
    //     return view('admin/detail_pengaduan_selesai');
    // }
}
