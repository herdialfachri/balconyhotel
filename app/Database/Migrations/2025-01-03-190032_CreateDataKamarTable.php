<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDataKamarTable extends Migration
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
            'nama_kamar'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'harga' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'kapasitas' => [
                'type'       => 'INT',
                'constraint' => 2,
            ],
            'tipe_kasur' => [
                'type'       => 'VARCHAR',
                'constraint' => '25',
            ],
            'fasilitas' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('data_kamar');
    }

    public function down()
    {
        $this->forge->dropTable('data_kamar');
    }
}
?>
