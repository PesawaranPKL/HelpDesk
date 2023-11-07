<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserDetailsModel;
use Config\Services;
use CodeIgniter\Throttle\ThrottlerInterface;
use CodeIgniter\Throttle\ThrottlerTrait;

class Auth extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = Services::session();
        $this->email = Services::email();
    }


    public function index()
    {
        $data['validation'] = Services::validation();

        if ($this->session->has('isLogin') == false) {
            return view('auth/login', $data);
        }
        return redirect()->to('dashboard');
    }

    public function authsignin()
    {
        if ($this->session->has('isLogin')) {
            return view('dashboard');
        }

        // validasi input
        if (!$this->validate([
            'email' => [
                'rules' => 'required|trim|valid_email|max_length[50]',
                'errors' => [
                    'required' => 'Email harus di isi!',
                    'valid_email' => 'Masukkan Email',
                    'max_length' => 'Gunakan maksimal 50 karakter!'
                ]
            ],
            'password' => [
                'rules' => 'required|trim|min_length[3]|max_length[45]',
                'errors' => [
                    'required' => 'Password harus di isi',
                    'min_length' => 'Password terlalu pendek!',
                    'max_length' => 'Gunakan maksimal 45 karakter!'
                ]
            ]
        ])) {

            $validation = Services::validation();

            $errors = [
                'email' => $validation->getError('email'),
                'password' => $validation->getError('password')
            ];
            // Lakukan sesuatu dengan daftar error, seperti meneruskannya ke view
            return redirect()->to('/login_sistem')->withInput()->with('errors', $errors);
        }

        $throttler = Services::throttler();
        // ambil alamat ip public user
        $ipAddress = $this->request->getIPAddress();
        $key = 'login_attempts_' . str_replace(':', '_', $ipAddress);

        // cek jika 5 kali percobaan login
        if ($throttler->check($key, 5, 900) === false) {
            session()->setFlashdata('login_err', 'limit');
            return redirect()->back();
        }

        $data = $this->request->getPost();
        $auth = $this->userModel->where('tabel_user.email', $data['email'])
            ->join('user_details', 'user_details.email=tabel_user.email')
            ->first();

        if ($auth) {
            // Saat akun ditemukan
            if (password_verify($data['password'], $auth['password'])) {

                if ($auth['status_akun'] == 'aktif') {
                    // reset ulang
                    if ($throttler instanceof ThrottlerTrait) {
                        $throttler->reset($key);
                    }
                    // Saat password sesuai
                    $sessLogin = [
                        'id_user' => $auth['id_user'],
                        'email' => $auth['email'],
                        'nama' => $auth['nama'],
                        'role' => $auth['role'],
                        'status' => $auth['status_akun'],
                        'isLogin' => true
                    ];
                    $this->session->set($sessLogin);
                    session()->setFlashdata('login', 'done');
                    return redirect()->to('dashboard');
                } elseif ($auth['status_akun'] == 'mati') {
                    session()->setFlashdata('login_err', 'not_actived');
                    return redirect()->back();
                } else {
                    session()->setFlashdata('login_err', 'verif');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('login_err', 'wrong_passwd');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('login_err', 'empty');
        }
        return redirect()->back();
    }

    public function regis(): string
    {
        if ($this->session->has('isLogin')) {
            return redirect()->to('dashboard');
        }

        $data['validation'] = Services::validation();
        return view('auth/register');
    }

    // Halaman melakukan reset password dengan mengirimkan email terdaftar
    // untuk mendapatkan email dengan tautan yang akan diarahkan ke halaman password baru
    public function lupa_pw(): string
    {
        return view('auth/lupa_password');
    }

    // Halaman notifikasi email reset password sudah dikirim dan 
    // jika email tidak masuk maka kirim ulang email dapat dilakukan dihalaman ini
    public function reset_pw(): string
    {
        return view('auth/reset_password');
    }

    // Halaman untuk melakukan perubahan password
    public function pw_baru(): string
    {
        return view('auth/password_baru');
    }


    public function logout()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/login_sistem');
        }
        session()->destroy();
        session()->setFlashdata('akun', 'logout');
        return redirect()->to('/login_sistem');
    }
}
