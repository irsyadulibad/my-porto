<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateServicesTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'name' => ['type' => 'varchar', 'constraint' => 255],
			'icon' => ['type' => 'varchar', 'constraint' => 20],
			'description' => ['type' => 'text']
		]);

		$this->forge->addKey('id', true);

		$this->forge->createTable('services', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('services');
	}
}
