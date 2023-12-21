<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use App\Models\KategoriModel;
use App\Models\NotifikasiModel;
use App\Models\UserDetailsModel;

use Config\Services;

class PengaduanController extends BaseController
{
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
        $this->pengaduanModel = new PengaduanModel();
        $this->userdetailModel = new UserDetailsModel();

        //meload session
        $this->session = session();
        $this->email = \Config\Services::email();
    }

    public function index(): string
    {
        $model = new KategoriModel();
        $data['kategori'] = $model->get_kategori();
        $data['validation'] = Services::validation();
        return view('pengaduan', $data);
    }

    public function tambah_pengaduan()
    {
        // $data = $this->request->getPost();
        // $data2 = $this->request->getFile('file_pendukung');

        // var_dump($data2);
        // die();
        // validasi input
        $validation = \Config\Services::validation();

        $rules = [
            'nama_pengadu' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Nama harus di isi!',
                    'max_length' => 'Gunakan maksimal 50 karakter!'
                ]
            ],
            'nama_instansi' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Instansi harus di isi!',
                    'max_length' => 'Gunakan maksimal 100 karakter!'
                ]
            ],
            'no_hp' => [
                'rules' => 'required|max_length[18]',
                'errors' => [
                    'required' => 'No Telepon harus di isi!',
                    'max_length' => 'Gunakan maksimal 18 karakter!'
                ]
            ],
            'email' => [
                'rules' => 'required|trim|valid_email|max_length[65]',
                'errors' => [
                    'required' => 'Email harus di isi!',
                    'valid_email' => 'Masukkan Email Dengan Benar',
                    'max_length' => 'Gunakan maksimal 65 karakter!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deksripsi harus di isi!'
                ]
            ]
            // ,
            // 'file_pendukung' => [
            //     'rules' => 'uploaded[file_pendukung]|mime_in[file_pendukung,application/pdf]|max_size[file_pendukung,2048]',
            //     'errors' => [
            //         'uploaded' => 'Pilih file terlebih dahulu',
            //         'mime_in' => 'Masukkan file pdf',
            //         'max_size' => 'Masukkan ukuran file paling besar 2 mb',
            //     ]
            // ]
        ];

        if (!$this->validate($rules)) {

            // Aksi yang akan dilakukan jika email tidak valid
            return redirect()->to('/pengaduan')->withInput()->with('validation', $validation);
        }

        helper('upload');

        $data = $this->request->getPost();



        // $file =  $this->request->getFile('file_pendukung');
        // $randomName = $file->getRandomName();
        $token = $this->create_token();

        $fileupload = uploadFile('file_pendukung', 'dokumen/pengaduan');

        // menyimpan data dari form ke dalam database tabel ajuan beasiswa
        $this->pengaduanModel = new PengaduanModel();
        $tambah = $this->pengaduanModel->save([
            'id_kategori' => $data['id_kategori'],
            'token_pengaduan' => $token,
            'nama_pengadu' => $data['nama_pengadu'],
            'nama_instansi' => $data['nama_instansi'],
            'email' => $data['email'],
            'no_hp' => $data['no_hp'],
            'deskripsi' => $data['deskripsi'],
            'file_pendukung' => $fileupload
        ]);
        //masukan file ke folder
        // if ($file->isValid() && !$file->hasMoved()) {
        //     $file->move(ROOTPATH . 'public/dokumen/pengaduan/', $randomName);
        // }

        if ($tambah) {
            $id_pengaduan = $this->pengaduanModel->get_id_pengaduan($this->request->getVar('email'), date('Y-m-d H:i:s'));
            $usersid = $this->userdetailModel
                ->join('user', 'user.email = user_details.email')
                ->whereIn('user.role', ['admin', 'operator'])
                ->findAll();

            // var_dump($usersid);
            // die;

            $this->notifikasiModel = new NotifikasiModel();

            // $this->notifikasiModel->save([
            //     'id_pengaduan' => $id_pengaduan,
            //     'id_user' => $id_user
            // ]);

            foreach ($usersid as $user) {
                $notifikasiData = [
                    'id_pengaduan' => $id_pengaduan,
                    'id_user' => $user['id_user'],
                    'waktu_baca' => null
                ];
                $this->notifikasiModel->insert($notifikasiData);
            }
        }
        $data['file_pendukung'] = $fileupload;
        $data['kategori'] = $this->kategoriModel->get_name_kategori($data['id_kategori']);

        /* ========================== Email ============================== */
        $to = $data['email'];
        $subject = 'Proses Pengaduan Helpdesk';
        $data['token'] = $token;
        $html = view('sendmail/mail_tiketpengaduan', $data);
        $this->email->setTo($to);
        $this->email->setFrom('helpdesk@pesawarankab.go.id', 'Dinas Kominfotiksan Kabupaten Pesawaran');
        $this->email->setSubject($subject);
        $this->email->setMessage($html);

        if ($this->email->send()) {
            session()->setFlashdata('pengaduan', 'done');
            return redirect()->to('pengaduan');
        } else {
            // Saat gagal
            // echo $this->email->print_debugger();
            // die;
            session()->setFlashdata('pengaduan', 'gagal');
            return redirect()->to('pengaduan');
        }
    }

    public function checking()
    {

        $data = $this->request->getGet();
        if ($data) {

            if ($data['token'] != NULL) {

                $model = new PengaduanModel();
                // $datas['hasil'] = true;
                $datas['pengadu'] = $model->get_status_pengaduan($data['token']);

                if ($datas['pengadu'] == null || $datas['pengadu'] == false) {
                    $datas['hasil'] = false;
                } else {
                    $datas['hasil'] = true;
                }
                // var_dump($datas['data_beasiswa']);

            } else {

                $datas['hasil'] = false;
            }
            // return view('hasil', $datas);
            // var_dump($datas);

        } else {
            $datas['hasil'] = false;
            // return view('hasil', $datas);
        }

        $datas['title'] = "Cek Status Pengaduan";
        $model = new KategoriModel();
        $datas['kategori'] = $model->get_kategori();
        return view('Pages/cek_status', $datas);
    }


    public function create_token()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        function generate_token($input, $strength = 15)
        {
            $input_length = strlen($input);
            $random_string = '';
            for ($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

            return $random_string; // redem char untuk dikembalikan
        }
        $sublink =  generate_token($permitted_chars, 15);

        return "HELPDESK_" . $sublink;
    }
}
