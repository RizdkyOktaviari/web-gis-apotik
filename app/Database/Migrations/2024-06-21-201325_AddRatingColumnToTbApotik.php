<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRatingColumnToTbApotik extends Migration
{
    public function up()
    {
        $fields = [
            'rating' => [
                'type' => 'INT',
                'constraint' => 5,
                'null' => true,
            ],
        ];

        $this->forge->addColumn('tb_apotik', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('tb_apotik', 'rating');
    }
}
