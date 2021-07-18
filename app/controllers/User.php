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
		$this->call->model('record');
	}

	public function add_user()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_add_user');
		} else {
			$this->call->view('dashboard_login'); 
		}	    
	}

	public function manage_useraccount()
	{
		if($this->auth->is_logged_in()){
			$data = $this->record->user_accounts();
			$this->call->view('dashboard_manage_user',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}
	}	

	public function update_user()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_update_user');
		} else {
			$this->call->view('dashboard_login'); 
		}	    
	}		

	public function insert_user()
	{
		if($this->form_validation->submitted())
		{
			if($this->form_validation->run())
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
					redirect('user/add_user');
					exit();				
				}

			// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" )
				{

					$this->session->set_flashdata(array('error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'));				
					$uploadOk = 0;
					redirect('user/add_user');
					exit();			
				}

				if ($uploadOk == 0) 
				{
			// if everything is ok, try to upload file
					$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
					redirect('user/add_user');
					exit();			
				}
				else 
				{

					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
					{
						$this->auth->register(
							$this->io->post('lastname'),
							$this->io->post('firstname'),
							$this->io->post('middlename'),
							$this->io->post('email'),
							$this->io->post('username'),
							$this->io->post('password'),
							$this->io->post('role'),
							basename( $_FILES["fileToUpload"]["name"]));

						$this->session->set_flashdata(array('success' => 'UserData Added Successfully.'));
						redirect('user/manage_useraccount');	
						exit();																											
					}
					else
					{
						$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
						redirect('user/add_user');
						exit();
					}			
				}				
			}
		}

		$this->call->view('dashboard_add_user');
	//End
	}

	public function edit_fetch_user($id)
	{
		if($this->auth->is_logged_in()){
			$data = $this->user->fetch_single_user($id);
			$this->call->view('dashboard_update_user',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}
	}

	public function update_user_data()
	{	
		if ($this->form_validation->submitted()) {
			if ($this->form_validation->run()) {
				// code..
				$this->user->update_useracc(
					$this->io->post('id'),
					$this->io->post('lastname'),
					$this->io->post('firstname'),
					$this->io->post('middlename'),
					$this->io->post('email'),
					$this->io->post('username'),
					$this->io->post('role'),
					$this->io->post('status'));

				$this->session->set_flashdata(array('success' => 'UserData Updated Successfully.'));
				redirect('user/manage_useraccount');	
				exit();
			}
			else
			{
				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
				redirect('user/update_user');
				exit();
			}
		}
		$this->call->view('dashboard_update_user');
	//end	
	}
	public function del_multiuser($id)
	{
		if($this->auth->is_logged_in()){
			$img = $this->record->get_single_userdata($id);
			$pathFile ="/uploads/image/user_pic/";
			$dirto = getcwd();
			$data = $dirto.$pathFile.$img['image'];

			if(!empty($data))
			{
				unlink($data);
			}
			if($this->record->delete_userdata($id))
			{
				$this->session->set_flashdata(array('delete' => 'User Data Deleted Successfully.'));
				redirect('user/manage_useraccount');
				exit();
			}
		} else {
			$this->call->view('dashboard_login_v2'); 
		}     
	}

//.End	
}