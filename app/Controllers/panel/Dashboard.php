<?php namespace App\Controllers\Panel;


class Dashboard extends BaseController
{
	public function index()
	{
		return view('panel/dashboard');
	}
}
