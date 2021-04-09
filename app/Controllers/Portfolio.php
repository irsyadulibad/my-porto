<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Portfolio as PortfolioModel;

class Portfolio extends BaseController
{
	public function __construct()
	{
		$this->portfolio = new PortfolioModel;
	}
	
	public function detail($slug)
	{
		$portfolio = $this->portfolio->findWithSlug($slug);
		$title = $portfolio->title;
		
		return view('portfolio', compact('portfolio', 'title'));
	}
}
