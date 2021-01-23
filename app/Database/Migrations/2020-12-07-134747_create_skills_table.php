<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSkillsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true, 'unsigned' => true],
			'name' => ['type' => 'varchar', 'constraint' => 255],
			'since' => ['type' => 'date']
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('skills', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('skills');
	}
}
