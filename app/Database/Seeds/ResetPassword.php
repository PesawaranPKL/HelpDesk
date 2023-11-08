<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ResetPassword extends Seeder
{
    public function run()
	{
		$reset_password_data = [
			[
                'email_user'       => 'user01@gmail.com',
                'token'		       => 'https://tokenamambdjabdjbdja',
				'waktu'            => '2023-10-11 03:14:07',
			],
		];

		foreach($reset_password_data as $data){
			$this->db->table('reset_password')->insert($data);
		}

	}
}
