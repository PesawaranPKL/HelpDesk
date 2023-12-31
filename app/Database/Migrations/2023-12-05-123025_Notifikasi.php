<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Notifikasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_notifikasi'  => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'id_pengaduan'   => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true
            ],
            'id_user'        => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true
            ],
            'waktu_baca' => [
                'type'           => 'DATETIME',
                'null'           => true
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('id_notifikasi', true);
        $this->forge->addForeignKey('id_pengaduan', 'pengaduan', 'id_pengaduan', '', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'user_details', 'id_user', '', 'CASCADE');
        $this->forge->createTable('notifikasi', true);
    }

    public function down()
    {
        $this->forge->dropTable('notifikasi');
    }
}
