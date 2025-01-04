<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('DataKamarSeeder');
        $this->call('PenggunaSeeder'); 
        $this->call('ReservasiSeeder');
        $this->call('BatalReservasiSeeder');
        $this->call('SuksesReservasiSeeder');
    }
}
?>
