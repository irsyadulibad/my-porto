<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInboxTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'name' => ['type' => 'varchar', 'constraint' => 50],
			'email' => ['type' => 'varchar', 'constraint' => 100],
			'subject' => ['type' => 'varchar', 'constraint' => 200],
			'message' => ['type' => 'text'],
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('inbox', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('inbox');
	}
}
