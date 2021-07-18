<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * 
 */
class PMC_model extends Model
{	

	public function insert_pmc($pmc_lname,$pmc_fname,$pmc_mname,$pmc_sex,$pmc_dob,$pmc_pob,$pmc_occupation,$pmc_estimatedincome,$pmcg_lname,$pmcg_fname,$pmcg_mname,$pmcg_sex,$pmcg_dob,$pmcg_pob,$pmcg_occupation,$pmcg_estimatedincome,$pmc_address,$pmc_brgy,$pmc_city,$pmc_province,$pmc_email,$pmc_mobilenum,$pmc_aomimage,$pmc_dom,$pmcb_signature,$pmcg_signature)
	{
		$data = array(
			'pmc_lname' => $pmc_lname,
			'pmc_fname' => $pmc_fname,
			'pmc_mname' => $pmc_mname,
			'pmc_sex' => $pmc_sex,
			'pmc_dob' => $pmc_dob,
			'pmc_pob' => $pmc_pob,
			'pmc_occupation' => $pmc_occupation,
			'pmc_estimatedincome' => $pmc_estimatedincome,
			'pmcg_lname' => $pmcg_lname,
			'pmcg_fname' => $pmcg_fname,
			'pmcg_mname' => $pmcg_mname,
			'pmcg_sex' => $pmcg_sex,
			'pmcg_dob' => $pmcg_dob,
			'pmcg_pob' => $pmcg_pob, 
			'pmcg_occupation' => $pmcg_occupation,
			'pmcg_estimatedincome' => $pmcg_estimatedincome,
			'pmc_address' => $pmc_address,
			'pmc_brgy' => $pmc_brgy,
			'pmc_city' => $pmc_city,
			'pmc_province' => $pmc_province,
			'pmc_email' => $pmc_email,
			'pmc_mobilenum' => $pmc_mobilenum,
			'pmc_aomimage' => $pmc_aomimage,
			'pmc_dom' => $pmc_dom,
			'pmcb_signature' => $pmcb_signature,
			'pmcg_signature' => $pmcg_signature,
			'request_status' => "Pending"
		);

		$result = $this->db->table('form_pmc')
		->insert($data)
		->exec();

		if($result)
			return true;			
	}

	public function update_pmc($pmc_id,$pmc_lname,$pmc_fname,$pmc_mname,$pmc_sex,$pmc_dob,$pmc_pob,$pmc_occupation,$pmc_estimatedincome,$pmcg_lname,$pmcg_fname,$pmcg_mname,$pmcg_sex,$pmcg_dob,$pmcg_pob,$pmcg_occupation,$pmcg_estimatedincome,$pmc_address,$pmc_brgy,$pmc_city,$pmc_province,$pmc_email,$pmc_mobilenum,$pmc_dom,$pmcb_signature,$pmcg_signature,$request_status,$sked_status)
	{
		$data = array(
			'pmc_lname' => $pmc_lname,
			'pmc_fname' => $pmc_fname,
			'pmc_mname' => $pmc_mname,
			'pmc_sex' => $pmc_sex,
			'pmc_dob' => $pmc_dob,
			'pmc_pob' => $pmc_pob,
			'pmc_occupation' => $pmc_occupation,
			'pmc_estimatedincome' => $pmc_estimatedincome,
			'pmcg_lname' => $pmcg_lname,
			'pmcg_fname' => $pmcg_fname,
			'pmcg_mname' => $pmcg_mname,
			'pmcg_sex' => $pmcg_sex,
			'pmcg_dob' => $pmcg_dob,
			'pmcg_pob' => $pmcg_pob, 
			'pmcg_occupation' => $pmcg_occupation,
			'pmcg_estimatedincome' => $pmcg_estimatedincome,
			'pmc_address' => $pmc_address,
			'pmc_brgy' => $pmc_brgy,
			'pmc_city' => $pmc_city,
			'pmc_province' => $pmc_province,
			'pmc_email' => $pmc_email,
			'pmc_mobilenum' => $pmc_mobilenum,
			'pmc_dom' => $pmc_dom,
			'pmcb_signature' => $pmcb_signature,
			'pmcg_signature' => $pmcg_signature,
			'request_status' => $request_status,
			'schedule_status' => $sked_status
		);

		$result = $this->db->table('form_pmc')
		->where('pmc_id', $pmc_id)
		->update($data)
		->exec();

		if($result)
			return true;			
	}

	public function get_single_data($id){
		return $this->db->table('form_pmc')
		->where('pmc_id', $id)
		->get();
	}


	public function fetch_pmc_data()
	{
		return $this->db->table('form_pmc')
		->order_by('pmc_lname', 'ASC')
		->get_all();		
	}

	public function get_single_image($id){
		return $this->db->table('form_pmc')
		->select('pmc_aomimage')
		->where('pmc_id', $id)
		->get();		
	}

	public function delete_data($id){
		$result = $this->db->table('form_pmc')
		->delete()
		->where('pmc_id', $id)
		->exec();
		if($result)
			return true;						   					
	}		
}
?>