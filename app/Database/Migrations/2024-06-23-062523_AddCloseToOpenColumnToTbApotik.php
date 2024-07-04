<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCloseToOpenColumnToTbApotik extends Migration
{
	public function up()
	{
		$fields = [
			'close_to_open' => [
				'type' => 'Time',
				'null' => true,
			],
		];

		$this->forge->addColumn('tb_apotik', $fields);
	}

	public function down()
	{
		$this->forge->dropColumn('tb_apotik', 'close_to_open');
	}
}
