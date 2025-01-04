<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nama' => $faker->name,
                'no_hp' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role' => $faker->randomElement(['1', '2']),
            ];

            $this->db->table('pengguna')->insert($data);
        }
    }
}
?>
