<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddOpenToCloseColumnToTbApotik extends Migration
{
	public function up()
	{
		$fields = [
			'open_to_close' => [
				'type' => 'TIME',
				'null' => true,
			]
		];

		$this->forge->addColumn('tb_apotik', $fields);
	}

	public function down()
	{
		$this->forge->dropColumn('tb_apotik', 'open_to_close');
	}
}
