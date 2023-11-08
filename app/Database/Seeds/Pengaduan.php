<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pengaduan extends Seeder
{
    public function run()
	{
		$pengaduan_data = [
			[
                'id_kategori'      => 1,
				'id_user'          => 1,
                'nama_pengadu'     => 'Siti Kholisah Aulia',
                'nama_instansi'    => 'KOMINFO',
                'email'		       => 'user01@gmail.com',
				'no_hp'            => '089521936754',
				'deskripsi'        => 'Saya ingin melaporkan masalah seringnya putusnya koneksi jaringan internet yang saya alami. Dalam beberapa minggu terakhir, saya mengalami gangguan yang menyebabkan putusnya koneksi secara tiba-tiba. Masalah ini menghambat produktivitas kerja saya dan mengganggu aktivitas online saya.
                Saya telah mencoba mereset router dan memeriksa kabel-kabel, namun masalah ini tetap berlanjut. Mohon bantuan untuk mengatasi masalah ini dengan segera, agar saya dapat menggunakan layanan internet dengan lancar.',
                'file_pendukung'   => 'file.pdf',
				'proses_pengaduan' => '2023-10-11 03:14:07',
				'selesai_pengaduan'=> '2023-10-13 03:14:07',
				'pesan_balasan'    => 'Maaf, koneksi internet Anda terganggu karena ada masalah jaringan di wilayah Anda. Kami sedang memperbaikinya. Sementara itu, coba lakukan hal-hal yang ada dalam file sisipan. Kami harap ini dapat membantu. Kami akan kabari Anda jika ada perkembangan baru. Hubungi kami lagi jika ada pertanyaan atau keluhan lain. Terima kasih.',
				'file_balasan'     => 'file_balasan.pdf'

			],
		];

		foreach($pengaduan_data as $data){
			$this->db->table('pengaduan')->insert($data);
		}

	}
}
