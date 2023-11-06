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

    public function lupa_pw(): string
    {
        return view('auth/lupa_password');
    }
}
