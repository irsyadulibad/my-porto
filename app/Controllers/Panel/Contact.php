<?php namespace App\Controllers\Panel;

use App\Models\Option;

class Contact extends BaseController
{
	public function index()
	{
		$title = 'Contact Information';
		$errors = session()->getFlashdata('errors');

		return view('panel/contact', compact('title', 'errors'));
	}

	public function store()
	{
		$data = $this->request->getPost();

		if($this->validation->run($data, 'contact')) {
			$data = [
				'address' => $this->getPost('address'),
				'email' => $this->getPost('email'),
				'phone' => $this->getPost('phone')
			];

			if(put_options($data, 'contact')) {
				return redirect()->back()->with('message', 'Contact has been updated');
			}

			return redirect()->back()->withInput()->with('error', 'Contact failed to update');
		}
		
		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}
}
