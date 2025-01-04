<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class DataKamarSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nama_kamar' => $faker->word,
                'gambar' => $faker->imageUrl(),
                'deskripsi' => $faker->sentence,
                'harga' => $faker->randomFloat(2, 100000, 1000000),
                'kapasitas' => $faker->numberBetween(1, 4),
                'tipe_kasur' => $faker->randomElement(['Single', 'Double', 'Queen', 'King']),
                'fasilitas' => $faker->words(3, true),
            ];

            $this->db->table('data_kamar')->insert($data);
        }
    }
}
?>
