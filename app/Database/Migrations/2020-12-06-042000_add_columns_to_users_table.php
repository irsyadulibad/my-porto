<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnsToUsersTable extends Migration
{
	public function up()
	{
		$fields = [
			'fullname' => ['type' => 'varchar', 'constraint' => 255, 'null' => true, 'after' => 'password_hash'],
			'profile' => ['type' => 'varchar', 'constraint' => 255, 'default' => 'default.png', 'after' => 'fullname']
		];

		$this->forge->addColumn('users', $fields);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$columns = ['fullname', 'profile'];

		$this->forge->dropColumn('users', $columns);
	}
}
