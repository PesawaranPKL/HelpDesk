<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_kategori'   => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'kategori'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 30
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',            
		]);
        $this->forge->addKey('id_kategori', true);
        $this->forge->createTable('kategori', true);
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}
