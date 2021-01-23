<?php namespace App\Models;

use CodeIgniter\Model;

class Resume extends Model
{
	protected $table = "resume";
	protected $primaryKey = "id";

	protected $allowedFields = ['name', 'begin_year', 'end_year', 'place', 'description'];

	protected $returnType = "object";
	protected $validationRules = [
		'name' => 'required',
		'begin_year' => 'required|valid_date[Y]',
		'end_year' => 'required',
		'place' => 'required',
		'description' => 'required'
	];

	public function findOrFail($id)
	{
		$resume = $this->find($id);

		if(!$resume) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		} else {
			return $resume;
		}
	}

	public function getFormatted()
	{
		$results = $this->orderBy('begin_year', 'desc')
			->orderBy('end_year', 'desc')
			->findAll();
		$half = ceil(count($results) / 2);

		return array_chunk($results, $half);
	}
}
