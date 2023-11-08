<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_artikel'   => [
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
			'judul_artikel'	=> [
				'type'           => 'VARCHAR',
				'constraint'     => 190
			],
			'kategori'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 30
			],
            'isi_artikel'	=> [
				'type'           => 'TEXT',
				'null'           => true
			],
            'status'		=> [
                'type'           => 'ENUM',
                'constraint'     => ['tayang', 'tidak tayang'],
                'default'        => 'tayang'
            ],
            'thumbnail'     => [
				'type'           => 'VARCHAR',
                'constraint'     => 100,
			],
			'author'		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 50
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
            
		]);
        $this->forge->addKey('id_artikel', true);
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id_kategori', '', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'user_details', 'id_user', '', 'CASCADE');
        $this->forge->createTable('artikel', true);
    }

    public function down()
    {
        $this->forge->dropTable('artikel');
    }
}
