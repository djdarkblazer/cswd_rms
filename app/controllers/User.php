<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller
{
	
	public function __construct()
	{
		parent:: __construct();

		// $config = Array(
		// 	'protocol' => 'smtp',
		// 	'smtp_host' => 'smtp.mailtrap.io',
		// 	'smtp_port' => 587,
		// 	'smtp_user' => 'a5b27f29d6c901',
		// 	'smtp_pass' => '54e8232d49b7b4',
		// 	'crlf' => "\r\n",
		// 	'newline' => "\r\n"
		// );
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.mailtrap.io',
			'smtp_port' => 465,
			'smtp_user' => 'a5b27f29d6c901',
			'smtp_pass' => '54e8232d49b7b4',
			'crlf' => "\r\n",
			'newline' => "\r\n"
		);		
		$this->call->library('email', $config);
	}

	public function add_user()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_add_user');
		} else {
			$this->call->view('dashboard_login'); 
		}	    
	}

//.End	
}