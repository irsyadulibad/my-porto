<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnsToPortfoliosTable extends Migration
{
	public function up()
	{
		$fields = [
			'image' => ['type' => 'varchar', 'constraint' => 255, 'default' => 'default.png', 'after' => 'slug'],
			'content' => ['type' => 'text', 'null' => true, 'after' => 'image']
		];

		$this->forge->addColumn('portfolios', $fields);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$columns = ['image', 'content'];

		$this->forge->dropColumn('portfolios', $columns);
	}
}
