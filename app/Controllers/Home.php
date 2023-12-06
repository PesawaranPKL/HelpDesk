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
        //get all the articles from the database
        $artikel = $this->artikelModel->get_artikel_all();

        $data = [
            'artikel' => $artikel
        ];

        return view('artikel/user/daftar_artikel', $data);
    }

    function article_details($id) 
    {
        //get one article by $id
        $artikel = $this->artikelModel->one_artikel($id);

        $data['artikel'] = $artikel;

        return view('artikel/user/detail_artikel', $data);
    }

}
