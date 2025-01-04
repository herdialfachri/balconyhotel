<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateReservasiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_depan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_belakang'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'no_telp' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'harga' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'id_kamar' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'id_pengguna' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'tanggal_pesan' => [
                'type'       => 'DATE',
            ],
            'tanggal_keluar' => [
                'type'       => 'DATE',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_kamar', 'data_kamar', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_pengguna', 'pengguna', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('reservasi');
    }

    public function down()
    {
        $this->forge->dropTable('reservasi');
    }
}
?>
