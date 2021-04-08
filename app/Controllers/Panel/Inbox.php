<?php namespace App\Controllers\Panel;

use Irsyadulibad\DataTables\DataTables;
use App\Models\Inbox as InboxModel;

class Inbox extends BaseController
{
	public function __construct()
	{
		$this->inbox = new InboxModel;
	}

	public function index()
	{
		return view('panel/inbox/index');
	}

	public function show($id)
	{
		$inbox = $this->inbox->findOrFail($id);

		return view('panel/inbox/show', compact('inbox'));
	}

	public function delete($id)
	{
		if($this->inbox->delete($id)) {
			return redirect()->back()->with('message', 'Message has been deleted');
		}

		return redirect()->back()->with('error', 'Failed to delete the message');
	}

	public function json()
	{
		return DataTables::use('inbox')
			->editColumn('subject', function($subject) {
				return word_limiter($subject, 7, '...');
			})
			->addColumn('action', function($data) {
				return view('panel/partials/inbox/action-button', compact('data'));
			})
			->rawColumns(['action'])
			->make();
	}
}
