<?php

namespace App\Controllers;

class PengaduanController extends BaseController
{
    public function index(): string
    {
        return view('pengaduan');
    }
}
