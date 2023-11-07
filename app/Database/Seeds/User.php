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
				'password'      => '$2y$10$81vaJuLTsor.qCe.TB.LbuPhGzpMXPrb6FGXj6QrtnUJUptVeK3y2',
			],
		];

		foreach($user_data as $data){
			$this->db->table('user')->insert($data);
		}

	}
}
