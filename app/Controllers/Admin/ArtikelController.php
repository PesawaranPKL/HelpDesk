<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ArtikelController extends BaseController
{
    public function index(): string
    {
        return view('artikel/daftar_artikel');
    }

    public function user_articles(): string
    {
        return view('artikel/daftar_artikel_user');
    }
    
    public function article_details(): string
    {
        return view('artikel/detail_artikel');
    }

    public function add_article(): string
    {
        return view('artikel/tambah_artikel');
    }
}
