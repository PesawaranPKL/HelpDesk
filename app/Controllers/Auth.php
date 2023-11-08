<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\UserDetailsModel;
use Config\Services;
use CodeIgniter\Throttle\ThrottlerInterface;
use CodeIgniter\Throttle\ThrottlerTrait;

class Auth extends BaseController
{

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = Services::session();
        $this->email = Services::email();
    }


    public function index()
    {
        $data['validation'] = Services::validation();

        if ($this->session->has('isLogin') == false) {
            return view('auth/login', $data);
        }
        return redirect()->to('dashboard');
    }

    public function authsignin()
    {
        if ($this->session->has('isLogin')) {
            return view('dashboard');
        }

        // validasi input
        if (!$this->validate([
            'email' => [
                'rules' => 'required|trim|valid_email|max_length[50]',
                'errors' => [
                    'required' => 'Email harus di isi!',
                    'valid_email' => 'Masukkan Email',
                    'max_length' => 'Gunakan maksimal 50 karakter!'
                ]
            ],
            'password' => [
                'rules' => 'required|trim|min_length[3]|max_length[45]',
                'errors' => [
                    'required' => 'Password harus di isi',
                    'min_length' => 'Password terlalu pendek!',
                    'max_length' => 'Gunakan maksimal 45 karakter!'
                ]
            ]
        ])) {

            $validation = Services::validation();

            $errors = [
                'email' => $validation->getError('email'),
                'password' => $validation->getError('password')
            ];
            // Lakukan sesuatu dengan daftar error, seperti meneruskannya ke view
            return redirect()->to('/login_sistem')->withInput()->with('errors', $errors);
        }

        $throttler = Services::throttler();
        // ambil alamat ip public user
        $ipAddress = $this->request->getIPAddress();
        $key = 'login_attempts_' . str_replace(':', '_', $ipAddress);

        // cek jika 5 kali percobaan login
        if ($throttler->check($key, 5, 900) === false) {
            session()->setFlashdata('login_err', 'limit');
            return redirect()->back();
        }

        $data = $this->request->getPost();
        $auth = $this->userModel->where('tabel_user.email', $data['email'])
            ->join('user_details', 'user_details.email=tabel_user.email')
            ->first();

        if ($auth) {
            // Saat akun ditemukan
            if (password_verify($data['password'], $auth['password'])) {

                if ($auth['status_akun'] == 'aktif') {
                    // reset ulang
                    if ($throttler instanceof ThrottlerTrait) {
                        $throttler->reset($key);
                    }
                    // Saat password sesuai
                    $sessLogin = [
                        'id_user' => $auth['id_user'],
                        'email' => $auth['email'],
                        'nama' => $auth['nama'],
                        'role' => $auth['role'],
                        'status' => $auth['status_akun'],
                        'isLogin' => true
                    ];
                    $this->session->set($sessLogin);
                    session()->setFlashdata('login', 'done');
                    return redirect()->to('dashboard');
                } elseif ($auth['status_akun'] == 'mati') {
                    session()->setFlashdata('login_err', 'not_actived');
                    return redirect()->back();
                } else {
                    session()->setFlashdata('login_err', 'verif');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('login_err', 'wrong_passwd');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('login_err', 'empty');
        }
        return redirect()->back();
    }

    public function regis(): string
    {
        if ($this->session->has('isLogin')) {
            return redirect()->to('dashboard');
        }

        $data['validation'] = Services::validation();
        return view('auth/register');
    }

    // Halaman melakukan reset password dengan mengirimkan email terdaftar
    // untuk mendapatkan email dengan tautan yang akan diarahkan ke halaman password baru
    public function lupa_pw()
    {
        if ($this->session->has('isLogin')) {
            return redirect()->to('/dashboard');
        }
        $data['validation'] = Services::validation();
        return view('auth/lupa_password', $data);
    }
    function aksi_lupa_pw() 
    {
        if ($this->session->has('isLogin')) {
            return redirect()->to('/dashboard');
        }
        // validasi input
        $validation = \Config\Services::validation();

        $rules = [
            'email' => [
                'rules' => 'required|trim|valid_email|max_length[65]',
                'errors' => [
                    'required' => 'Email harus di isi!',
                    'valid_email' => 'Masukkan Email Dengan Benar',
                    'max_length' => 'Gunakan maksimal 65 karakter!'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            
            // Aksi yang akan dilakukan jika email tidak valid
            return redirect()->to('/lupa_password')->withInput()->with('validation', $validation);
        }

        // Aksi yang akan dilakukan jika email valid
        $get_mail = $this->request->getPost('email');
        // Lakukan sesuatu dengan $email
        //get data token ada atau tidak
		$email = $this->userModel->where('email', $get_mail)->first();
		if($email){
				
			$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
			function generate_string($input, $strength = 16) {
				$input_length = strlen($input);
				$random_string = '';
				for($i = 0; $i < $strength; $i++) {
					$random_character = $input[mt_rand(0, $input_length - 1)];
					$random_string .= $random_character;
				}
			
				return $random_string;
			}
			
			$sublink =  generate_string($permitted_chars, 100);
			//link reset password
			$link = base_url('reset_password/'.$sublink.'') ;
			//seting jam  untuk max 24 jam
			$date = date('Y-m-d');
			$date1 = str_replace('-', '/', $date);
			$tomorrow = date('Y-m-d',strtotime($date1 . "+1 days"));

			//send ke email
			$to = $data['email'];
			$subject = 'Reset Password Akun Admin';
			$message = 'hanya berlaku 24 jam '.$link;
			$this->email->setTo($to);
			$this->email->setFrom('statistik.diskominfo@pesawarankab.go.id', 'Dinas Kominfotiksan Kabupaten Pesawaran');
			$this->email->setSubject($subject);
			$this->email->setMessage($message);
			if ($this->email->send()) 
			{
				//panggil model reset password
				$this->resetModel = new ResetModel();
				$this->resetModel->save([
					'email_user' => $to,
					'token' => $sublink,
					'waktu' => $tomorrow,
					"status" => '0'
				]);
				session()->setFlashdata('info', 'reset_mail_sukses');
				return redirect()->to('login_sistem');
			} 
			else 
			{
				// $data = $this->email->printDebugger(['headers']);
				// print_r($data);
                //posisi saat gagal mengirim email
				session()->setFlashdata('info', 'email_not_send');
				return redirect()->to('lupa_password');
			}

		} else {
            //jika email tidak ditemukan, balikkan ke halaman forgotpassword
            session()->setFlashdata('info', 'email_not_found');
            return redirect()->to('lupa_password');
        }
    }

    // Halaman notifikasi email reset password sudah dikirim dan 
    // jika email tidak masuk maka kirim ulang email dapat dilakukan dihalaman ini
    public function reset_pw(): string
    {
        return view('auth/reset_password');
    }

    // Halaman untuk melakukan perubahan password
    public function pw_baru(): string
    {
        return view('auth/password_baru');
    }


    public function logout()
    {
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/login_sistem');
        }
        session()->destroy();
        session()->setFlashdata('akun', 'logout');
        return redirect()->to('/login_sistem');
    }
}
