<?php namespace App\Models;

use CodeIgniter\Model;

class Inbox extends Model
{
	protected $table = "inbox";
	protected $primaryKey = "id";

	protected $allowedFields = ['name', 'email', 'subject', 'message'];
	protected $returnType = 'object';

	protected $validationRules = [
		'name' => 'required',
		'email' => 'required|valid_email',
		'subject' => 'required',
		'message' => 'required'
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
}
