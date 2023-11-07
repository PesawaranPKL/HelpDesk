<?php

namespace App\Models;

use CodeIgniter\Model;

class UserDetailsModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'user_details';
    protected $primaryKey           = 'id_user_detail';
    protected $allowedFields        = ['email', 'nama', 'no_hp', 'create_at'];

    // Dates
    protected $useTimestamps        = false;
}
