<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'user';
    protected $primaryKey           = 'email';
    protected $allowedFields        = ['password', 'role', 'status_akun'];

    // Dates
    protected $useTimestamps        = false;

    public function updatepassword($dataupdate, $email)
    {
        return $this->db->table('user')
        ->update($dataupdate, ['email' => $email]);
    }
}
