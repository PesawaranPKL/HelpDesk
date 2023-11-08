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
				'waktu'            => '2038-01-19 03:14:07',
			],
		];

		foreach($reset_password_data as $data){
			$this->db->table('reset_password')->insert($data);
		}

	}
}