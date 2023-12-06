<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Notofikasi extends Seeder
{
    public function run()
	{
		$notifikasi_data = [
			[
                'id_pengaduan'  => 1
			],
		];

		foreach($notifikasi_data as $data){
			$this->db->table('notifikasi')->insert($data);
		}

	}
}
