<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
	public function run()
	{
		$skillsData = [
			['name' => 'PHP', 'since' => '2019/06/03'],
			['name' => 'CSS', 'since' => '2019/06/20'],
			['name' => 'MySQL', 'since' => '2019/06/10'],
			['name' => 'Bootstrap', 'since' => '2019/07/01'],
			['name' => 'JQuery', 'since' => '2019/07/05'],
			['name' => 'CodeIgniter', 'since' => '2019/12/01'],
			['name' => 'SASS', 'since' => '2020/10/13'],
			['name' => 'Laravel', 'since' => '2020/11/28']
		];

		foreach($skillsData as $data) {
			$this->db->table('skills')->insert($data);
		}
	}
}
