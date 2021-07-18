<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * 
 */
class Reports extends Controller
{
	public $report_ci;
	public function __construct()
	{
		parent::__construct();
		$this->call->model('report');
		$this->report_ci =& lava_instance();
	}

	public function sp_records()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_sp_reports');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}

	public function fetch_sp_records()
	{
		$get_data = $this->io->post('sp_brgy');
		$this->report_ci->session->set_userdata(array('brgy_data' => $get_data));
		$data = $this->db->table('form_soloparent')->like('sp_brgy',$get_data)->get_all();
		$this->call->view('dashboard_sp_reports',$data);
		
	}	

	public function get_report_sp()
	{
		$get_data = $this->report_ci->session->userdata('brgy_data');
		$data_user = $this->db->table('form_soloparent')->like('sp_brgy',$get_data)->get_all();
		$sp_row=$this->report->count_sp($get_data);
		$data = array('data' => $data_user, 'total' => $sp_row);
        $this->call->view('get_view_reports',$data);						
	}

	public function pwd_records()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_pwd_reports');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}

	public function fetch_pwd_records()
	{
		$get_data = $this->io->post('pwd_brgy');
		$this->report_ci->session->set_userdata(array('brgy_data' => $get_data));
		$data = $this->db->table('form_pwd')->like('pwd_brgy',$get_data)->get_all();
		$this->call->view('dashboard_pwd_reports',$data);
		
	}	

	public function get_report_pwd()
	{
		$get_data = $this->report_ci->session->userdata('brgy_data');

		$data_user = $this->db->table('form_pwd')->like('pwd_brgy',$get_data)->get_all();
		$pwd_row=$this->report->count_sp($get_data);

		$data = array('data' => $data_user, 'total' => $pwd_row);
        $this->call->view('get_reports_pwd',$data);						
	}



	public function pmc_records()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_pmc_reports');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}

	public function fetch_pmc_records()
	{
		$get_data = $this->io->post('pmc_brgy');
		$this->report_ci->session->set_userdata(array('brgy_data' => $get_data));
		$data = $this->db->table('form_pmc')->like('pmc_brgy',$get_data)->get_all();
		$this->call->view('dashboard_pmc_reports',$data);
		
	}	

	public function get_report_pmc()
	{
		$get_data = $this->report_ci->session->userdata('brgy_data');

		$data_user = $this->db->table('form_pmc')->like('pmc_brgy',$get_data)->get_all();
		$pmc_row=$this->report->count_pmc($get_data);

		$data = array('data' => $data_user, 'total' => $pmc_row);
        $this->call->view('get_reports_pmc',$data);						
	}



	public function sscs_records()
	{
		if($this->auth->is_logged_in()){
			$this->call->view('dashboard_sscs_reports');
		} else {
			$this->call->view('dashboard_login_v2'); 
		}		
	}

	public function fetch_sscs_records()
	{
		$get_data = $this->io->post('cs_brgy');
		$this->report_ci->session->set_userdata(array('brgy_data' => $get_data));
		$data = $this->db->table('form_sscs')->like('cs_brgy',$get_data)->get_all();
		$this->call->view('dashboard_sscs_reports',$data);
		
	}	

	public function get_report_sscs()
	{
		$get_data = $this->report_ci->session->userdata('brgy_data');

		$data_user = $this->db->table('form_sscs')->like('cs_brgy',$get_data)->get_all();
		$sscs_row=$this->report->count_pmc($get_data);

		$data = array('data' => $data_user, 'total' => $sscs_row);
        $this->call->view('get_reports_sscs',$data);						
	}


//end		
}
?>