<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RisetPassword extends Seeder
{
    public function run()
	{
		$riset_password_data = [
			[
				'id_user'          => 1,
                'email_user'       => 'user01@gmail.com',
                'token'		       => 'https://tokenamambdjabdjbdja',
				'waktu'            => '2038-01-19 03:14:07',
			],
		];

		foreach($riset_password_data as $data){
			$this->db->table('riset_password')->insert($data);
		}

	}
}
