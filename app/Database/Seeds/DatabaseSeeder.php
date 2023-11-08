<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Jalankan seeder kustom yang akan menjalankan semua seeder
        $this->call('AllSeeders');
    }
}
