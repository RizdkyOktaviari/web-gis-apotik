<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Createapotiktable extends Migration
{
	public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
			'contact' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
				'null'       => true,
            ],
			'description' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
				'null'       => true,
            ],
            'latitude' => [
                'type' => 'DOUBLE',
				'null'       => true,
            ],
            'longitude' => [
                'type' => 'DOUBLE',
				'null'       => true,
            ],
            'address' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_apotik');
    }

	public function down()
    {
        $this->forge->dropTable('tb_apotik');
    }
}
