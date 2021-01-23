<?php namespace App\Models;

use CodeIgniter\Model;

class Service extends Model
{
	protected $table = 'services';
	protected $primaryKey = 'id';

	protected $returnType = 'object';

	protected $allowedFields = ['name', 'icon', 'description'];

	protected $validationRules = [
		'name' => 'required',
		'icon' => 'required',
		'description' => 'required|max_length[75]'
	];

	public function findOrFail($id)
	{
		$service = $this->find($id);

		if(!$service) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		} else {
			return $service;
		}
	}
}
