<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * 
 */
class Uploads_model extends Model
{
	public function insert_upload($ru_date,$ru_username,$ru_empname,$ru_reqfor,$ru_uploaded)
	{
		$bind = array(
			'ru_date' => $ru_date,
			'ru_username' => $ru_username,
			'ru_empname' => $ru_empname,
			'ru_reqfor' => $ru_reqfor,
			'ru_uploaded' => $ru_uploaded,
			'ru_status' => 'Pending'
		);

		$result = $this->db->table('tbl_request_upload')
		->insert($bind)
		->exec();

		if($result)
			return true;

	}

	public function updating_upload($ru_id,$ru_date,$ru_username,$ru_empname,$ru_uploaded,$ru_reqfor,$ru_status)
	{
		$bind = array(
			'ru_date' => $ru_date,
			'ru_username' => $ru_username,
			'ru_empname' => $ru_empname,
			'ru_uploaded' => $ru_uploaded,
			'ru_reqfor' => $ru_reqfor,
			'ru_status' => $ru_status
		);

		$result = $this->db->table('tbl_request_upload')
		->where('ru_id', $ru_id)
		->update($bind)
		->exec();

		if($result)
			return true;
	}

	public function fetch_file_to_admin($id)
	{
		return $this->db->table('tbl_request_upload')
						->where('ru_id', $id)
						->get();
	}


	public function fetch_request_file()
	{
		// return $this->db->table('tbl_request_upload')->order_by('ru_date', 'ASC')->get_all();
		return $this->db->table('tbl_request_upload')->like('ru_username', $this->session->userdata('username'))->get_all();
	}

	public function fetch_request_toadmin()
	{
		return $this->db->table('tbl_request_upload')->order_by('ru_date', 'ASC')->get_all();
	}	

	public function get_single_file($id){
		return $this->db->table('tbl_request_upload')
		->select('ru_uploaded')
		->where('ru_id', $id)
		->get();		
	}

	public function delete_reqdata($id){
		$result = $this->db->table('tbl_request_upload')
		->delete()
		->where('ru_id', $id)
		->exec();

		if($result)
			return true;						   					
	}	
}
?>