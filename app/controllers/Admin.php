<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {

	public function __construct()
	{
		parent:: __construct();

		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.mailtrap.io',
			'smtp_port' => 2525,
			'smtp_user' => '8dbae642832f52',
			'smtp_pass' => '64fb14eb6d8af3',
			'crlf' => "\r\n",
			'newline' => "\r\n"
		);
		$this->call->library('email', $config);
		$this->call->helper(array('new'));
	}

	public function index()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_main');
		} else {
			$this->call->view('dashboard_login'); 
		}
	}

	public function sp_addrecords()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_add_sp');
		} else {
			$this->call->view('dashboard_login'); 
		}
	}

	public function sp_updaterecords()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_update_sp');
		} else {
			$this->call->view('dashboard_login'); 
		}
	}	

	public function sp_viewrecords()
	{
		if($this->auth->is_logged_in()){
			$data = $this->record->retri_records();
			$this->call->view('dashboard_view_sp',$data);
		} else {
			$this->call->view('dashboard_login'); 
		}
	}

	public function sp_viewaccounts()
	{
		if($this->auth->is_logged_in()){
			$data = $this->record->user_accounts();
			$this->call->view('dashboard_view_useraccount',$data);
		} else {
			$this->call->view('dashboard_login'); 
		}
	}	

	public function sp_delrecords($id)
	{
		$this->session->set_flashdata(array('delete' => 'Client Data Deleted Successfully.'));		
		if($this->record->delete_data($id))
			redirect('admin/sp_viewrecords');
		exit();
	}

	public function edit_records($id) {
		
		if($this->auth->is_logged_in()){
			$data = $this->record->get_single_data($id);
			$this->call->view('dashboard_update_sp',$data);
		} else {
			$this->call->view('dashboard_login'); 
		}		
	}				


	//Adding Records
	public function sp_insert()
	{
		if($this->form_validation->submitted())
		{
			//Form Validation after Submit
			$this->form_validation
			->name('sp_fullname')->required("Please Enter your Full Name")
			->alpha_space($this->io->post('sp_fullname'))
			->name('sp_age')->required("Please your Age")
			->numeric("Only the Age accepts numbers")
			->name('sp_sex')->required("Enter your Gender/Sex")
			->name('sp_dob')->required("Enter your Birthday")
			->name('sp_pob')->required("Enter your Place of Birth")
			->name('sp_address')->required("Specify your Address")
			->name('sp_email')->required("Please enter a email address")
			->valid_email("Enter a Valid Email.")
			->name('sp_mobilenum')->required("Enter your Mobile Number")
			->numeric("Only the Mobile Number accepts numbers")
			->min_length(2)
			->max_length(15)
			->name('sp_educational')->required("Enter your Highest Educational Attainment")
			->name('sp_occupation')->required("Enter your Occupation")
			->name('sp_monthlyincome')->required("Enter your Estimated Monthly Income")
			->name('spfc_fullname')
			->alpha_space($this->io->post('spfc_fullname'))
			->name('spfc_relationship')
			->name('spfc_age')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status')
			->name('spfc_dob')
			->name('spfc_educational')
			->name('spfc_occupation')
			->name('spfc_monthlyincome')
			->name('spfc_fullname_two')
			->alpha_space($this->io->post('spfc_fullname_two'))
			->name('spfc_relationship_two')
			->name('spfc_age_two')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status_two')
			->name('spfc_dob_two')
			->name('spfc_educational_two')
			->name('spfc_occupation_two')
			->name('spfc_monthlyincome_two')
			->name('spfc_fullname_three')
			->alpha_space($this->io->post('spfc_fullname_three'))
			->name('spfc_relationship_three')
			->name('spfc_age_three')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status_three')
			->name('spfc_dob_three')
			->name('spfc_educational_three')
			->name('spfc_occupation_three')
			->name('spfc_monthlyincome_three')
			->name('spfc_fullname_four')
			->alpha_space($this->io->post('spfc_fullname_four'))
			->name('spfc_relationship_four')
			->name('spfc_age_four')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status_four')
			->name('spfc_dob_four')
			->name('spfc_educational_four')
			->name('spfc_occupation_four')
			->name('spfc_monthlyincome_four')
			->name('spfc_fullname_five')
			->alpha_space($this->io->post('spfc_fullname_five'))
			->name('spfc_relationship_five')
			->name('spfc_age_five')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status_five')
			->name('spfc_dob_five')
			->name('spfc_educational_five')
			->name('spfc_occupation_five')
			->name('spfc_monthlyincome_five')
			->name('sp_curr_status')->required("Enter your Current Status")
			->name('sp_circumstances')
			->name('sp_problems')	
			->name('sp_family_resources')
			->name('curr_date')->required("Enter Date Today")
			->name('sp_signature')->required("Enter your Printed Name");

			if($this->form_validation->run())
			{
				if($this->record->insert_sprecord(
					$this->io->post('sp_fullname'),
					$this->io->post('sp_age'),
					$this->io->post('sp_sex'),
					$this->io->post('sp_dob'),
					$this->io->post('sp_pob'),
					$this->io->post('sp_address'),
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
					$this->io->post('sp_signature')))
				{
					$email= $this->io->post('sp_email');
					$fullname = $this->io->post('sp_fullname');
					$this->send_ureview($email,$fullname);

					//SMS API WorkLoad
					//iTextMo
					$mynumber = $this->io->post('sp_mobilenum');
					$message = "Your Request from CSWD is Pending from Approval.";
					$api_user = "TR-CALAP695595_5M21Q";
					$api_pass = "s#k1gseyd8";

					$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
					if ($result == ""){
						$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
							Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
							Please CONTACT US for help. '));							
					}else if ($result == 0){
						echo "Message Sent!";
						$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
					}
					else{	
						$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
					}

					//./SMS End	

					$this->session->set_flashdata(array('success' => 'Data Added Successfully.'));
					redirect('admin/sp_addrecords');	
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
		$this->call->view('dashboard_add_sp');
	}

	//Updating Records
	public function spdata_update()
	{
		if($this->form_validation->submitted())
		{
			//Form Validation after Submit
			$this->form_validation
			->name('sp_fullname')->required("Please Enter your Full Name")
			->alpha_space($this->io->post('sp_fullname'))
			->name('sp_age')->required("Please your Age")
			->numeric("Only the Age accepts numbers")
			->name('sp_sex')->required("Enter your Gender/Sex")
			->name('sp_dob')->required("Enter your Birthday")
			->name('sp_pob')->required("Enter your Place of Birth")
			->name('sp_address')->required("Specify your Address")
			->name('sp_email')->required("Please enter a email address")
			->valid_email("Enter a Valid Email.")
			->name('sp_mobilenum')->required("Enter your Mobile Number")
			->numeric("Only the Mobile Number accepts numbers")
			->min_length(2)
			->max_length(15)
			->name('sp_educational')->required("Enter your Highest Educational Attainment")
			->name('sp_occupation')->required("Enter your Occupation")
			->name('sp_monthlyincome')->required("Enter your Estimated Monthly Income")
			->name('spfc_fullname')
			->alpha_space($this->io->post('spfc_fullname'))
			->name('spfc_relationship')
			->name('spfc_age')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status')
			->name('spfc_dob')
			->name('spfc_educational')
			->name('spfc_occupation')
			->name('spfc_monthlyincome')
			->name('spfc_fullname_two')
			->alpha_space($this->io->post('spfc_fullname_two'))
			->name('spfc_relationship_two')
			->name('spfc_age_two')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status_two')
			->name('spfc_dob_two')
			->name('spfc_educational_two')
			->name('spfc_occupation_two')
			->name('spfc_monthlyincome_two')
			->name('spfc_fullname_three')
			->alpha_space($this->io->post('spfc_fullname_three'))
			->name('spfc_relationship_three')
			->name('spfc_age_three')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status_three')
			->name('spfc_dob_three')
			->name('spfc_educational_three')
			->name('spfc_occupation_three')
			->name('spfc_monthlyincome_three')
			->name('spfc_fullname_four')
			->alpha_space($this->io->post('spfc_fullname_four'))
			->name('spfc_relationship_four')
			->name('spfc_age_four')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status_four')
			->name('spfc_dob_four')
			->name('spfc_educational_four')
			->name('spfc_occupation_four')
			->name('spfc_monthlyincome_four')
			->name('spfc_fullname_five')
			->alpha_space($this->io->post('spfc_fullname_five'))
			->name('spfc_relationship_five')
			->name('spfc_age_five')
			->numeric("Only the Age accepts numbers")
			->name('spfc_status_five')
			->name('spfc_dob_five')
			->name('spfc_educational_five')
			->name('spfc_occupation_five')
			->name('spfc_monthlyincome_five')
			->name('sp_curr_status')->required("Enter your Current Status")
			->name('sp_circumstances')
			->name('sp_problems')	
			->name('sp_family_resources')
			->name('curr_date')->required("Enter Date Today")
			->name('sp_signature')->required("Enter your Printed Name")
			->name('request_status')->required();

			if($this->form_validation->run())
			{
				if($this->record->update_sprecord(
					$this->io->post('sp_id'),
					$this->io->post('sp_fullname'),
					$this->io->post('sp_age'),
					$this->io->post('sp_sex'),
					$this->io->post('sp_dob'),
					$this->io->post('sp_pob'),
					$this->io->post('sp_address'),
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
					$this->io->post('request_status')
				))
				{
					$email= $this->io->post('sp_email');
					$fullname = $this->io->post('sp_fullname');
					$mynumber = $this->io->post('sp_mobilenum');
					

					//Email and SMS Notification
					if($this->io->post('request_status') == "pending")
					{
					//Email Notification
						$this->send_ureview($email,$fullname);

					//SMS Notification
					//iTextMo
						$message = "Your Request Assistance from CSWD is Pending from Approval.";
						$api_user = "TR-CALAP695595_5M21Q";
						$api_pass = "s#k1gseyd8";

						$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
						if ($result == ""){
							$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
								Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
								Please CONTACT US for help. '));							
						}else if ($result == 0){
							echo "Message Sent!";
							$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
						}
						else{	
							$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
						}

					//./SMS End	

						$this->session->set_flashdata(array('success' => 'Data Updated Successfully.'));
						redirect('admin/sp_viewrecords');	
						exit();
					}
					else if ($this->io->post('request_status') == "approved") 
					{
					//Email Notification
						$this->send_approved($email,$fullname);

					//SMS Notification
					//iTextMo
						$message = "Your Request Assistance from CSWD is Approved.";
						$api_user = "TR-CALAP695595_5M21Q";
						$api_pass = "s#k1gseyd8";

						$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
						if ($result == ""){
							$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
								Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
								Please CONTACT US for help. '));							
						}else if ($result == 0){
							echo "Message Sent!";
							$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
						}
						else{	
							$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
						}

					//./SMS End	

						$this->session->set_flashdata(array('success' => 'Data Updated Successfully.'));
						redirect('admin/sp_viewrecords');	
						exit();					
					}		
					else if ($this->io->post('request_status') == "disapproved")
					{
					//Email Notification
						$this->send_napproved($email,$fullname);

					//SMS Notification
					//iTextMo
						$message = "Your Request Assistance from CSWD is Disapproved";
						$api_user = "TR-CALAP695595_5M21Q";
						$api_pass = "s#k1gseyd8";

						$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
						if ($result == ""){
							$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
								Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
								Please CONTACT US for help. '));							
						}else if ($result == 0){
							echo "Message Sent!";
							$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
						}
						else{	
							$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
						}

					//./SMS End	

						$this->session->set_flashdata(array('success' => 'Data Updated Successfully.'));
						redirect('admin/sp_viewrecords');	
						exit();							
					} 
					else if ($this->io->post('request_status') == "incomplete")
					{
					//Email Notification
						$this->send_napproved($email,$fullname);

					//SMS Notification
					//iTextMo
						$message = "Your Request Assistance from CSWD is Incomplete";
						$api_user = "TR-CALAP695595_5M21Q";
						$api_pass = "s#k1gseyd8";

						$result = $this->itexmo($mynumber,$message,$api_user,$api_pass);
						if ($result == ""){
							$this->session->set_flashdata(array('error' => 'iTexMo: No response from server!!!
								Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
								Please CONTACT US for help. '));							
						}else if ($result == 0){
							echo "Message Sent!";
							$this->session->set_flashdata(array('success' => 'Message Sent! Successfully.'));						
						}
						else{	
							$this->session->set_flashdata(array('success' => 'Error Num '. $result . ' was encountered!'));
						}

					//./SMS End	

						$this->session->set_flashdata(array('success' => 'Data Updated Successfully.'));
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
		}
		$this->call->view('dashboard_update_sp');
	}

	//Email Automation Test
	public function send_ureview($recipient,$fullname)
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
		<p><b>Your Request Assistance from CSWD is Pending from Approval.</b></p></br>
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

	public function send_napproved($recipient,$fullname)
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
		<p><b>Your Request Assistance from CSWD is Disapproved.</b></p></br>
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

	public function pdf_view($id)
	{
		$data_user = array();
		$data_user['data'] = $this->db->table('form_soloparent')->where('sp_id', $id)->get();
		$this->call->view('get_pdfview',$data_user);				
	}

	//Calendar of Activities
	public function calendarofact()
	{
		if($this->auth->is_logged_in()){
			$data = $this->record->retri_coa();
			$this->call->view('dashboard_calendar',$data);
		} else {
			$this->call->view('dashboard_login'); 
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


	//End	
}