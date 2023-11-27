<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    protected $artikelModel;
    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
    }

    public function user_articles()
    {
        $artikel = $this->artikelModel->get_artikel_all();

        $data = [
            'artikel' => $artikel
        ];

        return view('artikel/daftar_artikel_user', $data);
    }
    function article_details($judul) 
    {
        $artikel = $this->artikelModel->join('user_details', 'user_details.id_user=artikel.id_user')
        ->where(['id_artikel' => $judul])->first();

        $data['artikel'] = $artikel;

        return view('artikel/detail_artikel', $data);
    }

}
