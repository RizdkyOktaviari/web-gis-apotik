<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'username', 'password'];

    protected $useTimestamps = false;
}
