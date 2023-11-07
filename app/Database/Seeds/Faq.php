<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Faq extends Seeder
{
    public function run()
	{
		$faq_data = [
			[
                'id_kategori'  => 1,
				'id_user'      => 1,
				'kategori'         => 'Jaringan',
                'judul_faq'    => 'Bagaimana jika saya lupa kata sandi?',
				'isi_faq'      => 'Jika Anda lupa kata sandi, gunakan opsi "Lupa kata sandi" yang biasanya disediakan, Ini akan memandu Anda untuk mereset kata sandi, atau silahkan menghubungi admin.'
			],
		];

		foreach($faq_data as $data){
			$this->db->table('faq')->insert($data);
		}

	}
}
