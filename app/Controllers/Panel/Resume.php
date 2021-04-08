<?php namespace App\Controllers\Panel;

use Irsyadulibad\DataTables\DataTables;
use App\Models\Resume as ResumeModel;

class Resume extends BaseController
{
	public function __construct()
	{
		$this->resume = new ResumeModel;
	}

	public function index()
	{
		return view('panel/resume/index');
	}

	public function new()
	{
		$errors = session()->getFlashdata('errors');

		return view('panel/resume/new', compact('errors'));
	}

	public function create()
	{
		$data = $this->request->getPost();

		if($this->resume->save($data)) {
			return redirect()->to('/panel/resume')->with('message', 'New resume has been added');
		}

		return redirect()->back()->withInput()->with('errors', $this->resume->errors());
	}

	public function edit($id)
	{
		$resume = $this->resume->findOrFail($id);
		$errors = session()->getFlashdata('errors');

		return view('panel/resume/edit', compact('resume', 'errors'));
	}

	public function update($id)
	{
		$resume = $this->resume->findOrFail($id);
		$data = $this->request->getPost();

		if($this->resume->update($id, $data)) {
			return redirect()->back()->with('message', 'Resume has been edited');
		} else {
			return redirect()->back()->with('error', 'Resume failed to edit');
		}

		return redirect()->back()->withInput()->with('errors', $this->resume->errors());
	}

	public function delete($id)
	{
		if($this->resume->delete($id)) {
			return redirect()->back()->with('message', 'Resume has been deleted');
		}

		return redirect()->back()->with('error', 'Resume failed to delete');
	}

	public function json()
	{
		return DataTables::use('resume')
			->addColumn('action', function($data) {
				return view('panel/partials/resume/action-button', compact('data'));
			})
			->rawColumns(['action'])
			->make();
	}
}
