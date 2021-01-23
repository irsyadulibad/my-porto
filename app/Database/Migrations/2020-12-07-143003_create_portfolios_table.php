<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePortfoliosTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'title' => ['type' => 'varchar', 'constraint' => 255],
			'slug' => ['type' => 'varchar', 'constraint' => 255],
			'category_id' => ['type' => 'int', 'unsigned' => true],
			'created_at' => ['type' => 'datetime', 'null' => true],
			'updated_at' => ['type' => 'datetime', 'null' => true],
		]);

		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'CASCADE');

		$this->forge->createTable('portfolios', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('portfolios');
	}
}
