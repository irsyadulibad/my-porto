<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOptionsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'name' => ['type' => 'varchar', 'constraint' => 255],
			'value' => ['type' => 'varchar', 'constraint' => 255],
			'created_at' => ['type' => 'datetime', 'null' => true],
			'updated_at' => ['type' => 'datetime', 'null' => true]
		]);

		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('name');

		$this->forge->createTable('options', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('options');
	}
}
