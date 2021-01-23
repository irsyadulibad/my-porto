<?php namespace App\Models;

use CodeIgniter\Model;

class Option extends Model{
	protected $table = 'options';
	protected $primaryKey = 'id';

	protected $returnType = 'object';
	protected $allowedFields = ['name', 'value'];
	protected $useTimestamps = true;

	public function __construct()
	{
		$db = \Config\Database::connect();
		$this->db = $db->table($this->table);
	}

	public static function getItem($name = null)
	{
		$opt = new self;
		if(is_null($name)) {
			return $opt->db->get()->getResult();
		} else {
			return $opt->getByName($name);
		}
	}

	public static function putItem($name, $value)
	{
		$opt = new self;
		$data = [
			'value' => $value,
			'updated_at' => date('Y-m-d H:i:s')
		];

		$opt->db->update($data, [
			'name' => $name
		]);

		return true;
	}

	public function getByName($name)
	{
		return
			$this->db->getWhere(['name' => $name], 1)->getResult();
	}
}
