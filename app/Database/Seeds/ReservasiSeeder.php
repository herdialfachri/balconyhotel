<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ReservasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_depan' => 'Jane',
                'nama_belakang' => 'Doe',
                'email' => 'jane.doe@example.com',
                'no_telp' => '08123456788',
                'harga' => 1000000,
                'id_kamar' => 1,
                'tanggal_pesan' => '2023-12-01',
                'tanggal_keluar' => '2023-12-10',
            ],
            // Tambahkan data reservasi lainnya
        ];

        $this->db->table('reservasi')->insertBatch($data);
    }
}
?>
