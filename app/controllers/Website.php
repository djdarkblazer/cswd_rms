<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Website extends Controller
{
	public function index()
	{
		$this->call->view('web_index');
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
//End
}
