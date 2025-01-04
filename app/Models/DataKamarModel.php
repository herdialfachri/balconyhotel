<?php

namespace App\Models;

use CodeIgniter\Model;

class DataKamarModel extends Model
{
    protected $table = 'data_kamar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_kamar', 'gambar', 'deskripsi', 'harga', 'kapasitas', 'tipe_kasur', 'fasilitas'];
}
?>
