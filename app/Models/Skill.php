<?php namespace App\Models;

use CodeIgniter\Model;

class Skill extends Model
{
	protected $table = 'skills';
	protected $primaryKey = 'id';

	protected $returnType = 'object';

	protected $allowedFields = ['name', 'since'];

	protected $validationRules = [
		'name' => 'required',
		'since' => 'required|valid_date[Y-m-d]'
	];

	public function findOrFail($id)
	{
		$skill = $this->find($id);

		if(!$skill) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		} else {
			return $skill;
		}
		
	}

	public function getFormatted()
	{
		$results = $this->findAll();
		$half = ceil(count($results) / 2);

		if($half < 1) $half = 1;

		return array_chunk($results, $half);
	}
}
