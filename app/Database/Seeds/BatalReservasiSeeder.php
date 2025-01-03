<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BatalReservasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_depan' => 'John',
                'nama_belakang' => 'Smith',
                'email' => 'john.smith@example.com',
                'no_telp' => '08123456787',
                'harga' => 2000000,
                'id_kamar' => 2,
                'tanggal_pesan' => '2023-11-01',
                'tanggal_keluar' => '2023-11-05',
            ],
            // Tambahkan data batal reservasi lainnya
        ];

        $this->db->table('batal_reservasi')->insertBatch($data);
    }
}
?>
