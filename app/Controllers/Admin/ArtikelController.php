<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\KategoriModel;

class ArtikelController extends BaseController
{
    protected $artikelModel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->artikelModel = new ArtikelModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index()

    {
        $artikel = $this->artikelModel->get_artikel_all();

        $data = [
            'artikel' => $artikel
        ];

        return view('artikel/daftar_artikel', $data);
    }

    public function user_articles()
    {
        $artikel = $this->artikelModel->get_artikel_all();

        $data = [
            'artikel' => $artikel
        ];

        return view('artikel/daftar_artikel_user', $data);
    }

    public function article_details()
    {
        $artikel = $this->artikelModel->findAll();

        $data = [
            'artikel' => $artikel
        ];

        return view('artikel/detail_artikel', $data);
    }

    public function add_article()
    {
        $kategori = $this->kategoriModel->findAll();

        $data = [
            'kategori' => $kategori
        ];

        return view('artikel/tambah_artikel', $data);
    }

    public function input_article()
    {
        $fileThumbnail = $this->request->getFile('thumbnail');

        if ($fileThumbnail->getError() == 4) {
            $namaThumbnail = '1.png';
        } else {
            // nama acak
            $namaThumbnail = $fileThumbnail->getRandomName();

            //pindah file ke folder
            $fileThumbnail->move('assets/admin/images/artikel/thumbnails', $namaThumbnail);
        }

        $this->artikelModel->save([
            'id_kategori' => $this->request->getPost('id_kategori'),
            'id_user' => '1',
            'judul_artikel' => $this->request->getPost('judul_artikel'),
            'status' => $this->request->getPost('status'),
            'thumbnail' => $namaThumbnail,
            'isi_artikel' => $this->request->getPost('isi_artikel')
        ]);

        return redirect()->to('/dashboard/admin/artikel');
    }
}
