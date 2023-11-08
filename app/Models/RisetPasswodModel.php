<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'riset_password';
    protected $primaryKey           = 'id_riset_password';
    protected $allowedFields        = ['id_user', 'email_user', 'token', 'waktu'];

    // Dates
    protected $useTimestamps        = false;
}
