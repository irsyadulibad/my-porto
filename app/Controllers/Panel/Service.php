<?php namespace App\Controllers\Panel;

use App\Models\Service as ServiceModel;
use Irsyadulibad\DataTables\DataTables;

class Service extends BaseController
{
	public function __construct()
	{
		$this->service = new ServiceModel;
	}

	public function index()
	{
		return view('panel/service/index');
	}

	public function new()
	{
		$errors = session()->getFlashdata('errors');

		return view('panel/service/new', compact('errors'));
	}

	public function create()
	{
		$data = $this->request->getPost();

		if($this->service->insert($data)) {
			return redirect()->to('/panel/service')->with('message', 'New service has been added');
		}

		session()->setFlashdata('errors', $this->service->errors());
		return redirect()->back()->withInput();
	}

	public function edit($id = null)
	{
		$service = $this->service->findOrFail($id);
		$errors = session()->getFlashdata('errors');

		return view('panel/service/edit', compact('service', 'errors'));
	}

	public function update($id = null)
	{
		$service = $this->service->findOrFail($id);
		$data = $this->request->getPost();

		if($this->service->update($id, $data)) {
			return redirect()->to('/panel/service')->with('message', 'Service has been updated');
		}

		return redirect()->back()->withInput()->with('errors', $this->service->errors());
	}

	public function delete($id = null)
	{
		if($this->service->delete($id)) {
			return redirect()->back()->with('message', 'Service has been deleted');
		}

		return redirect()->back()->with('error', 'Failed to delete the service');
	}

	public function json()
	{
		return DataTables::use('services')
			->addColumn('action', function($data) {
				return view('panel/partials/service/action-button', compact('data'));
			})
			->editColumn('icon', function($icon) {
				return "<span class='bx bx-{$icon}'></span>";
			})
			->editColumn('description', function($desc) {
				return word_limiter($desc, 10, '...');
			})
			->rawColumns(['icon', 'action'])
			->make();
	}
}
