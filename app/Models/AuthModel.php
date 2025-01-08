<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'no_hp', 'alamat', 'password', 'role'];

    public function getUserByUsername($username)
    {
        return $this->where('nama', $username)->first();
    }
}
