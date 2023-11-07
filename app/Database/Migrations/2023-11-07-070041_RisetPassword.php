<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RisetPassword extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_riset_password' => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'id_user'           => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
			],
            'email_user'        => [
				'type'           => 'VARCHAR',
				'constraint'     => 50
			],
            'token'             => [
				'type'           => 'VARCHAR',
				'constraint'     => 255
			],
            'waktu'             => [
				'type'           => 'DATETIME'
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',            
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
		]);
        $this->forge->addKey('id_riset_password', true);
        $this->forge->addForeignKey('id_user', 'user_details', 'id_user', '', 'CASCADE');
        $this->forge->createTable('riset_password', true);
    }

    public function down()
    {
        $this->forge->dropTable('riset_password');
    }
}
