<?php namespace App\Controllers\Panel;

use App\Models\About as AboutModel;

class About extends BaseController
{
	public function __construct()
	{
		$this->about = new AboutModel;
		$this->validation = \Config\Services::validation();
	}

	public function index()
	{
		$title = 'About You';

		return view('panel/about/index', compact('title'));
	}

	public function biodata()
	{
		$errors = session()->getFlashdata('errors');

		return view('panel/about/biodata', compact('errors'));
	}

	public function saveBiodata()
	{
		$data = $this->request->getPost();

		if($this->validation->run($data, 'about')) {
			if(put_options($data, 'bio')) {
				return redirect()->back()->with('message', 'Your biodata has been updated');
			}

			return redirect()->back()->with('error', 'Failed to update your biodata');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function general()
	{
		$errors = session()->getFlashdata('errors');

		return view('panel/about/general', compact('errors'));
	}

	public function saveGeneral()
	{
		$data = $this->request->getPost();

		if($this->validation->run($data, 'aboutGeneral')) {
			if(put_options($data, 'general')) {
				return redirect()->back()->with('message', 'Your information has been updated');
			}

			return redirect()->back()->with('error', 'Failed to update your information');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function social()
	{
		$errors = session()->getFlashdata('errors');

		return view('panel/about/social', compact('errors'));
	}

	public function saveSocial()
	{
		$data = $this->request->getPost();

		if($this->validation->run($data, 'aboutSocial')) {
			if(put_options($data, 'social')) {
				return redirect()->back()->with('message', 'Your social information has been updated');
			}

			return redirect()->back()->with('error', 'Failed to update your social information');
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function saveProfile()
	{
		if($this->validate([
			'image' => 'uploaded[image]|max_size[image,3072]|is_image[image]'
		])) {
			$image = $this->request->getFile('image');

			if($this->about->saveProfile($image)) {
				return redirect()->back()->with('message', 'Profile saved successfully');
			}

			return redirect()->back()->with('error', 'Failed to save the profile');
		};

		return redirect()->back()->with('errors', $this->validator->getErrors());
	}
}
