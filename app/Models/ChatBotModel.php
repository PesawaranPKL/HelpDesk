<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatBotModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'chat_bot';
    protected $primaryKey       = 'id_chat';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_anak_chat', 'id_user', 'name_chat', 'url_recomend', 'type_chat'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getAnak($id_induk)
    {
        return $this->where('id_anak_chat', $id_induk)->findAll();
    }


    // ini dibawah untuk tabel yang info keturunan siapa( belum bisa)
    public function gethirarki_info_induk($id_induk)
    {
        $result = $this->where('id_anak_chat', $id_induk)->findAll();

        foreach ($result as &$item) {
            $item['is_child'] = $this->isChild($item['id_chat']);
            $item['children'] = $this->gethirarki_info_induk($item['id_chat']);
        }

        return $result;
    }

    protected function isChild($id)
    {
        $result = $this->gethirarki_info_induk($id);
        return count($result) > 0;
    }
}
