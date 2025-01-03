<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SuksesReservasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_depan' => 'Alice',
                'nama_belakang' => 'Johnson',
                'email' => 'alice.johnson@example.com',
                'no_telp' => '08123456786',
                'harga' => 3000000,
                'id_kamar' => 3,
                'tanggal_pesan' => '2023-10-01',
                'tanggal_keluar' => '2023-10-10',
            ],
            // Tambahkan data sukses reservasi lainnya
        ];

        $this->db->table('sukses_reservasi')->insertBatch($data);
    }
}
?>
