<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'email'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'password'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '150'
            ],
            'role'          => [
                'type'           => 'ENUM',
                'constraint'     => ['admin', 'operator'],
                'default'        => 'admin'
            ],
            'status_akun'   => [
                'type'           => 'ENUM',
                'constraint'     => ['aktif', 'tidak aktif'],
                'default'        => 'aktif'
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('email', true);
        $this->forge->createTable('user', true);
    }
    
    public function down()
    {
        $this->forge->dropTable('user');
    }
}
