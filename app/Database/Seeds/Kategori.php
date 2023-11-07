<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kategori extends Seeder
{
    public function run()
	{
		$kategori_data = [
			[
                'kategori'  => 'Jaringan',
			],
		];

		foreach($kategori_data as $data){
			$this->db->table('kategori')->insert($data);
		}

	}
}
