<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'kategori';
    protected $primaryKey           = 'id_kategori';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['kategori', 'created_at'];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];

    public function get_kategori()
    {
        return $this->db->table('kategori')
            ->get()->getResultArray();
    }

    public function get_id_kategori($kategori)
    {
        return $this->db->table('kategori')
            ->where('kategori', ['kategori' => $kategori])
            ->get()->getRow('id_kategori');
    }


    public function get_name_kategori($id)
    {
        return $this->db->table('kategori')
            ->where('id_kategori', ['id_kategori' => $id])
            ->get()->getRow('kategori');
    }

    public function updatekategori($dataupdate, $id)
    {
        return $this->db->table('kategori')
            ->update($dataupdate, ['id_kategori' => $id]);
    }
}
