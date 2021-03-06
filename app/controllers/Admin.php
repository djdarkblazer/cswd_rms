<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {

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

	public function index()
	{
		if($this->auth->is_logged_in()){
			//Solo Parent Total Count Row
			$sp_row=$this->record->count_sp();
			$sp_pending=$this->record->count_sp_pending();
			$sp_approved=$this->record->count_sp_approved();
			$sp_napproved=$this->record->count_sp_napproved();
			$sp_incomplete=$this->record->count_sp_incomplete();

			//PWD Total Count Row
			$pwd_row=$this->record->count_pwd();
			$pwd_pending=$this->record->count_pwd_pending();
			$pwd_approved=$this->record->count_pwd_approved();
			$pwd_napproved=$this->record->count_pwd_napproved();
			$pwd_incomplete=$this->record->count_pwd_incomplete();			


			$data = array('total' => $sp_row+$pwd_row, 'pending' => $sp_pending+$pwd_pending, 'approved' => $sp_approved+$pwd_approved, 'napproved' => $sp_napproved+$pwd_napproved, 'incomplete' => $sp_incomplete+$pwd_incomplete);

			$this->call->view('dashboard_main',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}
	}




	public function sp_addrecords()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_add_sp');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}
	}

	public function sp_updaterecords()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_update_sp');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}
	}	

	public function sp_viewrecords()
	{
		if($this->auth->is_logged_in()){
			$data = $this->record->retri_records();
			$this->call->view('dashboard_view_sp',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}
	}

	

	public function sp_delrecords($id)
	{
		$img = $this->record->get_single_image($id);
		$pathFile ="/uploads/image/sp_idpic/";
		$dirto = getcwd();
		$data = $dirto.$pathFile.$img['image'];

		if(!empty($data))
		{
			unlink($data);
		}
		if($this->record->delete_data($id))
		{
			$this->session->set_flashdata(array('delete' => 'Client Data Deleted Successfully.'));
			redirect('admin/sp_viewrecords');
			exit();
		}
	}

	public function edit_records($id) {
		
		if($this->auth->is_logged_in()){
			$data = $this->record->get_single_data($id);
			$this->call->view('dashboard_update_sp',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}				


	//Adding Records
	public function sp_insert()
	{
		if($this->form_validation->submitted())
		{
			if($this->form_validation->run())
			{
				$target_dir = "uploads/image/sp_idpic/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if file already exists
				if (file_exists($target_file))
				{
					$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
					$uploadOk = 0;
					redirect('admin/sp_addrecords');
					exit();				
				}
			// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) 
				{

					$this->session->set_flashdata(array('error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'));				
					$uploadOk = 0;
					redirect('admin/sp_addrecords');
					exit();			
				}

				if ($uploadOk == 0) 
				{
			// if everything is ok, try to upload file
					$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
					redirect('admin/sp_addrecords');
					exit();			
				}
				else
				{
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
					{
						$this->record->insert_sprecord(
							$this->io->post('sp_lastname'),
							$this->io->post('sp_firstname'),
							$this->io->post('sp_middlename'),
							$this->io->post('sp_age'),
							$this->io->post('sp_sex'),
							$this->io->post('sp_dob'),
							$this->io->post('sp_pob'),
							$this->io->post('sp_address'),
							$this->io->post('sp_brgy'),
							$this->io->post('sp_city'),
							$this->io->post('sp_province'),
							$this->io->post('sp_email'),
							$this->io->post('sp_mobilenum'),
							$this->io->post('sp_educational'),
							$this->io->post('sp_occupation'),
							$this->io->post('sp_monthlyincome'),
							$this->io->post('spfc_fullname'),
							$this->io->post('spfc_relationship'),
							$this->io->post('spfc_age'),
							$this->io->post('spfc_status'),
							$this->io->post('spfc_dob'),
							$this->io->post('spfc_educational'),
							$this->io->post('spfc_occupation'),
							$this->io->post('spfc_monthlyincome'),
							$this->io->post('spfc_fullname_two'),
							$this->io->post('spfc_relationship_two'),
							$this->io->post('spfc_age_two'),
							$this->io->post('spfc_status_two'),
							$this->io->post('spfc_dob_two'),
							$this->io->post('spfc_educational_two'),
							$this->io->post('spfc_occupation_two'),
							$this->io->post('spfc_monthlyincome_two'),
							$this->io->post('spfc_fullname_three'),
							$this->io->post('spfc_relationship_three'),
							$this->io->post('spfc_age_three'),
							$this->io->post('spfc_status_three'),
							$this->io->post('spfc_dob_three'),
							$this->io->post('spfc_educational_three'),
							$this->io->post('spfc_occupation_three'),
							$this->io->post('spfc_monthlyincome_three'),
							$this->io->post('spfc_fullname_four'),
							$this->io->post('spfc_relationship_four'),
							$this->io->post('spfc_age_four'),
							$this->io->post('spfc_status_four'),
							$this->io->post('spfc_dob_four'),
							$this->io->post('spfc_educational_four'),
							$this->io->post('spfc_occupation_four'),
							$this->io->post('spfc_monthlyincome_four'),	
							$this->io->post('spfc_fullname_five'),
							$this->io->post('spfc_relationship_five'),
							$this->io->post('spfc_age_five'),
							$this->io->post('spfc_status_five'),
							$this->io->post('spfc_dob_five'),
							$this->io->post('spfc_educational_five'),
							$this->io->post('spfc_occupation_five'),
							$this->io->post('spfc_monthlyincome_five'),
							$this->io->post('sp_curr_status'),
							$this->io->post('sp_circumstances'),
							$this->io->post('sp_problems'),
							$this->io->post('sp_family_resources'),
							$this->io->post('curr_date'),
							$this->io->post('sp_signature'),					
							basename( $_FILES["fileToUpload"]["name"]));

					//Notifications Here
						$email= $this->io->post('sp_email');
						$varf = $this->io->post('sp_firstname');
						$varm = $this->io->post('sp_middlename');
						$varl = $this->io->post('sp_lastname');
						$fullname = "$varf $varm $varl";

					//Send Email Notif Here
						$this->send_ureview($email,$fullname);

					//SMS Notif Setup
						$mynumber = $this->io->post('sp_mobilenum');
						$message = "Mr/Mrs. $varl,\nYour Request Assistance is Pending from Approval.\n\n-CSWD Office\n";

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
						redirect('admin/sp_viewrecords');	
						exit();						
					}
					else
					{
						$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
						redirect('admin/sp_addrecords');
						exit();					
					}					
				}						
			}
		}
		//End
		$this->call->view('dashboard_add_sp');
	}

	//Updating Records
	public function spdata_update()
	{
		if ($this->form_validation->submitted())
		{
			if($this->form_validation->run())
			{
				$this->record->update_sprecord(
					$this->io->post('sp_id'),
					$this->io->post('sp_lastname'),
					$this->io->post('sp_firstname'),
					$this->io->post('sp_middlename'),
					$this->io->post('sp_age'),
					$this->io->post('sp_sex'),
					$this->io->post('sp_dob'),
					$this->io->post('sp_pob'),
					$this->io->post('sp_address'),
					$this->io->post('sp_brgy'),
					$this->io->post('sp_city'),
					$this->io->post('sp_province'),
					$this->io->post('sp_email'),
					$this->io->post('sp_mobilenum'),
					$this->io->post('sp_educational'),
					$this->io->post('sp_occupation'),
					$this->io->post('sp_monthlyincome'),
					$this->io->post('spfc_fullname'),
					$this->io->post('spfc_relationship'),
					$this->io->post('spfc_age'),
					$this->io->post('spfc_status'),
					$this->io->post('spfc_dob'),
					$this->io->post('spfc_educational'),
					$this->io->post('spfc_occupation'),
					$this->io->post('spfc_monthlyincome'),
					$this->io->post('spfc_fullname_two'),
					$this->io->post('spfc_relationship_two'),
					$this->io->post('spfc_age_two'),
					$this->io->post('spfc_status_two'),
					$this->io->post('spfc_dob_two'),
					$this->io->post('spfc_educational_two'),
					$this->io->post('spfc_occupation_two'),
					$this->io->post('spfc_monthlyincome_two'),
					$this->io->post('spfc_fullname_three'),
					$this->io->post('spfc_relationship_three'),
					$this->io->post('spfc_age_three'),
					$this->io->post('spfc_status_three'),
					$this->io->post('spfc_dob_three'),
					$this->io->post('spfc_educational_three'),
					$this->io->post('spfc_occupation_three'),
					$this->io->post('spfc_monthlyincome_three'),
					$this->io->post('spfc_fullname_four'),
					$this->io->post('spfc_relationship_four'),
					$this->io->post('spfc_age_four'),
					$this->io->post('spfc_status_four'),
					$this->io->post('spfc_dob_four'),
					$this->io->post('spfc_educational_four'),
					$this->io->post('spfc_occupation_four'),
					$this->io->post('spfc_monthlyincome_four'),	
					$this->io->post('spfc_fullname_five'),
					$this->io->post('spfc_relationship_five'),
					$this->io->post('spfc_age_five'),
					$this->io->post('spfc_status_five'),
					$this->io->post('spfc_dob_five'),
					$this->io->post('spfc_educational_five'),
					$this->io->post('spfc_occupation_five'),
					$this->io->post('spfc_monthlyincome_five'),
					$this->io->post('sp_curr_status'),
					$this->io->post('sp_circumstances'),
					$this->io->post('sp_problems'),
					$this->io->post('sp_family_resources'),
					$this->io->post('curr_date'),
					$this->io->post('sp_signature'),
					$this->io->post('request_status'),
					$this->io->post('expiration_date'));

				//Email and SMS Notification
				if($this->io->post('request_status') == "Pending")
				{
					$mynumber = $this->io->post('sp_mobilenum');
					$email= $this->io->post('sp_email');
					$varf = $this->io->post('sp_firstname');
					$varm = $this->io->post('sp_middlename');
					$varl = $this->io->post('sp_lastname');
					$fullname = "$varf $varm $varl";

					//Email Notification
					$this->send_ureview($email,$fullname);

					//SMS Notification
					//SMS Notif Setup

					$message = "Mr/Mrs. $varl,\nYour Request Assistance is Pending from Approval.\n\n-CSWD Office\n";
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
					redirect('admin/sp_viewrecords');	
					exit();					
				}
				else if ($this->io->post('request_status') == "Approved")
				{
					$mynumber = $this->io->post('sp_mobilenum');
					$email= $this->io->post('sp_email');
					$varf = $this->io->post('sp_firstname');
					$varm = $this->io->post('sp_middlename');
					$varl = $this->io->post('sp_lastname');
					$fullname = "$varf $varm $varl";

					//Email Notification
					$expdate = $this->io->post('expiration_date');
					$validity = date('M d, Y',strtotime($expdate));
					$this->send_approved($email,$fullname,date('F d, Y',strtotime($expdate)));

					$message = "Mr/Mrs. $varl,\nYour Request is Approved.\nValid until $validity.\n-CSWD Office";
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
					redirect('admin/sp_viewrecords');	
					exit();					
				}
				else if ($this->io->post('request_status') == "Disapproved")
				{
					$mynumber = $this->io->post('sp_mobilenum');
					$email= $this->io->post('sp_email');
					$varf = $this->io->post('sp_firstname');
					$varm = $this->io->post('sp_middlename');
					$varl = $this->io->post('sp_lastname');
					$fullname = "$varf $varm $varl";

					$dis_msg = $this->io->post('sp_dis_msg');
					$this->send_napproved($email,$fullname,$dis_msg); 

					//SMS Notification
					//iTextMo
					$message = "Mr/Mrs. $varl,\nYour Request is Disapproved.\nReason: $dis_msg.\n-CSWD Office\n";
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
					redirect('admin/sp_viewrecords');	
					exit();															
				}
				else if($this->io->post('request_status') == "Incomplete")
				{
					$mynumber = $this->io->post('sp_mobilenum');
					$email= $this->io->post('sp_email');
					$varf = $this->io->post('sp_firstname');
					$varm = $this->io->post('sp_middlename');
					$varl = $this->io->post('sp_lastname');
					$fullname = "$varf $varm $varl";

					//Email Notification
					$this->send_incomplete($email,$fullname);

					//SMS Notification
					//iTextMo
					$message = "Mr/Mrs. $varl,\n\nYour Request Assistance is Incomplete.\n-CSWD Office\n";
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
					redirect('admin/sp_viewrecords');	
					exit();																				
				}
			}
			else
			{
				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
				redirect('admin/sp_updaterecords');
				exit();		
			}
		}
		//End
		$this->call->view('dashboard_update_sp');
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
	public function send_approved($recipient,$fullname,$expiry)
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
		<p><b>Your Request Assistance from CSWD has been Approved valid until $expiry.</b></p></br>
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

	public function pdf_view($id)
	{
		$data_user = array();
		$data_user['data'] = $this->db->table('form_soloparent')->where('sp_id', $id)->get();
		$this->call->view('get_pdfview',$data_user);				
	}

	public function pdf_view_pwd($id)
	{
		$data_user = array();
		$data_user['data'] = $this->db->table('form_pwd')->where('pwd_id', $id)->get();
		$this->call->view('get_pdfview_pwd',$data_user);				
	}


	//Calendar of Activities
	public function calendarofact()
	{
		if($this->auth->is_logged_in()){
			$data = $this->record->retri_coa();
			$this->call->view('dashboard_calendar',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}

	public function coa_delrecords($id)
	{
		$this->session->set_flashdata(array('delete' => 'Data Deleted Successfully.'));		
		if($this->record->delete_coa($id))
			redirect('admin/calendarofact');
		exit();
	}	

	public function insert_coa()
	{
		if($this->form_validation->submitted())
		{
			$this->form_validation
			->name('coa_date')->required("Date is required.")
			->name('coa_name')->required("Name is required.");

			if($this->form_validation->run())
			{
				if($this->record->insert_coarecords(
					$this->io->post('coa_date'),
					$this->io->post('coa_name')))
				{
					$this->session->set_flashdata(array('success' => 'Activities Added Successfully.'));
					redirect('admin/calendarofact');	
					exit();	
				}
				else
				{
					$this->session->set_flashdata(array('error' => 'Error! Please check your information.'));
					redirect('admin/calendarofact');	
					exit();						
				}
			}
		}
		$this->call->view('dashboard_calendar');		
	}

	public function pwd_viewrecords()
	{
		if($this->auth->is_logged_in()){
			$data = $this->record->retri_pwd_records();
			$this->call->view('dashboard_view_pwd',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}
	}


	public function pwd_addrecords()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_add_pwd');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}
	}

	public function pwd_updaterecords()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_update_pwd');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}
	}

	public function edit_pwd_records($id) {

		if($this->auth->is_logged_in()){
			$data = $this->record->get_single_pwd($id);
			$this->call->view('dashboard_update_pwd',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}

	public function pwd_delrecords($id)
	{
		$img = $this->record->get_single_pwd_image($id);
		$img2 = $this->record->get_single_pwd_image_residency($id);
		$pathFile ="/uploads/image/pwd_idpic/";
		$pathFile2 ="/uploads/image/pwd_idpic/residency/";
		$dirto = getcwd();
		$data = $dirto.$pathFile.$img['image'];
		$data2 = $dirto.$pathFile2.$img2['image_residency'];

		if(!empty($data) || !empty($data2))
		{
			unlink($data);
			unlink($data2);
		}
		if($this->record->pwd_delete_data($id))
		{
			$this->session->set_flashdata(array('delete' => 'Client Data Deleted Successfully.'));
			redirect('admin/pwd_viewrecords');
			exit();
		}
	}



	public function pwd_insert()
	{	
		if($this->form_validation->submitted())
		{
			if($this->form_validation->run())
			{
				$target_dir = "uploads/image/pwd_idpic/";
				$target_dir2 = "uploads/image/pwd_idpic/residency/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$target_file2 = $target_dir2 . basename($_FILES["UploadtoResidency"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if file already exists
				if (file_exists($target_file) && file_exists($target_file2))
				{
					$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
					$uploadOk = 0;
					redirect('admin/pwd_addrecords');
					exit();				
				}

			// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" && $imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "xlsx")
				{

					$this->session->set_flashdata(array('error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'));				
					$uploadOk = 0;
					redirect('admin/pwd_addrecords');
					exit();			
				}
				if ($uploadOk == 0) 
				{
			// if everything is ok, try to upload file
					$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
					redirect('admin/pwd_addrecords');
					exit();			
				}
				else
				{

					move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
					move_uploaded_file($_FILES["UploadtoResidency"]["tmp_name"],$target_file2);

					$this->record->insert_pwdrecords(
						$this->io->post('pwd_lname'),
						$this->io->post('pwd_fname'),
						$this->io->post('pwd_mname'),
						$this->io->post('pwd_sex'),
						$this->io->post('pwd_typedis'),
						$this->io->post('pwd_typespecify'),
						$this->io->post('pwd_causedis'),
						$this->io->post('pwd_address'),
						$this->io->post('pwd_region'),
						$this->io->post('pwd_province'),
						$this->io->post('pwd_city'),
						$this->io->post('pwd_brgy'),
						$this->io->post('pwd_landline'),
						$this->io->post('pwd_mobilenum'),
						$this->io->post('pwd_email'),
						$this->io->post('pwd_dob'),
						$this->io->post('pwd_civilstatus'),
						$this->io->post('pwd_educational'),
						$this->io->post('pwd_empstatus'),
						$this->io->post('pwd_empnature'),
						$this->io->post('pwd_emptype'),
						$this->io->post('pwd_occupation'),
						$this->io->post('pwd_cperson'),
						$this->io->post('pwd_cnumber'),
						$this->io->post('pwd_idnum'),
						$this->io->post('pwdf_lname'),
						$this->io->post('pwdf_fname'),
						$this->io->post('pwdf_mname'),
						$this->io->post('pwdm_lname'),
						$this->io->post('pwdm_fname'),
						$this->io->post('pwdm_mname'),
						$this->io->post('pwdg_lname'),
						$this->io->post('pwdg_fname'),
						$this->io->post('pwdg_mname'),
						$this->io->post('pwdab_lname'),
						$this->io->post('pwdab_fname'),
						$this->io->post('pwdab_mname'),
						$this->io->post('pwdru_lname'),
						$this->io->post('pwdru_fname'),
						$this->io->post('pwdru_mname'),
						$this->io->post('pwd_signature'),
						basename( $_FILES["fileToUpload"]["name"]),
						basename( $_FILES["UploadtoResidency"]["name"]));

					$email= $this->io->post('pwd_email');
					$varf = $this->io->post('pwd_fname');
					$varm = $this->io->post('pwd_mname');
					$varl = $this->io->post('pwd_lname');
					$fullname = "$varf $varm $varl";

					$this->send_ureview($email,$fullname);							

						//SMS API WorkLoad
						//iTextMo
					$mynumber = $this->io->post('pwd_mobilenum');
					$message = "Mr/Mrs. $varl,\n\nYour Request is Pending from Approval.\n-CSWD Office\n";
					$api_user = "TR-CSWDS591291_L6Q7P";
					$api_pass = "9kr{cj(5&m";

					$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
					if($result == ""){
						$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
							Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
							Please CONTACT US for help. '));							
					}else if($result == 0){
						echo "Message Sent!";
						$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
					}else{	
						$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
					}

					$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
					redirect('admin/pwd_viewrecords');	
					exit();												
				}

			}
			else
			{
				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
				redirect('admin/pwd_addrecords');
				exit();			
			}			
		}
		$this->call->view('dashboard_add_pwd');
	}

	public function pwddata_update()
	{
		if($this->form_validation->submitted())
		{
			if($this->form_validation->run())
			{
				$this->record->update_pwdrecords(
					$this->io->post('pwd_id'),
					$this->io->post('pwd_lname'),
					$this->io->post('pwd_fname'),
					$this->io->post('pwd_mname'),
					$this->io->post('pwd_sex'),
					$this->io->post('pwd_typedis'),
					$this->io->post('pwd_typespecify'),
					$this->io->post('pwd_causedis'),
					$this->io->post('pwd_address'),
					$this->io->post('pwd_region'),
					$this->io->post('pwd_province'),
					$this->io->post('pwd_city'),
					$this->io->post('pwd_brgy'),
					$this->io->post('pwd_landline'),
					$this->io->post('pwd_mobilenum'),
					$this->io->post('pwd_email'),
					$this->io->post('pwd_dob'),
					$this->io->post('pwd_civilstatus'),
					$this->io->post('pwd_educational'),
					$this->io->post('pwd_empstatus'),
					$this->io->post('pwd_empnature'),
					$this->io->post('pwd_emptype'),
					$this->io->post('pwd_occupation'),
					$this->io->post('pwd_cperson'),
					$this->io->post('pwd_cnumber'),
					$this->io->post('pwd_idnum'),
					$this->io->post('pwdf_lname'),
					$this->io->post('pwdf_fname'),
					$this->io->post('pwdf_mname'),
					$this->io->post('pwdm_lname'),
					$this->io->post('pwdm_fname'),
					$this->io->post('pwdm_mname'),
					$this->io->post('pwdg_lname'),
					$this->io->post('pwdg_fname'),
					$this->io->post('pwdg_mname'),
					$this->io->post('pwdab_lname'),
					$this->io->post('pwdab_fname'),
					$this->io->post('pwdab_mname'),
					$this->io->post('pwdru_lname'),
					$this->io->post('pwdru_fname'),
					$this->io->post('pwdru_mname'),
					$this->io->post('pwd_signature'),
					$this->io->post('request_status'),
					$this->io->post('expiration_date'));

				//Email and SMS Notification
				if($this->io->post('request_status') == "Pending")
				{
					$mynumber = $this->io->post('pwd_mobilenum');
					$email= $this->io->post('pwd_email');
					$varf = $this->io->post('pwd_fname');
					$varm = $this->io->post('pwd_mname');
					$varl = $this->io->post('pwd_lname');
					$fullname = "$varf $varm $varl";

					//Email Notification
					$this->send_ureview($email,$fullname);

					//SMS Notification
					//SMS Notif Setup

					$message = "Mr/Mrs. $varl,\n\nYour Request is Pending from Approval.\n-CSWD Office\n";
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
					redirect('admin/pwd_viewrecords');	
					exit();					
				}
				else if ($this->io->post('request_status') == "Approved")
				{
					$mynumber = $this->io->post('pwd_mobilenum');
					$email= $this->io->post('pwd_email');
					$varf = $this->io->post('pwd_fname');
					$varm = $this->io->post('pwd_mname');
					$varl = $this->io->post('pwd_lname');
					$fullname = "$varf $varm $varl";

					//Email Notification
					$expdate = $this->io->post('expiration_date');
					$validity = date('F d, Y',strtotime($expdate));
					$this->send_approved($email,$fullname,date('F d, Y',strtotime($expdate)));

					$message = "Mr/Mrs. $varl,\nYour Request is Approved.\nValid until $validity.\n-CSWD Office";
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
					redirect('admin/pwd_viewrecords');	
					exit();					
				}
				else if ($this->io->post('request_status') == "Disapproved")
				{
					$mynumber = $this->io->post('pwd_mobilenum');
					$email= $this->io->post('pwd_email');
					$varf = $this->io->post('pwd_fname');
					$varm = $this->io->post('pwd_mname');
					$varl = $this->io->post('pwd_lname');
					$fullname = "$varf $varm $varl";

					$dis_msg = $this->io->post('sp_dis_msg');
					$this->send_napproved($email,$fullname,$dis_msg); 

					//SMS Notification
					//iTextMo
					$message = "Mr/Mrs. $varl,\n\nYour Request is Disapproved.\nReason: $dis_msg.\n-CSWD Office\n";
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
					redirect('admin/pwd_viewrecords');	
					exit();															
				}
				else if($this->io->post('request_status') == "Incomplete")
				{
					$mynumber = $this->io->post('pwd_mobilenum');
					$email= $this->io->post('pwd_email');
					$varf = $this->io->post('pwd_fname');
					$varm = $this->io->post('pwd_mname');
					$varl = $this->io->post('pwd_lname');
					$fullname = "$varf $varm $varl";

					//Email Notification
					$this->send_incomplete($email,$fullname);

					//SMS Notification
					//iTextMo
					$message = "Mr/Mrs. $varl,\n\nYour Request is Incomplete.\n-CSWD Office\n";
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
					redirect('admin/pwd_viewrecords');	
					exit();					
				}
			}
			else
			{
				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
				redirect('admin/pwd_updaterecords');
				exit();	
			}
		}
		$this->call->view('dashboard_update_pwd');
	}

	public function postinfo()
	{

		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_postinfo');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}	
	}

	public function viewinfo()
	{

		if($this->auth->is_logged_in()){
			$data = $this->record->viewall_post();
			$this->call->view('dashboard_view_infopost',$data);
		} else {
			$this->call->view('dashboard_login_v2'); 
		}	
	}

	public function del_viewpost($id)
	{
		$img = $this->record->get_single_postimage($id);
		$pathFile ="/uploads/post/";
		$dirto = getcwd();
		$data = $dirto.$pathFile.$img['image'];

		if(!empty($data))
		{
			unlink($data);
		}
		if($this->record->delete_post($id))
		{
			$this->session->set_flashdata(array('delete' => 'Post Deleted Successfully.'));
			redirect('admin/viewinfo');
			exit();
		}
	}


	public function insert_info_post()
	{
		if($this->form_validation->submitted())
		{
			$this->form_validation
			->name('info_date')->required('Set Date is Required')
			->name('info_title')->required('Title is Required')
			->name('info_information');

			$target_dir = "uploads/post/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if file already exists
			if (file_exists($target_file))
			{

				$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
				$uploadOk = 0;
			}

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {

				$this->session->set_flashdata(array('error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'));				
			$uploadOk = 0;
		}
			// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {

			$this->session->set_flashdata(array('error' => 'Sorry, your file is too large.'));			
			$uploadOk = 0;
		}

		if ($uploadOk == 0) 
		{
			// if everything is ok, try to upload file
			$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
		}
		else
		{
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
			{
				$this->record->insert_infopost(
					$this->io->post('info_date'),
					$this->io->post('info_title'),
					basename($_FILES["fileToUpload"]["name"]),
					$this->io->post('info_information'));

				$this->session->set_flashdata(array('success' => 'Data Posted Successfully.'));
				redirect('admin/viewinfo','refresh',2);	
				exit();			
			}
			else
			{
				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
				redirect('admin/postinfo');
				exit();				
			}
		}
	}

	$this->call->view('dashboard_postinfo'); 
}







public function backupfile()
{
	if($this->auth->is_logged_in()){
		$data = $this->record->viewall_backup();
		$this->call->view('dashboard_backupfile',$data);
	} else {
		$this->call->view('dashboard_login_v2'); 
	}    
}


public function backupfile_now()
{
	if($this->form_validation->submitted())
	{
		$this->form_validation
		->name('backup_name')->required()
		->name;

		$target_dir = "uploads/backupfile/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["na me"]);
		$uploadOk = 1;
		$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));	

			// Check if file already exists
		if (file_exists($target_file))
		{

			$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
			$uploadOk = 0;
			redirect('admin/backupfile');
			exit();				
		}

			// Allow certain file formats
		if($FileType != "docx" && $FileType != "xlsx" && $FileType != "pptx")
		{

			$this->session->set_flashdata(array('error' => 'Sorry, only docx, xlsx, pptx files are allowed.'));				
			$uploadOk = 0;
			redirect('admin/backupfile');
			exit();			
		}		

			// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {

			$this->session->set_flashdata(array('error' => 'Sorry, your file is too large.'));			
			$uploadOk = 0;
			redirect('admin/backupfile');
			exit();			
		}	
		
		if ($uploadOk == 0) 
		{
			// if everything is ok, try to upload file
			$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
			redirect('admin/backupfile');
			exit();			
		}
		else
		{
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
			{
				$this->record->insert_backup(
					$this->io->post('backup_name'),
					basename( $_FILES["fileToUpload"]["name"]));

				$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
				redirect('admin/backupfile');	
				exit();


			}
			else
			{
				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
				redirect('admin/backupfile');
				exit();				
			}			
		}				


	}
	$this->call->view('dashboard_backupfile');  
}

public function delete_backup($id)
{
	$img = $this->record->get_single_backup($id);
	$pathFile ="/uploads/backupfile/";
	$dirto = getcwd();
	$data = $dirto.$pathFile.$img['backup_file'];

	if(!empty($data))
	{
		unlink($data);
	}
	if($this->record->delete_backupdata($id))
	{
		$this->session->set_flashdata(array('delete' => 'Backup Data Deleted Successfully.'));
		redirect('admin/backupfile');
		exit();
	}
}



public function download_backup($id)
{
	$img = $this->record->get_single_backup($id);
	$pathFile ="/uploads/backupfile/";
	$dirto = getcwd();
	$data = $dirto.$pathFile.$img['backup_file'];

	force_download($data,$img['backup_file'],NULL);
}	

	//Adding Records
	public function sp_insert_request()
	{
		if($this->form_validation->submitted())
		{
			if($this->form_validation->run())
			{
				$target_dir = "uploads/image/sp_idpic/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if file already exists
				if (file_exists($target_file))
				{
					$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
					$uploadOk = 0;
					redirect('website/view_req_sp');
					$this->session->sess_destroy();
					exit();				
				}
			// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) 
				{

					$this->session->set_flashdata(array('error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'));				
					$uploadOk = 0;
					redirect('website/view_req_sp');
					$this->session->sess_destroy();
					exit();			
				}

				if ($uploadOk == 0) 
				{
			// if everything is ok, try to upload file
					$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
					redirect('website/view_req_sp');
					$this->session->sess_destroy();
					exit();			
				}
				else
				{
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
					{
						$this->record->insert_sprecord(
							$this->io->post('sp_lastname'),
							$this->io->post('sp_firstname'),
							$this->io->post('sp_middlename'),
							$this->io->post('sp_age'),
							$this->io->post('sp_sex'),
							$this->io->post('sp_dob'),
							$this->io->post('sp_pob'),
							$this->io->post('sp_address'),
							$this->io->post('sp_brgy'),
							$this->io->post('sp_city'),
							$this->io->post('sp_province'),
							$this->io->post('sp_email'),
							$this->io->post('sp_mobilenum'),
							$this->io->post('sp_educational'),
							$this->io->post('sp_occupation'),
							$this->io->post('sp_monthlyincome'),
							$this->io->post('spfc_fullname'),
							$this->io->post('spfc_relationship'),
							$this->io->post('spfc_age'),
							$this->io->post('spfc_status'),
							$this->io->post('spfc_dob'),
							$this->io->post('spfc_educational'),
							$this->io->post('spfc_occupation'),
							$this->io->post('spfc_monthlyincome'),
							$this->io->post('spfc_fullname_two'),
							$this->io->post('spfc_relationship_two'),
							$this->io->post('spfc_age_two'),
							$this->io->post('spfc_status_two'),
							$this->io->post('spfc_dob_two'),
							$this->io->post('spfc_educational_two'),
							$this->io->post('spfc_occupation_two'),
							$this->io->post('spfc_monthlyincome_two'),
							$this->io->post('spfc_fullname_three'),
							$this->io->post('spfc_relationship_three'),
							$this->io->post('spfc_age_three'),
							$this->io->post('spfc_status_three'),
							$this->io->post('spfc_dob_three'),
							$this->io->post('spfc_educational_three'),
							$this->io->post('spfc_occupation_three'),
							$this->io->post('spfc_monthlyincome_three'),
							$this->io->post('spfc_fullname_four'),
							$this->io->post('spfc_relationship_four'),
							$this->io->post('spfc_age_four'),
							$this->io->post('spfc_status_four'),
							$this->io->post('spfc_dob_four'),
							$this->io->post('spfc_educational_four'),
							$this->io->post('spfc_occupation_four'),
							$this->io->post('spfc_monthlyincome_four'),	
							$this->io->post('spfc_fullname_five'),
							$this->io->post('spfc_relationship_five'),
							$this->io->post('spfc_age_five'),
							$this->io->post('spfc_status_five'),
							$this->io->post('spfc_dob_five'),
							$this->io->post('spfc_educational_five'),
							$this->io->post('spfc_occupation_five'),
							$this->io->post('spfc_monthlyincome_five'),
							$this->io->post('sp_curr_status'),
							$this->io->post('sp_circumstances'),
							$this->io->post('sp_problems'),
							$this->io->post('sp_family_resources'),
							$this->io->post('curr_date'),
							$this->io->post('sp_signature'),					
							basename( $_FILES["fileToUpload"]["name"]));

					//Notifications Here
						$email= $this->io->post('sp_email');
						$varf = $this->io->post('sp_firstname');
						$varm = $this->io->post('sp_middlename');
						$varl = $this->io->post('sp_lastname');
						$fullname = "$varf $varm $varl";

					//Send Email Notif Here
						$this->send_ureview($email,$fullname);

					//SMS Notif Setup
						$mynumber = $this->io->post('sp_mobilenum');
						$message = "Mr/Mrs. $varl,\nYour Request Assistance is Pending from Approval.\n\n-CSWD Office\n";

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
					redirect('website/view_req_sp');
					$this->session->sess_destroy();	
						exit();						
					}
					else
					{
						$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
					redirect('website/view_req_sp');
					$this->session->sess_destroy();
						exit();					
					}					
				}						
			}
		}
		//End
		$this->call->view('web_req_sp');
	}





	public function pwd_insert_request()
	{	
		if($this->form_validation->submitted())
		{
			if($this->form_validation->run())
			{
				$target_dir = "uploads/image/pwd_idpic/";
				$target_dir2 = "uploads/image/pwd_idpic/residency/";
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$target_file2 = $target_dir2 . basename($_FILES["UploadtoResidency"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if file already exists
				if (file_exists($target_file) && file_exists($target_file2))
				{
					$this->session->set_flashdata(array('error' => 'Sorry, file already exists.'));					
					$uploadOk = 0;
					redirect('website/view_req_pwd');
					$this->session->sess_destroy();
					exit();				
				}

			// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" && $imageFileType != "docx" && $imageFileType != "pdf" && $imageFileType != "xlsx")
				{

					$this->session->set_flashdata(array('error' => 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.'));				
					$uploadOk = 0;
					redirect('website/view_req_pwd');
					$this->session->sess_destroy();
					exit();			
				}
				if ($uploadOk == 0) 
				{
			// if everything is ok, try to upload file
					$this->session->set_flashdata(array('error' => 'Sorry, your file was not uploaded.'));
					redirect('website/view_req_pwd');
					$this->session->sess_destroy();
					exit();			
				}
				else
				{

					move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
					move_uploaded_file($_FILES["UploadtoResidency"]["tmp_name"],$target_file2);

					$this->record->insert_pwdrecords(
						$this->io->post('pwd_lname'),
						$this->io->post('pwd_fname'),
						$this->io->post('pwd_mname'),
						$this->io->post('pwd_sex'),
						$this->io->post('pwd_typedis'),
						$this->io->post('pwd_typespecify'),
						$this->io->post('pwd_causedis'),
						$this->io->post('pwd_address'),
						$this->io->post('pwd_region'),
						$this->io->post('pwd_province'),
						$this->io->post('pwd_city'),
						$this->io->post('pwd_brgy'),
						$this->io->post('pwd_landline'),
						$this->io->post('pwd_mobilenum'),
						$this->io->post('pwd_email'),
						$this->io->post('pwd_dob'),
						$this->io->post('pwd_civilstatus'),
						$this->io->post('pwd_educational'),
						$this->io->post('pwd_empstatus'),
						$this->io->post('pwd_empnature'),
						$this->io->post('pwd_emptype'),
						$this->io->post('pwd_occupation'),
						$this->io->post('pwd_cperson'),
						$this->io->post('pwd_cnumber'),
						$this->io->post('pwd_idnum'),
						$this->io->post('pwdf_lname'),
						$this->io->post('pwdf_fname'),
						$this->io->post('pwdf_mname'),
						$this->io->post('pwdm_lname'),
						$this->io->post('pwdm_fname'),
						$this->io->post('pwdm_mname'),
						$this->io->post('pwdg_lname'),
						$this->io->post('pwdg_fname'),
						$this->io->post('pwdg_mname'),
						$this->io->post('pwdab_lname'),
						$this->io->post('pwdab_fname'),
						$this->io->post('pwdab_mname'),
						$this->io->post('pwdru_lname'),
						$this->io->post('pwdru_fname'),
						$this->io->post('pwdru_mname'),
						$this->io->post('pwd_signature'),
						basename( $_FILES["fileToUpload"]["name"]),
						basename( $_FILES["UploadtoResidency"]["name"]));

					$email= $this->io->post('pwd_email');
					$varf = $this->io->post('pwd_fname');
					$varm = $this->io->post('pwd_mname');
					$varl = $this->io->post('pwd_lname');
					$fullname = "$varf $varm $varl";

					$this->send_ureview($email,$fullname);							

						//SMS API WorkLoad
						//iTextMo
					$mynumber = $this->io->post('pwd_mobilenum');
					$message = "Mr/Mrs. $varl,\n\nYour Request is Pending from Approval.\n-CSWD Office\n";
					$api_user = "TR-CSWDS591291_L6Q7P";
					$api_pass = "9kr{cj(5&m";

					$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
					if($result == ""){
						$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
							Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
							Please CONTACT US for help. '));							
					}else if($result == 0){
						echo "Message Sent!";
						$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
					}else{	
						$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
					}

					$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
					redirect('website/view_req_pwd');
					$this->session->sess_destroy();	
					exit();												
				}

			}
			else
			{
				$this->session->set_flashdata(array('error' => 'An Error Occured. Please Check your Information.'));
					redirect('website/view_req_pwd');
					$this->session->sess_destroy();
				exit();			
			}			
		}
		$this->call->view('web_req_pwd');
	}

	//End	
}