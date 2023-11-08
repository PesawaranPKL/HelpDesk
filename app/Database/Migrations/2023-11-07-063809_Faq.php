<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faq extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_faq'		=> [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
            'id_kategori'   => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
			],
			'id_user'		=> [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
			],
            'kategori'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 30
			],
			'judul_faq'     => [
				'type'           => 'VARCHAR',
				'constraint'     => 190
			],
            'isi_faq'       => [
				'type'           => 'TEXT',
				'null'           => true
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
            
		]);
        $this->forge->addKey('id_faq', true);
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id_kategori', '', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'user_details', 'id_user', '', 'CASCADE');
        $this->forge->createTable('faq', true);
    }

    public function down()
    {
        $this->forge->dropTable('faq');
    }
}
