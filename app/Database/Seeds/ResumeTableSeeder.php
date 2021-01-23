<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ResumeTableSeeder extends Seeder
{
	public function run()
	{
		$resumeData = [
			[
				'name' => 'SMK Darul Muqomah',
				'begin_year' => 2018,
				'end_year' => 2021,
				'place' => 'Gumukmas - Jember',
				'description' => '<p>Vocational High School (Computer and Network Engineering)</p>'
			],
			[
				'name' => 'Fullstack Web Developer',
				'begin_year' => 2019,
				'end_year' => 'present',
				'place' => 'SMK Darul Muqomah',
				'description' => '<p>Create a school profile site</p>'
			]
		];

		foreach($resumeData as $data) {
			$this->db->table('resume')->insert($data);
		}
	}
}
