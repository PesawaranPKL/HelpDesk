<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserDetails extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_user'   => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'email'     => [
				'type'           => 'VARCHAR',
				'constraint'     => 65
			],
			'nama'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 50
			],
			'no_hp'     => [
				'type'           => 'VARCHAR',
                'constraint'     => 20,
				'null'           => true
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
            
		]);
        $this->forge->addKey('id_user', true);
        $this->forge->addForeignKey('email', 'user', 'email', '', 'CASCADE');
        $this->forge->createTable('user_details', true);
    }

    public function down()
    {
        $this->forge->dropTable('user_details');
    }
}
