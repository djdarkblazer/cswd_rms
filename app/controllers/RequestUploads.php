<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * 
 */
class RequestUploads extends Controller
{
	
	public function __construct()
	{
		// code...
		parent::__construct();
		$this->call->model('uploads');
	}

	public function request_adminfile()
	{
		if($this->auth->is_logged_in()){
			$data = $this->uploads->fetch_request_file();
			$this->call->view('dashboard_upload_user_request',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}    
	}

	public function view_request_adminfile()
	{
		if($this->auth->is_logged_in()){
			$data = $this->uploads->fetch_request_toadmin();
			$this->call->view('dashboard_upload_admin_request',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}    
	}



	public function backupfile_now()
	{
		if($this->form_validation->submitted())
		{
			$target_dir = "uploads/request_file/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));	

			// Check if file already exists
			if (file_exists($target_file))
			{

				$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
				$uploadOk = 0;
				redirect('requestuploads/request_adminfile');
				exit();				
			}

			// Allow certain file formats
			if($FileType != "docx" && $FileType != "xlsx" && $FileType != "pptx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only docx, xlsx, pptx files are allowed.'));				
				$uploadOk = 0;
				redirect('requestuploads/request_adminfile');
				exit();			
			}		

			if ($uploadOk == 0) 
			{
			// if everything is ok, try to upload file
				$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
				redirect('requestuploads/request_adminfile');
				exit();			
			}
			else
			{
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
				{
					$this->uploads->insert_upload(
						$this->io->post('ru_date'),
						$this->io->post('ru_username'),
						$this->io->post('ru_empname'),
						$this->io->post('ru_reqfor'),
						basename( $_FILES["fileToUpload"]["name"]));

					$this->session->set_flashdata(array('success' => 'Request Send Successfully.'));
					redirect('requestuploads/request_adminfile');	
					exit();


				}
				else
				{
					$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
					$this->call->view('dashboard_upload_user_request');
					exit();				
				}			
			}				
		}
		$this->call->view('dashboard_upload_user_request');  
	}

	public function admin_backupfile_now()
	{
		if($this->form_validation->submitted())
		{
			$target_dir = "uploads/request_file/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));	

			// Check if file already exists
			if (file_exists($target_file))
			{

				$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
				$uploadOk = 0;
				redirect('requestuploads/view_request_adminfile');
				exit();				
			}

			// Allow certain file formats
			if($FileType != "docx" && $FileType != "xlsx" && $FileType != "pptx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only docx, xlsx, pptx files are allowed.'));				
				$uploadOk = 0;
				redirect('requestuploads/view_request_adminfile');
				exit();			
			}		

			if ($uploadOk == 0) 
			{
			// if everything is ok, try to upload file
				$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
				redirect('requestuploads/view_request_adminfile');
				exit();			
			}
			else
			{
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
				{
					$this->uploads->insert_upload(
						$this->io->post('ru_date'),
						$this->io->post('ru_username'),
						$this->io->post('ru_empname'),
						$this->io->post('ru_reqfor'),
						basename( $_FILES["fileToUpload"]["name"]));

					$this->session->set_flashdata(array('success' => 'File Uploaded Successfully.'));
					redirect('requestuploads/view_request_adminfile');	
					exit();


				}
				else
				{
					$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
					$this->call->view('dashboard_upload_admin_request');
					exit();				
				}			
			}				
		}
		$this->call->view('dashboard_upload_admin_request');  
	}


	public function delete_reqfile($id)
	{
		$file = $this->uploads->get_single_file($id);
		$pathFile ="/uploads/request_file/";
		$dirto = getcwd();
		$data = $dirto.$pathFile.$file['ru_uploaded'];

		if(!empty($data))
		{
			unlink($data);
		}
		if($this->uploads->delete_reqdata($id))
		{
			$this->session->set_flashdata(array('delete' => 'Data Deleted Successfully.'));
			redirect('requestuploads/request_adminfile');
			exit();
		}
	}

	public function delete_reqfileadmin($id)
	{
		$file = $this->uploads->get_single_file($id);
		$pathFile ="/uploads/request_file/";
		$dirto = getcwd();
		$data = $dirto.$pathFile.$file['ru_uploaded'];

		if(!empty($data))
		{
			unlink($data);
		}
		if($this->uploads->delete_reqdata($id))
		{
			$this->session->set_flashdata(array('delete' => 'Data Deleted Successfully.'));
			redirect('requestuploads/view_request_adminfile');
			exit();
		}
	}





	public function download_reqfile($id)
	{
		$img = $this->uploads->get_single_file($id);
		$pathFile ="/uploads/request_file/";
		$dirto = getcwd();
		$data = $dirto.$pathFile.$img['ru_uploaded'];

		force_download($data,$img['ru_uploaded'],NULL);
	}

	public function edit_fetch_file($id)
	{
		if($this->auth->is_logged_in()){
			$data = $this->uploads->fetch_file_to_admin($id);
			$this->call->view('dashboard_upload_admin_update',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		} 		
	}


	public function admin_updating_file()
	{
		if($this->form_validation->submitted())
		{
			if($this->form_validation->run())
			{
				$target_dir = "uploads/request_file/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));					
			}

			// Allow certain file formats
			if($FileType != "docx" && $FileType != "xlsx" && $FileType != "pptx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only docx, xlsx, pptx files are allowed.'));				
				$uploadOk = 0;
				redirect('requestuploads/view_request_adminfile');
				exit();			
			}		

			if ($uploadOk == 0) 
			{
			// if everything is ok, try to upload file
				$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
				redirect('requestuploads/view_request_adminfile');
				exit();			
			}
			else
			{
			// Check if file already exists
				if(file_exists($target_file))
				{	
					unlink($target_file);
				}
				if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
				{
					$this->uploads->updating_upload(
						$this->io->post('ru_id'),
						$this->io->post('ru_date'),
						$this->io->post('ru_username'),
						$this->io->post('ru_empname'),
						basename( $_FILES["fileToUpload"]["name"]),
						$this->io->post('ru_reqfor'),
						$this->io->post('ru_status'));

					$this->session->set_flashdata(array('success' => 'File Uploaded Successfully.'));
					redirect('requestuploads/view_request_adminfile');	
					exit();
				}
				else
				{
					$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
					$this->call->view('dashboard_upload_admin_update');
					exit();				
				}								
			}			
		}
		$this->call->view('dashboard_upload_admin_update');						
	}

//end
}