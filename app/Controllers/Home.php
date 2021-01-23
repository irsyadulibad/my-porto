<?php namespace App\Controllers;

use App\Models\{Skill, Service, Portfolio, Category, Resume};

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => get_option('site_title') . ' | Portfolio',
			// Chunked Skills
			'skillsC' => model(Skill::class)->getFormatted(),
			'services' => model(Service::class)->findAll(),
			'portfolios' => model(Portfolio::class)->withCategory(),
			'categories' => model(Category::class)->findAll(),
			// Chunked Resume
			'resumeC' => model(Resume::class)->getFormatted()
		];

		return view('home', $data);
	}

	//--------------------------------------------------------------------

}
