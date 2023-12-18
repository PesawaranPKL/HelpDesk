<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengaduan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id_pengaduan'  => [
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
			'id_user'       => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true
			],
            'nama_pengadu'  => [
				'type'           => 'VARCHAR',
				'constraint'     => 50
			],
            'nama_instansi' => [
				'type'           => 'VARCHAR',
				'constraint'     => 100
			],
            'email'         => [
				'type'           => 'VARCHAR',
				'constraint'     => 65
			],
			'no_hp'         => [
				'type'           => 'VARCHAR',
                'constraint'     => 20,
				'null'           => true
			],
            'deskripsi'     => [
				'type'           => 'TEXT',
				'null'           => true
			],
            'file_pendukung'=> [
				'type'           => 'VARCHAR',
                'constraint'     => 160
			],
            'proses_pengaduan'=> [
				'type'           => 'DATETIME'
			],
			'selesai_pengaduan'=> [
				'type'           => 'DATETIME'
			],
            'pesan_balasan'     => [
				'type'           => 'TEXT',
				'null'           => true
			],
            'file_balasan'=> [
				'type'           => 'VARCHAR',
                'constraint'     => 160
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'            
		]);
        $this->forge->addKey('id_pengaduan', true);
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id_kategori', '', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'user_details', 'id_user', '', 'CASCADE');
        $this->forge->createTable('pengaduan', true);
    }

    public function down()
    {
        $this->forge->dropTable('pengaduan');
    }
}
