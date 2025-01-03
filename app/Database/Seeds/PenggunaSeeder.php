<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'John Doe',
                'no_hp' => '08123456789',
                'alamat' => 'Jl. Kebon Jeruk No. 10',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role' => '2', // Sebagai user
            ],
            [
                'nama' => 'Admin User',
                'no_hp' => '08123456780',
                'alamat' => 'Jl. Kebon Sirih No. 20',
                'password' => password_hash('adminpassword', PASSWORD_DEFAULT),
                'role' => '1', // Sebagai admin
            ],
            // Tambahkan data pengguna lainnya
        ];

        $this->db->table('pengguna')->insertBatch($data);
    }
}
?>
