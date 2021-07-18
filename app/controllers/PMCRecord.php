<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * 
 */
class PMCRecord extends Controller
{
	
	public function __construct()
	{
		// code...
		parent::__construct();
		$this->call->model('pmc');

		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.mailtrap.io',
			'smtp_port' => 2525,
			'smtp_user' => '8f951b23a6d856',
			'smtp_pass' => '19b2f60bdc371d',
			'crlf' => "\r\n",
			'newline' => "\r\n"
		);		
		$this->call->library('email', $config);		
	}

//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
	public function itexmo($number,$message,$apicode,$passwd){
		$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
		$param = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($itexmo),
			),
		);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
	}
//##########################################################################




	public function viewpmc()
	{
		if($this->auth->is_logged_in()){
			// $data = $this->record->retri_records();
			$this->call->view('dashboard_add_pmc');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}

	public function pmc_viewrecords()
	{
		if($this->auth->is_logged_in()){
			$data = $this->pmc->fetch_pmc_data();
			$this->call->view('dashboard_view_pmc',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}	

	public function add_pmcrecord()
	{
		if($this->form_validation->run())
		{
			$target_dir = "uploads/image/pmc_pic/";
			$target_file = $target_dir . basename($_FILES["Uploadtopmc"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if file already exists
			if (file_exists($target_file))
			{
				$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
				$uploadOk = 0;
				redirect('pmcrecord/viewpmc');
				exit();				
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" && $imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('pmcrecord/viewpmc');
				exit();			
			}
			if ($uploadOk == 0) 
			{
			// if everything is ok, try to upload file
				$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
				redirect('pmcrecord/viewpmc');
				exit();			
			}
			else
			{
				if(move_uploaded_file($_FILES["Uploadtopmc"]["tmp_name"],$target_file))
				{
					$this->pmc->insert_pmc(
						$this->io->post('pmc_lname'),
						$this->io->post('pmc_fname'),
						$this->io->post('pmc_mname'),
						$this->io->post('pmc_sex'),
						$this->io->post('pmc_dob'),
						$this->io->post('pmc_pob'),
						$this->io->post('pmc_occupation'),
						$this->io->post('pmc_estimatedincome'),
						$this->io->post('pmcg_lname'),
						$this->io->post('pmcg_fname'),
						$this->io->post('pmcg_mname'),
						$this->io->post('pmcg_sex'),
						$this->io->post('pmcg_dob'),
						$this->io->post('pmcg_pob'),
						$this->io->post('pmcg_occupation'),
						$this->io->post('pmcg_estimatedincome'),
						$this->io->post('pmc_address'),
						$this->io->post('pmc_brgy'),
						$this->io->post('pmc_city'),
						$this->io->post('pmc_province'),
						$this->io->post('pmc_email'),
						$this->io->post('pmc_mobilenum'),
						basename( $_FILES["Uploadtopmc"]["name"]),
						$this->io->post('pmc_dom'),
						$this->io->post('pmcb_signature'),
						$this->io->post('pmcg_signature'));

					//SMS Notif and Email Notif
					$email= $this->io->post('pmc_email');
					$fullname = $this->io->post('pmcg_lname');

					$this->send_ureview($email,$fullname);

					//SMS Sending Information
					$api_user = "TR-CSWDS591291_L6Q7P";
					$api_pass = "9kr{cj(5&m";

					$mynumber = $this->io->post('pmc_mobilenum');
					$message = "Mr and Mrs. $fullname,\nYour PMC Request is Pending from Approval.\n\n-CSWD Office\n";

					$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
					################################################################
					if($result == "")
					{
						$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
							Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
							Please CONTACT US for help. '));							
					}else if($result == 0)
					{
						echo "Message Sent!";
						$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
					}else
					{	
						$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
					}
					################################################################
					#
					#

					$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
					redirect('pmcrecord/pmc_viewrecords');	
					exit();						

				}
				else
				{
					$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
					redirect('pmcrecord/viewpmc');
					exit();	
				}
			}							
		}
		$this->call->view('dashboard_add_pmc');
	}


	public function updating_pmcrecord()
	{
		if($this->form_validation->run())
		{
			$this->pmc->update_pmc(
				$this->io->post('pmc_id'),
				$this->io->post('pmc_lname'),
				$this->io->post('pmc_fname'),
				$this->io->post('pmc_mname'),
				$this->io->post('pmc_sex'),
				$this->io->post('pmc_dob'),
				$this->io->post('pmc_pob'),
				$this->io->post('pmc_occupation'),
				$this->io->post('pmc_estimatedincome'),
				$this->io->post('pmcg_lname'),
				$this->io->post('pmcg_fname'),
				$this->io->post('pmcg_mname'),
				$this->io->post('pmcg_sex'),
				$this->io->post('pmcg_dob'),
				$this->io->post('pmcg_pob'),
				$this->io->post('pmcg_occupation'),
				$this->io->post('pmcg_estimatedincome'),
				$this->io->post('pmc_address'),
				$this->io->post('pmc_brgy'),
				$this->io->post('pmc_city'),
				$this->io->post('pmc_province'),
				$this->io->post('pmc_email'),
				$this->io->post('pmc_mobilenum'),
				$this->io->post('pmc_dom'),
				$this->io->post('pmcb_signature'),
				$this->io->post('pmcg_signature'),
				$this->io->post('request_status'),
				$this->io->post('schedule_status')
			);

			$mynumber = $this->io->post('pmc_mobilenum');
			$email= $this->io->post('pmc_email');
			$fullname = $this->io->post('pmcg_lname');

			//Email and SMS Notification
			if($this->io->post('request_status') == "Pending")
			{
				//Email Notification
				$this->send_ureview($email,$fullname);

				//SMS Notification
				//SMS Notif Setup

				$message = "Mr & Mrs. $fullname,\nYour PMC Request Assistance is Pending from Approval.\n\n-CSWD Office\n";
					//
					//SMS Sending Information
				$api_user = "TR-CSWDS591291_L6Q7P";
				$api_pass = "9kr{cj(5&m";

				$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
				if($result == "")
				{
					$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
						Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
						Please CONTACT US for help. '));							
				}else if($result == 0)
				{
					echo "Message Sent!";
					$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
				}else
				{	
					$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
				}
					//./SMS End

				$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
				redirect('pmcrecord/pmc_viewrecords');	
				exit();					
			}
			else if ($this->io->post('request_status') == "Approved")
			{
				//Email Notification
				$this->send_approved($email,$fullname);

				$message = "Mr & Mrs. $fullname,\nYour PMC Request is Approved.\n\n-CSWD Office";
				$api_user = "TR-CSWDS591291_L6Q7P";
				$api_pass = "9kr{cj(5&m";

				$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
				if($result == "")
				{
					$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
						Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
						Please CONTACT US for help. '));							
				}else if($result == 0)
				{
					echo "Message Sent!";
					$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
				}else
				{	
					$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
				}
					//./SMS End

				$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
				redirect('pmcrecord/pmc_viewrecords');	
				exit();					
			}
			else if ($this->io->post('request_status') == "Disapproved")
			{
				$dis_msg = $this->io->post('sp_dis_msg');
				$this->send_napproved($email,$fullname,$dis_msg); 

					//SMS Notification
					//iTextMo
				$message = "Mr & Mrs. $fullname,\nYour Request is Disapproved.\nReason: $dis_msg.\n-CSWD Office\n";
				$api_user = "TR-CSWDS591291_L6Q7P";
				$api_pass = "9kr{cj(5&m";

				$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
				if($result == "")
				{
					$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
						Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
						Please CONTACT US for help. '));							
				}else if($result == 0)
				{
					echo "Message Sent!";
					$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
				}else
				{	
					$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
				}
					//./SMS End

				$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
				redirect('pmcrecord/pmc_viewrecords');	
				exit();															
			}
			else if($this->io->post('request_status') == "Incomplete")
			{
				//Email Notification
				$this->send_incomplete($email,$fullname);

					//SMS Notification
					//iTextMo
				$message = "Mr & Mrs. $varl,\n\nYour PMC Request is Incomplete.\n-CSWD Office\n";
				$api_user = "TR-CSWDS591291_L6Q7P";
				$api_pass = "9kr{cj(5&m";

				$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
				if($result == "")
				{
					$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
						Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
						Please CONTACT US for help. '));							
				}else if($result == 0)
				{
					echo "Message Sent!";
					$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
				}else
				{	
					$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
				}
					//./SMS End

				$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
				redirect('pmcrecord/pmc_viewrecords');	
				exit();																				
			}

		}
		else
		{
			$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
			redirect('pmcrecord/viewpmc');
			exit();			
		}
		$this->call->view('dashboard_update_pmc');
	}

	public function pdf_view_pmc($id)
	{
		$data_user = array();
		$data_user['data'] = $this->db->table('form_pmc')->where('pmc_id', $id)->get();
		$this->call->view('get_pdfview_pmc',$data_user);				
	}



	public function edit_pmcrecords($id) {
		
		if($this->auth->is_logged_in()){
			$data = $this->pmc->get_single_data($id);
			$this->call->view('dashboard_update_pmc',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}

	public function pmc_delrecords($id)
	{
		$img = $this->pmc->get_single_image($id);
		$pathFile ="/uploads/image/pmc_pic/";
		$dirto = getcwd();
		$data = $dirto.$pathFile.$img['pmc_aomimage'];

		if(!empty($data))
		{
			unlink($data);
		}
		if($this->pmc->delete_data($id))
		{
			$this->session->set_flashdata(array('delete' => 'Client Data Deleted Successfully.'));
			redirect('pmcrecord/pmc_viewrecords');
			exit();
		}
	}


	//Email Automation Test
	public function send_ureview($recipient,$fullname)
	{
		$this->email->subject('Calapan City Social Welfare and Development');
		$this->email->sender('deejaydarkblazer@gmail.com');

		//Create and Send HTML Mail
		$message = "
		<html>
		<head>
		<title>REQUEST INFORMATION</title>
		</head>
		<body>
		<center>
		<h2>REQUEST INFORMATION</h2>
		<h3>Hi Mr/Mrs. $fullname ,</h3>
		<br>
		<p><b>Your Request Assistance from CSWD is Pending from Approval.</b></p></br>
		<p>Please go to the Main Office for futher information regarding on your request.</p>
		<br>
		<br>
		<h6>&copy <?= date('Y'); ?> Calapan City Social Welfare and Development. All rights reserved</h6>
		</center>
		</body>
		</html>";
		$this->email->email_content($message, 'html');
		$this->email->recipient($recipient);

		if($this->email->send()){
			return true;
		} 
	}

	public function send_incomplete($recipient,$fullname)
	{
		$this->email->subject('Calapan City Social Welfare and Development');
		$this->email->sender('deejaydarkblazer@gmail.com');
		$content = "<html>
		<head>
		<title>REQUEST INFORMATION</title>
		</head>
		<body>
		<center>
		<h2>REQUEST INFORMATION</h2>
		<h3>Hi Mr/Mrs. $fullname ,</h3>
		<br>
		<p><b>Your Request Assistance from CSWD is Disapproved due to Incomplete Requirements.</b></p></br>
		<p>Please go to the Main Office for futher information regarding on your request.</p>
		<br>
		<br>
		<h6>&copy <?= date('Y'); ?> Calapan City Social Welfare and Development. All rights reserved</h6>
		</center>
		</body>
		</html>";
		$this->email->email_content($content, 'html');
		$this->email->recipient($recipient);

		if($this->email->send()){
			return true;
		} 
	}		

	public function send_napproved($recipient,$fullname,$msg)
	{
		$this->email->subject('Calapan City Social Welfare and Development');
		$this->email->sender('deejaydarkblazer@gmail.com');
		$content = "<html>
		<head>
		<title>REQUEST INFORMATION</title>
		</head>
		<body>
		<center>
		<h2>REQUEST INFORMATION</h2>
		<h3>Hi Mr/Mrs. $fullname ,</h3>
		<br>			
		<p><b>Your Request Assistance from CSWD is Disapproved because of $msg.</b></p></br>
		<p>Please go to the Main Office for futher information regarding on your request.</p>
		<br>
		<br>
		<h6>&copy <?= date('Y'); ?> Calapan City Social Welfare and Development. All rights reserved</h6>
		</center>
		</body>
		</html>";
		$this->email->email_content($content, 'html');
		$this->email->recipient($recipient);

		if($this->email->send()){
			return true;
		} 
	}
	public function send_approved($recipient,$fullname)
	{
		$this->email->subject('Calapan City Social Welfare and Development');
		$this->email->sender('deejaydarkblazer@gmail.com');
		$content = "<html>
		<head>
		<title>REQUEST INFORMATION</title>
		</head>
		<body>
		<center>
		<h2>REQUEST INFORMATION</h2>
		<h3>Hi Mr/Mrs. $fullname ,</h3>
		<br>			
		<p><b>Your Request Assistance from CSWD has been Approved.</b></p></br>
		<p>Please go to the Main Office for futher information regarding on your request.</p>
		<br>
		<br>
		<h6>&copy <?= date('Y'); ?> Calapan City Social Welfare and Development. All rights reserved</h6>
		</center>
		</body>
		</html>";
		$this->email->email_content($content, 'html');
		$this->email->recipient($recipient);

		if($this->email->send()){
			return true;
		} 
	}

	public function request_pmcrecord()
	{
		if($this->form_validation->run())
		{
			$target_dir = "uploads/image/pmc_pic/";
			$target_file = $target_dir . basename($_FILES["Uploadtopmc"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if file already exists
			if (file_exists($target_file))
			{
				$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
				$uploadOk = 0;
				redirect('webiste/view_req_pmc');
				exit();				
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" && $imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('webiste/view_req_pmc');
				exit();			
			}
			if ($uploadOk == 0) 
			{
			// if everything is ok, try to upload file
				$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
				redirect('webiste/view_req_pmc');
				exit();			
			}
			else
			{
				if(move_uploaded_file($_FILES["Uploadtopmc"]["tmp_name"],$target_file))
				{
					$this->pmc->insert_pmc(
						$this->io->post('pmc_lname'),
						$this->io->post('pmc_fname'),
						$this->io->post('pmc_mname'),
						$this->io->post('pmc_sex'),
						$this->io->post('pmc_dob'),
						$this->io->post('pmc_pob'),
						$this->io->post('pmc_occupation'),
						$this->io->post('pmc_estimatedincome'),
						$this->io->post('pmcg_lname'),
						$this->io->post('pmcg_fname'),
						$this->io->post('pmcg_mname'),
						$this->io->post('pmcg_sex'),
						$this->io->post('pmcg_dob'),
						$this->io->post('pmcg_pob'),
						$this->io->post('pmcg_occupation'),
						$this->io->post('pmcg_estimatedincome'),
						$this->io->post('pmc_address'),
						$this->io->post('pmc_brgy'),
						$this->io->post('pmc_city'),
						$this->io->post('pmc_province'),
						$this->io->post('pmc_email'),
						$this->io->post('pmc_mobilenum'),
						basename( $_FILES["Uploadtopmc"]["name"]),
						$this->io->post('pmc_dom'),
						$this->io->post('pmcb_signature'),
						$this->io->post('pmcg_signature'));

					//SMS Notif and Email Notif
					$email= $this->io->post('pmc_email');
					$fullname = $this->io->post('pmcg_lname');

					$this->send_ureview($email,$fullname);

					//SMS Sending Information
					$api_user = "TR-CSWDS591291_L6Q7P";
					$api_pass = "9kr{cj(5&m";

					$mynumber = $this->io->post('pmc_mobilenum');
					$message = "Mr and Mrs. $fullname,\nYour PMC Request is Pending from Approval.\n\n-CSWD Office\n";

					$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
					################################################################
					if($result == "")
					{
						$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
							Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
							Please CONTACT US for help. '));							
					}else if($result == 0)
					{
						echo "Message Sent!";
						$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
					}else
					{	
						$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
					}
					################################################################
					#
					#

					$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
					redirect('webiste/view_req_pmc');
					exit();						

				}
				else
				{
					$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
					redirect('webiste/view_req_pmc');
					$this->session->sess_destroy();
					exit();	
				}
			}							
		}
		$this->call->view('web_req_pmc');
	}



}
?>