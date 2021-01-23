<?php namespace App\Models;

use CodeIgniter\Model;

class About extends Model
{
	public function saveProfile($image)
	{
		// Generate a random name
		$name = $image->getRandomName();
		// Move the file to assets dir
		$image->move(FCPATH.'assets/img', $name);
		// Save to option table
		put_options(['bio_image' => $name]);

		return true;
	}
}
