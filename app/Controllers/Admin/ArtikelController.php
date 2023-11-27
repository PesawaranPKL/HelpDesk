<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use Config\Services;

class ArtikelController extends BaseController
{
    protected $artikelModel;
    protected $kategoriModel;
    public function __construct()
    {
        helper('upload');
        $this->session = Services::session();
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

    // public function article_details($id_artikel)
    // {
    //     $artikel = $this->artikelModel->where(['id_artikel' => $id_artikel])->first();

    //     $data = [
    //         'artikel' => $artikel
    //     ];

    //     return view('artikel/detail_artikel', $data);
    // }

    public function add_article()
    {
        $data['validation'] = Services::validation();

        $kategori = $this->kategoriModel->findAll();

        $data = [
            'kategori' => $kategori
        ];
        $data['case'] = "tambah";

        return view('artikel/tambah_artikel', $data);
    }

    public function input_article()
    {
        // validasi input
        $validation = \Config\Services::validation();

        $rules = [
            'judul_artikel' => [
                'rules' => 'required|trim|max_length[190]',
                'errors' => [
                    'required' => 'judul harus di isi!',
                    'max_length' => 'Gunakan maksimal 190 karakter!'
                ]
            ]
        ];
        if (!$this->validate($rules)) {

            // Aksi yang akan dilakukan jika input tidak valid
            return redirect()->to('/dashboard/admin/artikel/tambah')->withInput()->with('validation', $validation);
        }
        $randomartikel = uploadFile('thumbnail', 'dokumen/sk/');

        // $fileThumbnail = $this->request->getFile('thumbnail');
        // if ($fileThumbnail->getError() == 4) {
        //     $namaThumbnail = '1.png';
        // } else {
        //     // nama acak
        //     $namaThumbnail = $fileThumbnail->getRandomName();

        //     //pindah file ke folder
        //     $fileThumbnail->move('assets/admin/images/artikel/thumbnails', $namaThumbnail);
        // }

        $this->artikelModel->save([
            'id_kategori' => $this->request->getPost('id_kategori'),
            'id_user' => session('id_user'),
            'judul_artikel' => $this->request->getPost('judul_artikel'),
            'status' => $this->request->getPost('status'),
            'thumbnail' => $randomartikel,
            'isi_artikel' => $this->request->getPost('isi_artikel')
        ]);

        return redirect()->to('/dashboard/admin/artikel');
    }
    public function edit_article($id) 
    {
        $id_en = base64_decode(base64_decode($id)); //buat balikin enkrip ke id asli

        $data['artikel'] = $this->artikelModel->one_artikel($id_en); 
        $data['kategori'] = $this->kategoriModel->findAll();
        $data['case'] = "edit";

        return view('artikel/tambah_artikel', $data);
    }
    public function update_article($id)
    {
        $data = $this->request->getPost();

        $data_update = [
            'id_kategori' => $data['id_kategori'],
            'id_user' => session('id_user'),
            'judul_artikel' => $data['judul_artikel'],
            'status' => $data['status'],
            // 'thumbnail' => $randomartikel,
            'isi_artikel' => $data['isi_artikel']
        ];

        $update = $this->artikelModel->updateartikel($data_update, $id);
    }

    

    public function delete_article($id_artikel)
    {
        $this->artikelModel->delete($id_artikel);

        return redirect()->to('/dashboard/admin/artikel');
    }
}
