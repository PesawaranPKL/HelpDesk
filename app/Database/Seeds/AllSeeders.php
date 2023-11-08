<?php

namespace App\Database\Seeds;

class AllSeeders extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $seeders = [
            'User',
            'UserDetails',
            'Kategori',
            'Artikel',
            'ChatBot',
            'Faq',
            'Pengaduan',
            'RisetPassword'
            // Tambahkan seeder-seeder lainnya aja disini
        ];

        foreach ($seeders as $seeder) {
            $this->call($seeder);
        }
    }
}
