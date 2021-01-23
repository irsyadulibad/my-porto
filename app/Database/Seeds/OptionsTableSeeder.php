<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
	public function run()
	{
		$optionsData = [
			// Biodata Group
			['name' => 'bio_born', 'value' => '2002-12-02'],
			['name' => 'bio_city', 'value' => 'jember'],
			['name' => 'bio_description', 'value' => 'Web Developer'],
			['name' => 'bio_email', 'value' => 'ahmadirsyadulibad7@gmail.com'],
			['name' => 'freelance', 'value' => 'Available'],
			['name' => 'bio_image', 'value' => 'default.jpg'],
			['name' => 'bio_phone', 'value' => '088217261702'],
			['name' => 'bio_website', 'value' => 'irsyadulibad.my.id'],
			// Contact Group
			['name' => 'contact_address', 'value' => 'Tembokrejo - Gumukmas - Jember'],
			['name' => 'contact_email', 'value' => 'ahmadirsyadulibad7@gmail.com'],
			['name' => 'contact_phone', 'value' => '088217261702'],
			// General Group
			['name' => 'general_jobs', 'value' => 'Web Developer'],
			['name' => 'general_job_description', 'value' => 'Iam an software engineer'],
			['name' => 'general_name', 'value' => 'Irsyadul Ibad'],
			['name' => 'general_quote', 'value' => 'The best way to predict the future is to create it.'],
			// Site Group
			['name' => 'site_description', 'value' => 'My-Porto'],
			['name' => 'site_desc_about', 'value' => ''],
			['name' => 'site_desc_portfolio', 'value' => ''],
			['name' => 'site_desc_resume', 'value' => ''],
			['name' => 'site_desc_services', 'value' => ''],
			['name' => 'site_desc_skills', 'value' => ''],
			['name' => 'site_hero', 'value' => 'hero.jpg'],
			['name' => 'site_keywords', 'value' => 'my-porto'],
			['name' => 'site_title', 'value' => 'Ahmad Irsyadul Ibad'],
			// Social Group
			['name' => 'social_facebook', 'value' => 'irsyadulibad.dev'],
			['name' => 'social_github', 'value' => 'irsyadulibad'],
			['name' => 'social_instagram', 'value' => 'ahmad.irsyadul.ibad'],
			['name' => 'social_linkedin', 'value' => 'irsyadulibad'],
			['name' => 'social_telegram', 'value' => 'irsyadul_ibad']
		];

		foreach ($optionsData as $data) {
			$this->db->table('options')->insert($data);	
		}
	}
}
