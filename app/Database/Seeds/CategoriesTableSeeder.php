<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
	public function run()
	{
		$categoriesData = [
			['name' => 'Web', 'slug' => 'web'],
			['name' => 'Libs', 'slug' => 'libs']
		];

		foreach($categoriesData as $data) {
			$this->db->table('categories')->insert($data);
		}
	}
}
