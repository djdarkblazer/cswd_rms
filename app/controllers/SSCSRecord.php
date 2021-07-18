<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * 
 */
class SSCSRecord extends Controller
{
	public function __construct()
	{
		// code...
		parent::__construct();
		$this->call->model('sscs');

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


	public function add_sscs()
	{
		if($this->auth->is_logged_in()){
			// $data = $this->record->retri_records();
			$this->call->view('dashboard_add_sscs');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}	
	}

	public function view_sscs()
	{
		if($this->auth->is_logged_in()){
			$data = $this->sscs->fetch_sscs_data();
			$this->call->view('dashboard_view_sscs',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}	
	}	

	public function add_sscsrecord()
	{
		if($this->form_validation->run())
		{
			$target_dir = "uploads/image/sscs_pic/";
			$target_file1 = $target_dir . basename($_FILES["cs_clinicalabstract"]["name"]);
			$target_file2 = $target_dir . basename($_FILES["cs_clinicalbills"]["name"]);
			$target_file3 = $target_dir . basename($_FILES["cs_medicalinfo"]["name"]);
			$target_file4 = $target_dir . basename($_FILES["cs_requestofscsr"]["name"]);
			$uploadOk = 1;
			$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
			$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
			$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
			$imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
			// Allow certain file formats
			if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
				&& $imageFileType1 != "gif" && $imageFileType1 != "docx" && $imageFileType1 != "pdf" && $imageFileType1 != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only DOCX, PPT, PDF, XLSX, JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('sscsrecord/add_sscs');
				exit();			
			}
			// Allow certain file formats
			if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
				&& $imageFileType2 != "gif" && $imageFileType2 != "docx" && $imageFileType2 != "pdf" && $imageFileType2 != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only DOCX, PPT, PDF, XLSX, JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('sscsrecord/add_sscs');
				exit();			
			}
			// Allow certain file formats
			if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
				&& $imageFileType3 != "gif" && $imageFileType3 != "docx" && $imageFileType3 != "pdf" && $imageFileType3 != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only DOCX, PPT, PDF, XLSX, JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('sscsrecord/add_sscs');
				exit();			
			}
			// Allow certain file formats
			if($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
				&& $imageFileType4 != "gif" && $imageFileType4 != "docx" && $imageFileType4 != "pdf" && $imageFileType4 != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only DOCX, PPT, PDF, XLSX, JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('sscsrecord/add_sscs');
				exit();			
			}
			if ($uploadOk == 0) 
			{
			// if everything is ok, try to upload file
				$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
				redirect('sscsrecord/add_sscs');
				exit();			
			}
			else
			{
				if (file_exists($target_file1) || file_exists($target_file2) || file_exists($target_file3) || file_exists($target_file4))
				{
					$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
					$uploadOk = 0;
					redirect('sscsrecord/add_sscs');
					exit();				
				}
				else
				{
					move_uploaded_file($_FILES["cs_clinicalabstract"]["tmp_name"],$target_file1);
					move_uploaded_file($_FILES["cs_clinicalbills"]["tmp_name"],$target_file2);
					move_uploaded_file($_FILES["cs_medicalinfo"]["tmp_name"],$target_file3);
					move_uploaded_file($_FILES["cs_requestofscsr"]["tmp_name"],$target_file4);

					$this->sscs->insert_sscs(
						$this->io->post('cs_lname'),
						$this->io->post('cs_fname'),
						$this->io->post('cs_mname'),
						$this->io->post('cs_sex'),
						$this->io->post('cs_dob'),
						$this->io->post('cs_pob'),
						$this->io->post('cs_occupation'),
						$this->io->post('cs_estimatedincome'),
						$this->io->post('cs_address'),
						$this->io->post('cs_brgy'),
						$this->io->post('cs_city'),
						$this->io->post('cs_province'),
						$this->io->post('cs_email'),
						$this->io->post('cs_mobilenum'),
						basename( $_FILES["cs_clinicalabstract"]["name"]),
						basename( $_FILES["cs_clinicalbills"]["name"]),
						basename( $_FILES["cs_medicalinfo"]["name"]),
						basename( $_FILES["cs_requestofscsr"]["name"]),
						$this->io->post('cs_requestname'),
						$this->io->post('cs_signature'));

					//SMS Notif and Email Notif
					$email= $this->io->post('cs_email');
					$fullname = $this->io->post('cs_lname');

					$this->send_ureview($email,$fullname);	

					//SMS Sending Information
					$api_user = "TR-CSWDS591291_L6Q7P";
					$api_pass = "9kr{cj(5&m";

					$mynumber = $this->io->post('cs_mobilenum');
					$message = "Mr/Mrs. $fullname,\nYour SSCS Request is Pending from Approval.\n\n-CSWD Office\n";

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
					redirect('sscsrecord/view_sscs');	
					exit();					

				}

				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
				redirect('sscsrecord/add_sscs');
				exit();						
			}
		}
		$this->call->view('dashboard_add_sscs');
	}
	
	public function edit_sscsrecords($id) {
		
		if($this->auth->is_logged_in()){
			$data = $this->sscs->get_single_data($id);
			$this->call->view('dashboard_update_sscs',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}

	public function sscs_delrecords($id)
	{
		$img1 = $this->sscs->get_single_image1($id);
		$img2 = $this->sscs->get_single_image2($id);
		$img3 = $this->sscs->get_single_image3($id);
		$img4 = $this->sscs->get_single_image4($id);
		$pathFile ="/uploads/image/sscs_pic/";
		$dirto = getcwd();

		$data1 = $dirto.$pathFile.$img1['cs_clinicalabstract'];
		$data2 = $dirto.$pathFile.$img2['cs_clinicalbills'];
		$data3 = $dirto.$pathFile.$img3['cs_medicalinfo'];
		$data4 = $dirto.$pathFile.$img4['cs_requestofscsr'];

		echo $data4;

		if(!empty($data1) || !empty($data2) || !empty($data3) || !empty($data4))
		{
			unlink($data1);
			unlink($data2);
			unlink($data3);
			unlink($data4);
		}
		if($this->sscs->delete_data($id))
		{
			$this->session->set_flashdata(array('delete' => 'Client Data Deleted Successfully.'));
			redirect('sscsrecord/view_sscs');
			exit();
		}
	}


	public function pdf_view_sscs($id)
	{
		$data_user = array();
		$data_user['data'] = $this->db->table('form_sscs')->where('cs_id', $id)->get();
		$this->call->view('get_pdfview_sscs',$data_user);				
	}

	public function updating_sscsrecord()
	{
		if($this->form_validation->run())
		{
			$this->sscs->update_sscs(
				$this->io->post('cs_id'),
				$this->io->post('cs_lname'),
				$this->io->post('cs_fname'),
				$this->io->post('cs_mname'),
				$this->io->post('cs_sex'),
				$this->io->post('cs_dob'),
				$this->io->post('cs_pob'),
				$this->io->post('cs_occupation'),
				$this->io->post('cs_estimatedincome'),
				$this->io->post('cs_address'),
				$this->io->post('cs_brgy'),
				$this->io->post('cs_city'),
				$this->io->post('cs_province'),
				$this->io->post('cs_email'),
				$this->io->post('cs_mobilenum'),
				$this->io->post('cs_requestname'),
				$this->io->post('cs_signature'),
				$this->io->post('request_status'));

			$mynumber = $this->io->post('cs_mobilenum');
			$email= $this->io->post('cs_email');
			$fullname = $this->io->post('cs_lname');

			//Email and SMS Notification
			if($this->io->post('request_status') == "Pending")
			{
				//Email Notification
				$this->send_ureview($email,$fullname);

				//SMS Notification
				//SMS Notif Setup

				$message = "Mr & Mrs. $fullname,\nYour SSCS Request Assistance is Pending from Approval.\n\n-CSWD Office\n";
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
				redirect('sscsrecord/view_sscs');	
				exit();					
			}
			else if ($this->io->post('request_status') == "Approved")
			{
				//Email Notification
				$this->send_approved($email,$fullname);

				$message = "Mr/Mrs. $fullname,\nYour SSCS Request is Approved.\n\n-CSWD Office";
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
				redirect('sscsrecord/view_sscs');	
				exit();					
			}
			else if ($this->io->post('request_status') == "Disapproved")
			{
				$dis_msg = $this->io->post('sp_dis_msg');
				$this->send_napproved($email,$fullname,$dis_msg); 

					//SMS Notification
					//iTextMo
				$message = "Mr/Mrs. $fullname,\nYour SSCS Request is Disapproved.\nReason: $dis_msg.\n-CSWD Office\n";
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
				redirect('sscsrecord/view_sscs');	
				exit();															
			}
			else if($this->io->post('request_status') == "Incomplete")
			{
				//Email Notification
				$this->send_incomplete($email,$fullname);

					//SMS Notification
					//iTextMo
				$message = "Mr/Mrs. $varl,\n\nYour SSCS Request is Incomplete.\n-CSWD Office\n";
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
				redirect('sscsrecord/view_sscs');	
				exit();																				
			}

		}
		else
		{
			$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
			redirect('sscsrecord/updating_sscsrecord');
			exit();				
		}
		$this->call->view('dashboard_update_sscs');	
	}


	public function request_sscsrecord()
	{
		if($this->form_validation->run())
		{
			$target_dir = "uploads/image/sscs_pic/";
			$target_file1 = $target_dir . basename($_FILES["cs_clinicalabstract"]["name"]);
			$target_file2 = $target_dir . basename($_FILES["cs_clinicalbills"]["name"]);
			$target_file3 = $target_dir . basename($_FILES["cs_medicalinfo"]["name"]);
			$target_file4 = $target_dir . basename($_FILES["cs_requestofscsr"]["name"]);
			$uploadOk = 1;
			$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
			$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
			$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
			$imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
			// Allow certain file formats
			if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
				&& $imageFileType1 != "gif" && $imageFileType1 != "docx" && $imageFileType1 != "pdf" && $imageFileType1 != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only DOCX, PPT, PDF, XLSX, JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('website/view_req_sscs');
				exit();			
			}
			// Allow certain file formats
			if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
				&& $imageFileType2 != "gif" && $imageFileType2 != "docx" && $imageFileType2 != "pdf" && $imageFileType2 != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only DOCX, PPT, PDF, XLSX, JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('website/view_req_sscs');
				exit();			
			}
			// Allow certain file formats
			if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
				&& $imageFileType3 != "gif" && $imageFileType3 != "docx" && $imageFileType3 != "pdf" && $imageFileType3 != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only DOCX, PPT, PDF, XLSX, JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('website/view_req_sscs');
				exit();			
			}
			// Allow certain file formats
			if($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
				&& $imageFileType4 != "gif" && $imageFileType4 != "docx" && $imageFileType4 != "pdf" && $imageFileType4 != "xlsx")
			{

				$this->session->set_flashdata(array('error' => 'Sorry, only DOCX, PPT, PDF, XLSX, JPG, JPEG, PNG & GIF files are allowed.'));				
				$uploadOk = 0;
				redirect('website/view_req_sscs');
				exit();			
			}
			if ($uploadOk == 0) 
			{
			// if everything is ok, try to upload file
				$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
				redirect('website/view_req_sscs');
				exit();			
			}
			else
			{
				if (file_exists($target_file1) || file_exists($target_file2) || file_exists($target_file3) || file_exists($target_file4))
				{
					$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
					$uploadOk = 0;
					redirect('website/view_req_sscs');
					exit();				
				}
				else
				{
					move_uploaded_file($_FILES["cs_clinicalabstract"]["tmp_name"],$target_file1);
					move_uploaded_file($_FILES["cs_clinicalbills"]["tmp_name"],$target_file2);
					move_uploaded_file($_FILES["cs_medicalinfo"]["tmp_name"],$target_file3);
					move_uploaded_file($_FILES["cs_requestofscsr"]["tmp_name"],$target_file4);

					$this->sscs->insert_sscs(
						$this->io->post('cs_lname'),
						$this->io->post('cs_fname'),
						$this->io->post('cs_mname'),
						$this->io->post('cs_sex'),
						$this->io->post('cs_dob'),
						$this->io->post('cs_pob'),
						$this->io->post('cs_occupation'),
						$this->io->post('cs_estimatedincome'),
						$this->io->post('cs_address'),
						$this->io->post('cs_brgy'),
						$this->io->post('cs_city'),
						$this->io->post('cs_province'),
						$this->io->post('cs_email'),
						$this->io->post('cs_mobilenum'),
						basename( $_FILES["cs_clinicalabstract"]["name"]),
						basename( $_FILES["cs_clinicalbills"]["name"]),
						basename( $_FILES["cs_medicalinfo"]["name"]),
						basename( $_FILES["cs_requestofscsr"]["name"]),
						$this->io->post('cs_requestname'),
						$this->io->post('cs_signature'));

					//SMS Notif and Email Notif
					$email= $this->io->post('cs_email');
					$fullname = $this->io->post('cs_lname');

					$this->send_ureview($email,$fullname);	

					//SMS Sending Information
					$api_user = "TR-CSWDS591291_L6Q7P";
					$api_pass = "9kr{cj(5&m";

					$mynumber = $this->io->post('cs_mobilenum');
					$message = "Mr/Mrs. $fullname,\nYour SSCS Request is Pending from Approval.\n\n-CSWD Office\n";

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
					redirect('website/view_req_sscs');
					$this->session->sess_destroy();	
					exit();					

				}

				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
				redirect('website/view_req_sscs');
				exit();						
			}
		}
		$this->call->view('web_req_sscs');
	}

//end	
}
?>