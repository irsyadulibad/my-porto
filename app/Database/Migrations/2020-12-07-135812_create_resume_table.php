<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateResumeTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true, 'unsigned' => true,],
			'name' => ['type' => 'varchar', 'constraint' => 255],
			'begin_year' => ['type' => 'year'],
			'end_year' => ['type' => 'varchar', 'constraint' => 10],
			'place' => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
			'description' => ['type' => 'text', 'null' => true]
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('resume', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('resume');
	}
}
