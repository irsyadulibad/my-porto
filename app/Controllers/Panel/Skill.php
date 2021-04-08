<?php namespace App\Controllers\Panel;

use App\Models\Skill as SkillModel;
use Irsyadulibad\DataTables\DataTables;

class Skill extends BaseController
{
	public function __construct()
	{
		$this->skill = new SkillModel;
	}

	public function index()
	{
		return view('panel/skill/index');
	}

	public function new()
	{
		$errors = session()->getFlashdata('errors');

		return view('panel/skill/new', compact('errors'));
	}

	public function create()
	{
		$data = $this->request->getPost();

		if($this->skill->save($data)) {
			return redirect()->to('/panel/skill')->with('message', 'Skill has been added');
		}

		return redirect()->back()->withInput()->with('errors', $this->skill->errors());
	}

	public function edit($id = null)
	{
		$skill = $this->skill->findOrFail($id);
		$errors = session()->getFlashdata('errors');

		return view('panel/skill/edit', compact('skill', 'errors'));
	}

	public function update($id = null) {
		$skill = $this->skill->findOrFail($id);
		$data = $this->request->getPost();

		if($this->skill->update($id, $data)) {
			return redirect()->to('/panel/skill')->with('message', 'Skill has been updated');
		}

		return redirect()->back()->withInput()->with('errors', $this->skill->errors());
	}

	public function delete($id = null)
	{
		if($this->skill->delete($id)) {
			return redirect()->back()->with('message', 'Skill has been deleted');
		}

		return redirect()->back()->with('error', 'Failed to delete the skill');
	}

	public function json()
	{
		helper('date');

		return DataTables::use('skills')
			->addColumn('action', function($data) {
				return view('panel/partials/skill/action-button', compact('data'));
			})
			->editColumn('since', function($since) {
				return elapsed_time($since) . ' ago';
			})
			->rawColumns(['action'])
			->make();
	}
}
