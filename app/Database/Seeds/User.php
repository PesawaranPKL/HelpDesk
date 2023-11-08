<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
	{
		$user_data = [
			[
				'email'         => 'admin01@gmail.com',
				'password'      => '$2y$10$Rio73GqeTbJwZuU6acS4jexgGFJalFIjLaruvzoOy7BnDWJqKoEWm',
			],
		];

		foreach($user_data as $data){
			$this->db->table('user')->insert($data);
		}

	}
}
