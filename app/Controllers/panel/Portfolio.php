<?php namespace App\Controllers\Panel;

use App\Models\{Category, Portfolio as PortfolioModel};
use Irsyadulibad\DataTables\DataTables;

class Portfolio extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->category = new Category;
		$this->portfolio = new PortfolioModel;
		$this->validation = \Config\Services::validation();
	}

	public function index()
	{
		return view('panel/portfolio/index');
	}

	public function new()
	{
		$data = [
			'cats' => $this->category->findAll(),
			'errors' => session()->getFlashdata('errors')
		];

		return view('panel/portfolio/new', $data);
	}

	public function create()
	{
		$data = $this->request->getPost();
		$data['slug'] = $this->getSlug($data['title']);

		if($this->validation->run($data, 'portfolio')) {
			$getImage = $this->getImage();

			// Check if image is valid
			if($getImage['status'] == true) {
				$data['image'] = $getImage['name'];
			} else {
				return redirect()->back()->withInput()->with('errors', $getImage['errors']);
			}

			if($this->portfolio->save($data)) {
				return redirect()->to('/panel/portfolio')->with('message', 'New portfolio has been added');
			}

			return redirect()->back()->with('error', 'Fail to added new portfolio');
		}

		return redirect()->back()->withInput()->with('errors', $this->portfolio->errors());
	}

	public function edit($id)
	{
		$porto = $this->portfolio->findOrFail($id);
		$errors = session()->getFlashdata('errors');
		$cats = $this->category->findAll();

		return view('panel/portfolio/edit', compact('porto', 'errors', 'cats'));
	}

	public function update($id)
	{
		$porto = $this->portfolio->findOrFail($id);
		$data = $this->request->getPost();

		if($this->validation->run($data, 'portfolio')) {
			$getImage = $this->getImage($porto);

			// Check if image is valid
			if($getImage['status'] == true) {
				$data['image'] = $getImage['name'];
			} else {
				return redirect()->back()->withInput()->with('errors', $getImage['errors']);
			}
	
			if($this->portfolio->update($id, $data)) {
				return redirect()->back()->with('message', 'Portfolio has been edited');
			}

			return redirect()->back()->with('error', 'Fail to edit portfolio');
		}

		return redirect()->back()->withInput()->with('errors', $this->portfolio->errors());
	}

	public function delete($id)
	{
		if($this->portfolio->delete($id)) {
			return redirect()->back()->with('message', 'Portfolio has been deleted');
		}

		return redirect()->back()->with('error', 'Failed to delete the portfolio');
	}

	public function json()
	{
		return DataTables::use('portfolios')
			->join('categories', 'categories.id = portfolios.category_id')
			->select('portfolios.id, categories.name as category, title, portfolios.slug as pslug')
			->addColumn('action', function($data) {
				return view('panel/partials/portfolio/action-button', compact('data'));
			})
			->editColumn('pslug', function($slug) {
				return "<a href='/portfolio/$slug'>$slug</a>";
			})
			->editColumn('category', function($category) {
				return "<a href='/portfolio/category/$category'>$category</a>";
			})
			->rawColumns(['pslug', 'category', 'action'])
			->make();
	}

	private function getSlug($title)
	{
		$slug = url_title($title, '-', true);
		$exist = $this->portfolio->where('slug', $slug)
			->first();
		
		if(!is_null($exist)) {
			$slug = $slug . '-' . time();
		}

		return $slug;
	}

	private function getImage($data = null)
	{
		if($this->validate([
			'image' => 'uploaded[image]|max_size[image,5120]|is_image[image]'
		])) {
			$image = $this->request->getFile('image');
			$name = $image->getRandomName();
			$image->move(FCPATH.'assets/img/portfolio', $name);

			if(!is_null($data)) {
				@unlink(FCPATH.'assets/img/portfolio/'.$data->image);
			}

			return [
				'status' => true,
				'name' => $name
			];
		}

		if(!is_null($data)) {
			return [
				'status' => true,
				'name' => $data->image
			];
		}

		return [
			'status' => false,
			'errors' => $this->validator->getErrors()
		];
	}
}
