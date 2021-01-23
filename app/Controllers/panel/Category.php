<?php namespace App\Controllers\Panel;

use Irsyadulibad\DataTables\DataTables;
use App\Models\Category as CategoryModel;

class Category extends BaseController
{
	public function __construct()
	{
		$this->category = new CategoryModel;
	}

	public function index()
	{
		$errors = session()->getFlashdata('errors');

		return view('panel/category/index', compact('errors'));
	}

	public function create()
	{
		$data = $this->request->getPost();
		$data['slug'] = url_title($data['name'], '-', true);

		if($this->category->save($data)) {
			return redirect()->back()->with('message', 'Category has been saved');
		}

		return redirect()->back()->withInput()->with('errors', $this->category->errors());
	}

	public function json()
	{
		return DataTables::use('categories')
			->addColumn('action', function($data) {
				return view('panel/partials/category/action-button', compact('data'));
			})
			->rawColumns(['action'])
			->make(true);
	}
}
