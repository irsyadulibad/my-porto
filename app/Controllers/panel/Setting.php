<?php namespace App\Controllers\Panel;

class Setting extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
	}

	public function index()
	{
		return view('panel/setting/index');
	}

	public function general()
	{
		$errors = session()->getFlashdata('errors');

		return view('panel/setting/general', compact('errors'));
	}

	public function saveGeneral()
	{
		$data = $this->request->getPost();

		if($this->validation->run($data, 'settings')) {
			$hero = $this->getHeroImage();

			if($hero['status'] == true) {
				$data['hero'] = $hero['name'];

				put_options($data, 'site');
				return redirect()->back()->with('message', 'Settings has been updated');
			}

			return redirect()->back()->withInput()->with('errors', $hero['errors']);
		}

		return redirect()->back()->withInput()->with('errors', $this->validation->getErrors());
	}

	public function page()
	{
		$errors = session()->getFlashdata('errors');

		return view('panel/setting/page', compact('errors'));
	}

	public function savePage()
	{
		$data = $this->request->getPost();

		if(put_options($data, 'site_desc')) {
			return redirect()->back()->with('message', 'Settings has been saved');
		}

		return redirect()->back()->with('error', 'Failed to update the settings');
	}

	private function getHeroImage()
	{
		$oldHero = get_option('site_hero');
		$newHero = $this->request->getFile('hero');

		if($this->validate([
			'hero' => 'uploaded[hero]|max_size[hero,5120]|is_image[hero]'
		])) {
			$name = $newHero->getRandomName();
			$newHero->move(FCPATH.'assets/img', $name);

			@unlink(FCPATH.'assets/img/'.$oldHero);

			return [
				'status' => true,
				'name' => $name
			];
		}

		if($newHero->getSize() < 1) {
			return [
				'status' => true,
				'name' => $oldHero
			];
		}

		return [
			'status' => false,
			'errors' => $this->validator->getErrors()
		];
	}
}
