<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Artikel extends BaseController
{
    public function daftar_artikel(): string
    {
        return view('admin/daftar_artikel');
    }
    
    public function detail_artikel(): string
    {
        return view('admin/detail_artikel');
    }
}
