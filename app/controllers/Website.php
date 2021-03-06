<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Website extends Controller
{
	public function index()
	{
		$data = $this->record->viewall_post();
		$this->call->view('web_index',$data);
	}
	public function services()
	{
		$this->call->view('web_services');
	}
	public function information()
	{
		$this->call->view('web_info');
	}
	public function events()
	{
		$data = $this->record->retri_coa();
		$this->call->view('web_events',$data);
	}
	public function assistance()
	{
		$this->call->view('web_assistance');
	}

	public function get_viewpost($id)
	{
		$data = $this->record->get_single_post($id);
		$this->call->view('web_info',$data); 
	}

	public function view_req_sp()
	{
	    $this->call->view('web_req_sp');
	}

	public function view_req_pwd()
	{
	    $this->call->view('web_req_pwd');
	}

	public function view_req_pmc()
	{
	    $this->call->view('web_req_pmc');
	}

	public function view_req_sscs()
	{
	    $this->call->view('web_req_sscs');
	}	







//End
}