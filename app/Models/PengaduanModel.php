<?php

namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'pengaduan';
    protected $primaryKey           = 'id_pengaduan';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id_kategori', 'token_pengaduan', 'id_user', 'nama_pengadu', 'nama_instansi', 'email', 'no_hp', 'deskripsi', 'file_pendukung', 'created_at', 'proses_pengaduan', 'selesai_pengaduan', 'pesan_balasan', 'file_balasan'];

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

    public function get_data_pengaduan($id)
    {
        return $this->db->table('pengaduan')
            ->where('id_kategori', ['id_kategori' => $id])
            ->get()->getResultArray();
    }
    public function get_one_pengaduan($id)
    {
        return $this->db->table('pengaduan')
            ->where('id_pengaduan', ['id_pengaduan' => $id])
            ->get()->getRow();
    }
    public function get_status_pengaduan($token)
    {
        return $this->db->table('pengaduan')
            ->join('kategori', 'kategori.id_kategori = kategori.id_kategori')
            ->where('token_pengaduan', ['token_pengaduan' => $token])
            ->get()->getRow();
    }
    public function get_id_pengaduan($email, $waktu)
    {
        return $this->db->table('pengaduan')
            ->where('email', ['email' => $email])
            ->where('created_at', ['created_at' => $waktu])
            ->get()->getRow('id_pengaduan');
    }
    public function get_email_pengaduan($id)
    {
        return $this->db->table('pengaduan')
            ->where('id_pengaduan', ['id_pengaduan' => $id])
            ->get()->getRow('email');
    }
    public function updatedata($dataupdate, $id)
    {
        return $this->db->table('pengaduan')
            ->update($dataupdate, ['id_pengaduan' => $id]);
    }
}
