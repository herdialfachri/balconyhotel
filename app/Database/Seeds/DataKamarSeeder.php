<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataKamarSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_kamar' => 'Deluxe Room',
                'gambar' => 'deluxe.jpg',
                'deskripsi' => 'Kamar mewah dengan fasilitas lengkap',
                'harga' => 500000,
            ],
            // Tambahkan data kamar lainnya
        ];

        $this->db->table('data_kamar')->insertBatch($data);
    }
}
?>
