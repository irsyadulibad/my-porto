<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllTableSeeder extends Seeder
{
	public function run()
	{
		$this->call('CategoriesTableSeeder');
		$this->call('OptionsTableSeeder');
		$this->call('ResumeTableSeeder');
		$this->call('SkillsTableSeeder');
		$this->call('UsersTableSeeder');
	}
}
