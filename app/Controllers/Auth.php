<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }

    public function regis(): string
    {
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
}
