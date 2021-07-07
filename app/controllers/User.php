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

		$this->call->model('user');
	}

	public function add_user()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_add_user');
		} else {
			$this->call->view('dashboard_login'); 
		}	    
	}

	public function insert_user()
	{
		$target_dir = "uploads/image/user_pic/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if file already exists
		if (file_exists($target_file))
		{

			$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
			$uploadOk = 0;
			redirect('admin/add_user');
			exit();				
		}

			// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" )
		{

			$this->session->set_flashdata(array('error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'));				
			$uploadOk = 0;
			redirect('admin/add_user');
			exit();			
		}

		if ($uploadOk == 0) 
		{
			// if everything is ok, try to upload file
			$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
			redirect('admin/add_user');
			exit();			
		}
		else 
		{

			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
			{
				$this->user->create_user(
					$this->io->post('lastname'),
					$this->io->post('firstname'),
					$this->io->post('middle'),
					$this->io->post('username'),
					$this->io->post('password'),
					$this->io->post('role'),
					basename( $_FILES["fileToUpload"]["name"]));

				$this->session->set_flashdata(array('success' => 'UserData Added Successfully.'));
				redirect('admin/add_user');	
				exit();																											
			}
			else
			{
				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
				redirect('admin/add_user');
				exit();
			}			
		}
		$this->call->view('dashboard_add_user');
	//End
	}


//.End	
}