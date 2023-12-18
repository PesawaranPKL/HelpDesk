<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ChatBotModel;

class ChatBotController extends BaseController
{
    public function __construct()
    {
        //meload session
        $this->session = session();
        $this->chatbotModel = new ChatBotModel();
    }
    // Fungsi untuk mendapatkan hierarki
    protected function getHierarki($id_induk, $model, $level)
    {
        $children = $model->getAnak($id_induk);
        $hierarki = [];

        foreach ($children as $child) {
            // Menambahkan data anak ke hierarki
            $child['level'] = $level;
            $hierarki[] = $child;

            // Memanggil rekursif untuk mendapatkan anak-anak dari anak ini
            $hierarki = array_merge($hierarki, $this->getHierarki($child['id_chat'], $model, $level + 1));
        }

        return $hierarki;
    }
    protected function getHierarki_info_induk($id_induk, $model, $level)
    {
        // belum bisa ini
        $hierarki = $model->gethirarki_info_induk($id_induk);

        foreach ($hierarki as &$item) {
            $item['level'] = $level;
        }

        return $hierarki;
    }
    public function index()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_sistem'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->to('login_sistem');
        }
        $tabelModel = new ChatBotModel();

        // Mendapatkan data untuk hierarki
        $data['hierarki'] = $this->getHierarki(null, $tabelModel, 0);
        // ini hirarki info induk
        $data['hierarki_info_induk'] = $this->getHierarki_info_induk(null, $tabelModel, 0);

        // Tampilkan view dengan data hierarki
        return view('admin/chatbot/index', $data);
    }
    public function add()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_sistem'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->to('login_sistem');
        }
        $data['chatbot'] = $this->chatbotModel->findAll();
        return view('admin/chatbot/form', $data);
    }
    public function validasi_add()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('login_sistem'); //login
        }
        //cek role dari session
        if ($this->session->get('role') != 'admin') {
            return redirect()->to('login_sistem');
        }
        
        return view('admin/chatbot/form');
    }

    

    // testing
    public function hirarki()
    {
        $tabelModel = new ChatBotModel();

        // Menampilkan hierarki dari root (induk yang memiliki id_anak_chat NULL)
        $this->tampilanHirarki(null, $tabelModel, 0);
    }
    // Fungsi untuk menampilkan hierarki dengan rekursif
    protected function tampilanHirarki($id_induk, $model, $level)
    {
        $anak = $model->getAnak($id_induk);

        foreach ($anak as $child) {
            // Indentasi untuk setiap level
            $indent = str_repeat("&nbsp;&nbsp;&nbsp;", $level);

            // Menampilkan nama anak
            echo $indent . $child['name_chat'] . "<br>";

            // Memanggil rekursif untuk menampilkan anak-anak dari anak ini
            $this->tampilanHirarki($child['id_chat'], $model, $level + 1);
        }
    }


}
