<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Artikel extends Seeder
{
    public function run()
	{
		$artikel_data = [
			[
                'id_kategori'      => 1,
				'id_user'          => 1,
                'judul_artikel'    => 'Bagaimana cara menangani masalah koneksi jaringan yang sering putus?',
				'kategori'         => 'Jaringan',
				'isi_artikel'      => '1. Restart router Anda dengan mencabut daya, tunggu beberapa detik, dan sambungkan kembali. 
                2. Periksa kabel listrik dan pastikan router dalam kondisi baik. 
                3. Periksa pengaturan Wi-Fi dan pastikan nama (SSID) dan kata sandi Wi-Fi benar. 
                4. Pastikan perangkat Anda berada dalam jangkauan sinyal Wi-Fi yang cukup. 
                5. Jika masalah berlanjut, hubungi kami melalui livechat untuk bantuan lebih lanjut.',
                'thumbnail'        => 'gambar.jpg',
                'author'           => 'Aulia Maharani'
			],
		];

		foreach($artikel_data as $data){
			$this->db->table('artikel')->insert($data);
		}

	}
}
