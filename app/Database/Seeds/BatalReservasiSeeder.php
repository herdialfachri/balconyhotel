<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class BatalReservasiSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nama_depan' => $faker->firstName,
                'nama_belakang' => $faker->lastName,
                'email' => $faker->email,
                'no_telp' => $faker->phoneNumber,
                'harga' => $faker->randomFloat(2, 100000, 1000000),
                'id_kamar' => $faker->numberBetween(1, 10),
                'id_pengguna' => $faker->numberBetween(1, 10),
                'id_reservasi' => $faker->numberBetween(1, 10),
                'tanggal_pesan' => $faker->date,
                'tanggal_keluar' => $faker->date,
            ];

            $this->db->table('batal_reservasi')->insert($data);
        }
    }
}
?>
