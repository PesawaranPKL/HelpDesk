<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ChatBot extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_chat' => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'id_anak_chat'           => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
            'id_user'           => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
            'name_chat'        => [
				'type'           => 'VARCHAR',
				'constraint'     => 150
			],
            'type_chat'        => [
                'type'           => 'ENUM',
                'constraint'     => ['induk', 'anak'],
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
		]);
        $this->forge->addKey('id_chat', true);
        $this->forge->addForeignKey('id_user', 'user_details', 'id_user', '', 'CASCADE');
        $this->forge->createTable('chat_bot', true);
    }

    public function down()
    {
        $this->forge->dropTable('chat_bot');
    }
}
