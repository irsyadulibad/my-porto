<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		$userData = [
			'email' => 'admin@gmail.com',
			'username' => 'admin',
			// pass: myportologin
			'password_hash' => '$2y$10$ekHyjlncysfZSIUpVYc3I.xKq2uhfsUV/VLKRGX0OvPzGUW3bVLHK',
			'fullname' => 'Irsyadul Ibad',
			'profile' => 'default.png',
			'active' => 1,
			'created_at' => date('Y-m-d H:i:s')
		];

		$this->db->table('users')->insert($userData);
	}
}
