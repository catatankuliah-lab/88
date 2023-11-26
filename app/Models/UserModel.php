<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['username', 'password', 'posisi'];

    public function getLastUser()
    {
        return $this->orderBy('id_user', 'desc')->limit(1)->first();
    }
}
