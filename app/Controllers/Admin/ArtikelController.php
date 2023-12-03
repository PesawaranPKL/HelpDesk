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

        return view('artikel/admin/daftar_artikel', $data);
    }

    public function add_article()
    {
        $data['validation'] = Services::validation();

        $kategori = $this->kategoriModel->findAll();

        $data = [
            'kategori' => $kategori
        ];
        $data['case'] = "tambah";

        return view('artikel/admin/tambah_artikel', $data);
    }

    public function input_article()
    {
        // validasi input
        $validation = \Config\Services::validation();

        $rules = [
            'judul_artikel' => [
                'rules' => 'required|trim|max_length[190]',
                'errors' => [
                    'required' => 'Judul harus di isi!',
                    'max_length' => 'Gunakan maksimal 190 karakter!'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih salah satu opsi Status yang sesuai!',
                ],
            ],
            'id_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pilih salah satu Kategori yang sesuai!',
                ],
            ],
            'thumbnail' => [
                'rules' => 'max_size[thumbnail,1024]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Thumbnail Artikel harus di bawah 1 mb.',
                    'mime_in' => 'Thumbnail harus di isi gambar ekstensi jpg jpeg png.',
                    'is_image' => 'Thumbnail harus di isi gambar ekstensi jpg jpeg png.',
                ]
            ],
            'isi_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Isi Artikel harus di isi!'
                ]
            ]
        ];

        if (!$this->validate($rules)) {

            // Aksi yang akan dilakukan jika input tidak valid
            return redirect()->to('/dashboard/admin/artikel/tambah')->withInput()->with('validation', $validation);
        }

        //get function upload_helper for image upload
        $randomartikel = uploadFile('thumbnail', 'artikel/tumbnails/');

        //save data from html form to database
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

        return view('artikel/admin/tambah_artikel', $data);
    }

    // public function update_article($id)
    // {
    //     $data = $this->request->getPost();

    //     $data_update = [
    //         'id_kategori' => $data['id_kategori'],
    //         'id_user' => session('id_user'),
    //         'judul_artikel' => $data['judul_artikel'],
    //         'status' => $data['status'],
    //         // 'thumbnail' => $randomartikel,
    //         'isi_artikel' => $data['isi_artikel']
    //     ];

    //     $update = $this->artikelModel->updateartikel($data_update, $id);
    // }

    public function update_article($id)
    {
        $data = $this->request->getPost();

        //validasi thumbnail
        $thumbnailRules = [
            'thumbnail' => [
                'rules' => 'max_size[thumbnail,1024]|is_image[thumbnail]|mime_in[thumbnail,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Thumbnail Artikel harus di bawah 1 mb.',
                    'mime_in' => 'Thumbnail harus di isi gambar ekstensi jpg jpeg png.',
                    'is_image' => 'Thumbnail harus di isi gambar ekstensi jpg jpeg png.',
                ]
            ],
        ];

        //menangani error dalam validasi thumbnail
        if (!$this->validate($thumbnailRules)) {
            return redirect()->to('/dashboard/admin/artikel/edit/' . $id)->withInput()->with('validation', $this->validator);
        }

        $randomartikel = $this->artikelModel->getArtikelThumbnailById($id);

        //replace thumbnail lama
        if ($thumbnailFile = $this->request->getFile('thumbnail')) {
            $randomartikel = uploadFile('thumbnail', 'artikel/tumbnails/');
        }

        //update data
        $data_update = [
            'id_kategori' => $data['id_kategori'],
            'id_user' => session('id_user'),
            'judul_artikel' => $data['judul_artikel'],
            'status' => $data['status'],
            'thumbnail' => $randomartikel,
            'isi_artikel' => $data['isi_artikel']
        ];

        $this->artikelModel->updateartikel($data_update, $id);

        return redirect()->to('/dashboard/admin/artikel');
    }


    public function delete_article($id_artikel)
    {
        //delete article by $id
        $this->artikelModel->delete($id_artikel);

        return redirect()->to('/dashboard/admin/artikel');
    }
}
