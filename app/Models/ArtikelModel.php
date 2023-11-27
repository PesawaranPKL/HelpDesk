<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'artikel';
    protected $primaryKey           = 'id_artikel';
    protected $allowedFields        = ['id_kategori', 'id_user', 'judul_artikel', 'isi_artikel', 'status', 'thumbnail', 'updated_at'];

    public function get_artikel_all()
    {
        return $this->db->table('artikel')
            ->join('kategori', 'kategori.id_kategori=artikel.id_kategori')
            ->join('user_details', 'user_details.id_user=artikel.id_user')
            ->get()->getResultArray();
    }

    public function one_artikel($id)
    {
        return $this->db->table('artikel')
            ->join('kategori', 'kategori.id_kategori=artikel.id_kategori')
            ->join('user_details', 'user_details.id_user=artikel.id_user')
            ->where('id_artikel', $id)
            ->get()->getRow();
    }
    public function updateartikel($dataupdate, $id)
    {
        return $this->db->table('artikel')
        ->update($dataupdate, ['id_artikel' => $id]);
    }
}
