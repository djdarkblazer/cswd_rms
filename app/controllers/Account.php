<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Account extends Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->call->helper(array('form','alert'));

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
    }

    public function Login()
    {
        $this->call->view('dashboard_login_v2');    
    }    

    public function Register()
    {
        $this->call->view('dashboard_register');      
    }

    public function renew_pass()
    {
        $this->call->view('dashboard_forgotpass');
    }

    public function verify()
    {
        $data['pageTitle'] = 'CSWD | Verification Page';
        $this->call->view('dashboard_verification', $data);

    }
    //Main Page after Login
    public function admin_page()
    {
        if($this->auth->is_logged_in())
        {
            $getusr = $this->auth->get_username();
            $getrole = $this->auth->get_role();
            $getimage = $this->auth->get_image();

            $data = array('username' => $getusr, 'role' => $getrole, 'image' => $getimage);
            redirect('admin/index', $data);
        }
    }
    //Logout Session
    public function is_logout()
    {
        $this->session->sess_destroy();
        redirect('account/Login');
        exit();

    } 

   //Login an Account
    public function Signin()
    {
        if($this->form_validation->submitted())
        {
            $this->form_validation
            ->name('email')
            ->valid_email("Valid Email is Required");
            if($this->form_validation->run())
            {
                if($this->account->email_exists($this->io->post('email')))
                {
                 if($this->account->check_if_verified($this->io->post('email')))
                 {
                    if($this->auth->login($this->io->post('email'), $this->io->post('password')))
                    {
                        $data=$this->auth->login($this->io->post('email'), $this->io->post('password'));
                        $this->auth->set_logged_in($data);
                        $data_role = $this->auth->login_role($this->io->post('email'), $this->io->post('password'));
                        $this->auth->set_loggedin_role($data_role);
                        $data_image = $this->auth->login_image($this->io->post('email'), $this->io->post('password'));
                        $this->auth->set_loggedin_image($data_image);
                        


                        redirect('account/admin_page');
                    } else {
                        $this->session->set_flashdata(array('error' => 'Invalid Email or Password'));
                        $this->call->view('dashboard_login_v2');

                    }
                } else {
                    $this->session->set_flashdata(array('error' => 'Verify your account First!'));
                    $this->call->view('dashboard_login_v2');
                }
            } else {
                $this->session->set_flashdata(array('error' => 'No Account found in the Database'));
                $this->call->view('dashboard_login_v2');
            }
        }
    }
    $this->call->view('dashboard_login_v2');
}

	//Creating New Account
public function Registration()
{
    if($this->form_validation->submitted())
    {
        $this->form_validation
        ->name('username')->required()
        ->min_length(2)
        ->max_length(100)
        ->name('email')->required()
        ->valid_email("Valid Email is Required.")
        ->name('password')->required()
        ->min_length(8)
        ->max_length(15);

        if($this->form_validation->run())
        {
            $vCode = mt_rand(10000, 99999);

            if($this->account->email_exists($this->io->post('email')))
            {
                $this->session->set_flashdata(array('error' => 'Email Already Exist. Please use other Email.'));
                $this->call->view('dashboard_register');
            }
            else
            {
                $email= $this->io->post('email');

                if($this->send_code($email, $vCode))
                {
                    $this->auth->register(
                        $this->io->post('username'),
                        $this->io->post('password'),
                        $this->io->post('email'),                        
                    );

                    $this->session->set_userdata(array('email' => $email, 'code'=>$vCode));
                    $this->session->set_flashdata(array('success' => 'We have sent a Verification Code to your email. \nPlease verify your Account.'));                    
                    redirect('account/verify');                    
                        // $this->verification($vCode,$email);
                } 
            }   
        }
    }
    $this->call->view('dashboard_register'); 
}

    //Function for Sending Verification to Email
public function send_code($recipient, $code)
{
    $this->email->subject('CSWD Admin | Verification');
    $this->email->sender('deejaydarkblazer@gmail.com');
    $content = "<html>
    <head>
    <title>Verification Code</title>
    </head>
    <body>
    <center>
    <h2>Account Verification</h2>
    <p><b>\"".$code."\"</b> is your Verification Code.</p></br>
    <p>Please Activate your Account!</p>
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

public function verification()
{
    $vCode=$this->session->userdata('code');

    if($this->form_validation->submitted())
    {
        $this->form_validation
        ->name('code')->required()
        ->numeric("Only the Verification Code accepts numbers.");

        if($this->form_validation->run())
        {
            if($this->io->post('code') == $vCode)
            { 
                $this->account->is_validated($this->session->userdata('email'));
                $this->session->set_flashdata(array('success' => 'Your Account is Verified.\nPlease Login now!'));
                $this->call->view('dashboard_login_v2');
                exit();
            }
            else
            {
                $this->session->set_flashdata(array('error' => 'Invalid Code. Please check again your Email'));
                $this->call->view('dashboard_verification');
            }
        }
    }
    $this->call->view('dashboard_verification');
}

public function forgot_password()
{
    if($this->form_validation->submitted())
    {
        $this->form_validation
        ->name('email')->required()
        ->valid_email("Valid Email is Required.");

        if($this->form_validation->run())
        {
            if($this->account->email_exists($this->io->post('email')))
            {
                $vCode= mt_rand(10000, 99999);

                if($this->send_code($this->io->post('email'), $vCode))
                {
                    $this->session->set_userdata(array('user_email' => $this->io->post('email'), 'res_code' => $vCode));
                    redirect ('account/reset_verification');
                    exit();
                }
            }
            else
            {
                $this->session->set_flashdata(array('error' => 'No Email found in the Database'));
                $this->call->view('account/forgot_pass');
            }
        }
    }
    $this->call->view('aa/forgot_pass');        
}

    //Reset Verification
public function reset_verification()
{
    $token_reset = $this->session->userdata('res_code');

    if($this->form_validation->submitted())
    {
        $this->form_validation
        ->name('reset_code')->required()
        ->numeric("Only the Reset Code accepts numbers.");

        if($this->form_validation->run())
        {
            if($token_reset == $this->io->post('reset_code'))
            {
                $this->session->set_flashdata(array('success' => 'You can now change your password'));
                $this->call->view('dashboard_change_pass');
                exit();
            }
            else
            {
                $this->session->set_flashdata(array('error' => 'Invalid Code. Please Try Again'));                    
                $this->call->view('dashboard_reset_verification');
            }
        }
    }
    $this->call->view('dashboard_reset_verification');
}

public function change_password()
{
   if($this->form_validation->submitted())
   {
    $this->form_validation
    ->name('password')->required()
    ->min_length(8)
    ->max_length(15);

    if($this->form_validation->run())
    {
        if($this->io->post('password')==$this->io->post('confirm_password'))
        {
            if($this->account->change_password($this->io->post('password'), $this->session->userdata('user_email')))
            {
                $this->session->set_flashdata(array('success' => 'Password Changed. You can Login now'));                        
               $this->call->view('dashboard_login_v2');
                exit();
            }
        }
        else
        {
            $this->session->set_flashdata(array('error' => 'Password do not match'));                      
            $this->call->view('dashboard_change_pass');
        }
    }
}
$this->call->view('dashboard_change_pass');
}


 //End
}