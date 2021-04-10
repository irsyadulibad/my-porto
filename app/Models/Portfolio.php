<?php namespace App\Models;

use CodeIgniter\Model;
use App\Models\Category;

class Portfolio extends Model
{
	protected $table = 'portfolios';
	protected $primaryKey = 'id';

	protected $useTimestamps = true;
	protected $allowedFields = ['title', 'slug', 'image', 'content', 'category_id'];

	protected $returnType = 'object';

	public function __construct()
	{
		parent::__construct();
		$this->category = new Category;
	}

	public function findOrFail($id)
	{
		$portfolio = $this->find($id);

		if(!$portfolio) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		} else {
			return $portfolio;
		}
	}
	
	public function findWithSlug($slug)
	{
		$portfolio = $this->where('slug', $slug)->first();

		if(!$portfolio) {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		} else {
			$portfolio->category = $this->category->find($portfolio->category_id);
			return $portfolio;
		}
	}

	public function withCategory($id = null)
	{
		if(is_null($id)) {
			$data = $this->findAll();
			foreach($data as $porto) {
				$porto->category = $this->category->find($porto->category_id);
			}

			return $data;
		} else {
			$data = $this->find($id);
			$data->category = $this->category->find($data->id);

			return $data;
		}
	}
}
