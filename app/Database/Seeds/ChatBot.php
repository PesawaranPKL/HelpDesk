<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ChatBot extends Seeder
{
    public function run()
	{
		$chat_bot_data = [
			[
                'id_anak_chat'     => 1,
				'id_user'          => 1,
                'name_chat'        => 'WiFi saya tidak dapat akses internet.',
                'type_chat'		   => 'induk',
			],
		];

		foreach($chat_bot_data as $data){
			$this->db->table('chat_bot')->insert($data);
		}

	}
}
