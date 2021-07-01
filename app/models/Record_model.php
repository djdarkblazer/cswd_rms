<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Record_model extends Model {

	public function insert_sprecord($sp_fullname,$sp_age,$sp_sex,$sp_dob,$sp_pob,$sp_address,$sp_email,$sp_mobilenum,$sp_educational,$sp_occupation,$sp_monthlyincome,$spfc_fullname,$spfc_relationship,$spfc_age,$spfc_status,$spfc_dob,$spfc_educational,$spfc_occupation,$spfc_monthlyincome,$spfc_fullname_two,$spfc_relationship_two,$spfc_age_two,$spfc_status_two,$spfc_dob_two,$spfc_educational_two,$spfc_occupation_two,$spfc_monthlyincome_two,$spfc_fullname_three,$spfc_relationship_three,$spfc_age_three,$spfc_status_three,$spfc_dob_three,$spfc_educational_three,$spfc_occupation_three,$spfc_monthlyincome_three,$spfc_fullname_four,$spfc_relationship_four,$spfc_age_four,$spfc_status_four,$spfc_dob_four,$spfc_educational_four,$spfc_occupation_four,$spfc_monthlyincome_four,$spfc_fullname_five,$spfc_relationship_five,$spfc_age_five,$spfc_status_five,$spfc_dob_five,$spfc_educational_five,$spfc_occupation_five,$spfc_monthlyincome_five,$sp_curr_status,$sp_circumstances,$sp_problems,$sp_family_resources,$curr_date,$sp_signature,$image)
	{
		$bind = array(
			'sp_fullname' => $sp_fullname ,
			'sp_age' => $sp_age ,
			'sp_sex' => $sp_sex ,
			'sp_dob' => $sp_dob ,
			'sp_pob' => $sp_pob ,
			'sp_address' => $sp_address ,
			'sp_email' => $sp_email ,
			'sp_mobilenum' => $sp_mobilenum ,
			'sp_educational' => $sp_educational ,
			'sp_occupation' => $sp_occupation ,
			'sp_monthlyincome' => $sp_monthlyincome ,
			'spfc_fullname' => $spfc_fullname,
			'spfc_relationship' => $spfc_relationship,
			'spfc_age' => $spfc_age,
			'spfc_status' => $spfc_status,
			'spfc_dob' => $spfc_dob,
			'spfc_educational' => $spfc_educational,
			'spfc_occupation' => $spfc_occupation,
			'spfc_monthlyincome' => $spfc_monthlyincome,
			'spfc_fullname_two' => $spfc_fullname_two,
			'spfc_relationship_two' => $spfc_relationship_two,
			'spfc_age_two' => $spfc_age_two,
			'spfc_status_two' => $spfc_status_two,
			'spfc_dob_two' => $spfc_dob_two,
			'spfc_educational_two' => $spfc_educational_two,
			'spfc_occupation_two' => $spfc_occupation_two,
			'spfc_monthlyincome_two' => $spfc_monthlyincome_two,
			'spfc_fullname_three' => $spfc_fullname_three,
			'spfc_relationship_three' => $spfc_relationship_three,
			'spfc_age_three' => $spfc_age_three,
			'spfc_status_three' => $spfc_status_three,
			'spfc_dob_three' => $spfc_dob_three,
			'spfc_educational_three' => $spfc_educational_three,
			'spfc_occupation_three' => $spfc_occupation_three,
			'spfc_monthlyincome_three' => $spfc_monthlyincome_three,
			'spfc_fullname_four' => $spfc_fullname_four,
			'spfc_relationship_four' => $spfc_relationship_four,
			'spfc_age_four' => $spfc_age_four,
			'spfc_status_four' => $spfc_status_four,
			'spfc_dob_four' => $spfc_dob_four,
			'spfc_educational_four' => $spfc_educational_four,
			'spfc_occupation_four' => $spfc_occupation_four,
			'spfc_monthlyincome_four' => $spfc_monthlyincome_four,	
			'spfc_fullname_five' => $spfc_fullname_five,
			'spfc_relationship_five' => $spfc_relationship_five,
			'spfc_age_five' => $spfc_age_five,
			'spfc_status_five' => $spfc_status_five,
			'spfc_dob_five' => $spfc_dob_five,
			'spfc_educational_five' => $spfc_educational_five,
			'spfc_occupation_five' => $spfc_occupation_five,
			'spfc_monthlyincome_five' => $spfc_monthlyincome_five,	
			'sp_curr_status' => $sp_curr_status,
			'sp_circumstances' => $sp_circumstances,										
			'sp_problems' => $sp_problems,
			'sp_family_resources' => $sp_family_resources,
			'curr_date' => $curr_date,
			'sp_signature' => $sp_signature,
			'request_status' => "Pending",
			'image' => $image
		);

		$result = $this->db->table('form_soloparent')
						   ->insert($bind)
						   ->exec();

		if($result)
			return true;	   
	}

	public function retri_records(){
		return $this->db->table('form_soloparent')
						->order_by('sp_fullname', 'ASC')
						->get_all();
	}

	public function retri_coa(){
		return $this->db->table('coa_activities')
						->order_by('coa_date', 'ASC')
						->get_all();
	}

	public function delete_coa($id){
		$result = $this->db->table('coa_activities')
						    ->delete()
						    ->where('coa_id', $id)
						    ->exec();
		if($result)
			return true;						   					
	}		

	public function user_accounts(){
		return $this->db->table('user')
						->order_by('username', 'ASC')
						->get_all();
	}	

	public function delete_data($id){
		$result = $this->db->table('form_soloparent')
						    ->delete()
						    ->where('sp_id', $id)
						    ->exec();
		if($result)
			return true;						   					
	}

	public function get_single_data($id){
		return $this->db->table('form_soloparent')
					->where('sp_id', $id)
					->get();
	}	

	//Updating Query
	public function update_sprecord($sp_id,$sp_fullname,$sp_age,$sp_sex,$sp_dob,$sp_pob,$sp_address,$sp_email,$sp_mobilenum,$sp_educational,$sp_occupation,$sp_monthlyincome,$spfc_fullname,$spfc_relationship,$spfc_age,$spfc_status,$spfc_dob,$spfc_educational,$spfc_occupation,$spfc_monthlyincome,$spfc_fullname_two,$spfc_relationship_two,$spfc_age_two,$spfc_status_two,$spfc_dob_two,$spfc_educational_two,$spfc_occupation_two,$spfc_monthlyincome_two,$spfc_fullname_three,$spfc_relationship_three,$spfc_age_three,$spfc_status_three,$spfc_dob_three,$spfc_educational_three,$spfc_occupation_three,$spfc_monthlyincome_three,$spfc_fullname_four,$spfc_relationship_four,$spfc_age_four,$spfc_status_four,$spfc_dob_four,$spfc_educational_four,$spfc_occupation_four,$spfc_monthlyincome_four,$spfc_fullname_five,$spfc_relationship_five,$spfc_age_five,$spfc_status_five,$spfc_dob_five,$spfc_educational_five,$spfc_occupation_five,$spfc_monthlyincome_five,$sp_curr_status,$sp_circumstances,$sp_problems,$sp_family_resources,$curr_date,$sp_signature,$request_status)
	{
		$data = array(
			'sp_fullname' => $sp_fullname ,
			'sp_age' => $sp_age ,
			'sp_sex' => $sp_sex ,
			'sp_dob' => $sp_dob ,
			'sp_pob' => $sp_pob ,
			'sp_address' => $sp_address ,
			'sp_email' => $sp_email ,
			'sp_mobilenum' => $sp_mobilenum ,
			'sp_educational' => $sp_educational ,
			'sp_occupation' => $sp_occupation ,
			'sp_monthlyincome' => $sp_monthlyincome ,
			'spfc_fullname' => $spfc_fullname,
			'spfc_relationship' => $spfc_relationship,
			'spfc_age' => $spfc_age,
			'spfc_status' => $spfc_status,
			'spfc_dob' => $spfc_dob,
			'spfc_educational' => $spfc_educational,
			'spfc_occupation' => $spfc_occupation,
			'spfc_monthlyincome' => $spfc_monthlyincome,
			'spfc_fullname_two' => $spfc_fullname_two,
			'spfc_relationship_two' => $spfc_relationship_two,
			'spfc_age_two' => $spfc_age_two,
			'spfc_status_two' => $spfc_status_two,
			'spfc_dob_two' => $spfc_dob_two,
			'spfc_educational_two' => $spfc_educational_two,
			'spfc_occupation_two' => $spfc_occupation_two,
			'spfc_monthlyincome_two' => $spfc_monthlyincome_two,
			'spfc_fullname_three' => $spfc_fullname_three,
			'spfc_relationship_three' => $spfc_relationship_three,
			'spfc_age_three' => $spfc_age_three,
			'spfc_status_three' => $spfc_status_three,
			'spfc_dob_three' => $spfc_dob_three,
			'spfc_educational_three' => $spfc_educational_three,
			'spfc_occupation_three' => $spfc_occupation_three,
			'spfc_monthlyincome_three' => $spfc_monthlyincome_three,
			'spfc_fullname_four' => $spfc_fullname_four,
			'spfc_relationship_four' => $spfc_relationship_four,
			'spfc_age_four' => $spfc_age_four,
			'spfc_status_four' => $spfc_status_four,
			'spfc_dob_four' => $spfc_dob_four,
			'spfc_educational_four' => $spfc_educational_four,
			'spfc_occupation_four' => $spfc_occupation_four,
			'spfc_monthlyincome_four' => $spfc_monthlyincome_four,	
			'spfc_fullname_five' => $spfc_fullname_five,
			'spfc_relationship_five' => $spfc_relationship_five,
			'spfc_age_five' => $spfc_age_five,
			'spfc_status_five' => $spfc_status_five,
			'spfc_dob_five' => $spfc_dob_five,
			'spfc_educational_five' => $spfc_educational_five,
			'spfc_occupation_five' => $spfc_occupation_five,
			'spfc_monthlyincome_five' => $spfc_monthlyincome_five,	
			'sp_curr_status' => $sp_curr_status,
			'sp_circumstances' => $sp_circumstances,										
			'sp_problems' => $sp_problems,
			'sp_family_resources' => $sp_family_resources,
			'curr_date' => $curr_date,
			'sp_signature' => $sp_signature,
			'request_status' => $request_status
		);

		$result = $this->db->table('form_soloparent')
						   ->where('sp_id', $sp_id)
						   ->update($data)
						   ->exec();

		if($result)
			return true;	   
	}

	   //Check if Email Exist	
    public function email_exists($email){
        return $this->db->table('clients')->where('email', $email)->get();
    }
    
    public function find_pdf($sp_id)
    {
    	return $this->db->table('form_soloparent')
    					->where('sp_id', $sp_id)
    					->get_all();
    }

    public function insert_coarecords($coa_date,$coa_name)
    {
        $data = array(
        	'coa_date' => $coa_date,
        	'coa_name' => $coa_name
        );

        $result = $this->db->table('coa_activities')
        				   ->insert($data)
        				   ->exec();

        if($result)
        	return true;
    }

//End
}
