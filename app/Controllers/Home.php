<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    protected $artikelModel;
    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
        helper(['url', 'request']);
    }

    public function user_articles()
    {
        $keyword = $this->request->getVar('keyword');

        // Jika 'keyword' pencarian disediakan, filter artikel berdasarkan 'judul_artikel'
        if ($keyword) {
            $artikel = $this->artikelModel->searchArtikelByTitle($keyword);
        } else {
            // Jika tidak ada 'keyword' pencarian, ambil semua artikel
            $artikel = $this->artikelModel->get_artikel_all();
        }

        $data = [
            'artikel' => $artikel
        ];

        return view('daftar_artikel', $data);
    }

    function article_details($id)
    {
        // Ambil satu artikel menggunakan $id
        $artikel = $this->artikelModel->one_artikel($id);

        $data['artikel'] = $artikel;

        return view('detail_artikel', $data);
    }
}
