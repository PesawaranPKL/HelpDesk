<?php

namespace App\Models;

use CodeIgniter\Model;

class NotifikasiModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'notifikasi';
    protected $primaryKey           = 'id_notifikasi';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id_pengaduan', 'id_user', 'created_at', 'waktu_baca'];

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

    public function get_notifikasi_belum_dibaca_admin()
    {
        return $this->db->table('notifikasi')
            ->join('pengaduan', 'pengaduan.id_pengaduan = notifikasi.id_pengaduan')
            ->join('kategori', 'kategori.id_kategori = pengaduan.id_kategori')
            ->where('waktu_baca_admin', null)
            ->get()->getResultArray();
    }

    public function get_notifikasi_belum_dibaca_operator()
    {
        return $this->db->table('notifikasi')
            ->join('pengaduan', 'pengaduan.id_pengaduan = notifikasi.id_pengaduan')
            ->join('kategori', 'kategori.id_kategori = pengaduan.id_kategori')
            ->where('waktu_baca_operator', null)
            ->get()->getResultArray();
    }

    public function get_one_notif($id)
    {
        return $this->db->table('notifikasi')
            ->join('pengaduan', 'pengaduan.id_pengaduan = notifikasi.id_pengaduan')
            ->join('kategori', 'kategori.id_kategori = pengaduan.id_kategori')
            ->where('id_notifikasi', $id)
            ->get()->getRow();
    }

    public function updatenotif($dataupdate, $id)
    {
        return $this->db->table('notifikasi')
            ->update($dataupdate, ['id_notifikasi' => $id]);
    }

    public function hapus_semua_notif_admin($dataupdate)
    {
        return $this->db->table('notifikasi')
            ->update($dataupdate, ['waktu_baca_admin' => null]);
    }

    public function hapus_semua_notif_operator($dataupdate)
    {
        return $this->db->table('notifikasi')
            ->update($dataupdate, ['waktu_baca_operator' => null]);
    }
}
