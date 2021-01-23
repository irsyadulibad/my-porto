<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'name' => 'admin',
			'description' => 'Site administrator',
		];

		$this->db->table('auth_groups')->insert($data);
	}
}
