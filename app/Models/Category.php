<?php namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
	protected $table = "categories";
	protected $primaryKey = "id";

	protected $allowedFields = ['name', 'slug'];
	protected $returnType = "object";

	protected $validationRules = [
		'name' => 'required',
		'slug' => 'required'
	];
}
