<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
		\Myth\Auth\Authentication\Passwords\ValidationRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $contact = [
		'address' => 'required',
		'email' => 'required|valid_email',
		'phone' => 'required|decimal'
	];

	public $about = [
		'website' => 'required',
		'phone' => 'required|decimal',
		'email' => 'required|valid_email',
		'city' => 'required',
		'description' => 'required',
		'born' => 'required|valid_date[Y-m-d]',
		'freelance' => 'required|in_list[Available,Unavailable]',
	];

	public $aboutGeneral = [
		'name' => 'required',
		'jobs' => 'required',
		'job_description' => 'required'
	];

	public $aboutSocial = [
		'facebook' => 'required|alpha_numeric_punct',
	];

	public $portfolio = [
		'title' => 'required',
		'content' => 'required',
		'category_id' => 'required',
	];

	public $settings = [
		'title' => 'required',
		'keywords' => 'required',
		'description' => 'required'
	];

	public $inbox = [
		'name' => 'required',
		'email' => 'required|valid_email',
		'subject' => 'required|min_length[8]',
		'message' => 'required'
	];
	
	public $changePassword = [
		'password' => 'required',
		'new-password' => 'required',
		'confirm-password' => 'required|matches[new-password]'
	];
}
