<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $table = 'reservasi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_depan', 'nama_belakang', 'email', 'no_telp',
        'harga', 'id_kamar', 'id_pengguna', 'tanggal_pesan', 'tanggal_keluar'
    ];
}
