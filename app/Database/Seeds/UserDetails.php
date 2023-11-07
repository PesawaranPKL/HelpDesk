<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserDetails extends Seeder
{
    public function run()
	{
		$user_details_data = [
			[
                'email'		=> 'admin01@gmail.com',
				'nama'      => 'Siti Kholisah Aulia',
				'no_hp'     => '089521214343',
			],
		];

		foreach($user_details_data as $data){
			$this->db->table('user_details')->insert($data);
		}

	}
}
