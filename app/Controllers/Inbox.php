<?php namespace App\Controllers;

use App\Models\Inbox as InboxModel;
use CodeIgniter\Format\JSONFormatter;

class Inbox extends BaseController
{
	public function __construct()
	{
		$this->inbox = new InboxModel;
		$this->validation = \Config\Services::validation();
	}

	public function save()
	{
		$data = $this->request->getPost();
		$formatter = new JSONFormatter;

		if(!$this->validation->run($data, 'inbox')) {
			$data = [
				'status' => 'validate',
				'errors' => $this->validation->getErrors()
			];
		} else {
			
			if($this->inbox->save($data)) {
				$data = [
					'status' => 'success',
					'message' => 'Your message has been sent, Thank you'
				];
			} else {
				$data = [
					'status' => 'error',
					'message' => 'Oopss...something went wrong, try again'
				];
			}

		}

		$data['csrf'] = [
			'name' => csrf_token(),
			'value' => csrf_hash()
		];
		
		return $formatter->format($data);
	}
}
