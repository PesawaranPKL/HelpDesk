<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'user';
    protected $primaryKey           = 'id_user';
    protected $allowedFields        = ['email', 'password', 'role', 'status_akun'];

    // Dates
    protected $useTimestamps        = false;
}
