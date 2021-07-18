<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * 
 */
class SSCS_model extends Model
{

    public function insert_sscs($cs_lname,$cs_fname,$cs_mname,$cs_sex,$cs_dob,$cs_pob,$cs_occupation,$cs_estimatedincome,$cs_address,$cs_brgy,$cs_city,$cs_province,$cs_email,$cs_mobilenum,$cs_clinicalabstract,$cs_clinicalbills,$cs_medicalinfo,$cs_requestofscsr,$cs_requestname,$cs_signature)
    {
        $bind = array(
            'cs_lname' => $cs_lname,
            'cs_fname' => $cs_fname,
            'cs_mname' => $cs_mname,
            'cs_sex' => $cs_sex,
            'cs_dob' => $cs_dob,
            'cs_pob' => $cs_pob,
            'cs_occupation' => $cs_occupation,
            'cs_estimatedincome' => $cs_estimatedincome,
            'cs_address' => $cs_address,
            'cs_brgy' => $cs_brgy,
            'cs_city' => $cs_city,
            'cs_province' => $cs_province,
            'cs_email' => $cs_email,
            'cs_mobilenum' => $cs_mobilenum,
            'cs_clinicalabstract' => $cs_clinicalabstract,
            'cs_clinicalbills' => $cs_clinicalbills,
            'cs_medicalinfo' => $cs_medicalinfo,
            'cs_requestofscsr' => $cs_requestofscsr,
            'cs_requestname' => $cs_requestname,
            'cs_signature' => $cs_signature,
            'request_status' => "Pending"
        );

        $result = $this->db->table('form_sscs')
        ->insert($bind)
        ->exec();

        if($result)
            return true;
    }


    public function update_sscs($cs_id,$cs_lname,$cs_fname,$cs_mname,$cs_sex,$cs_dob,$cs_pob,$cs_occupation,$cs_estimatedincome,$cs_address,$cs_brgy,$cs_city,$cs_province,$cs_email,$cs_mobilenum,$cs_requestname,$cs_signature,$request_status)
    {
        $bind = array(
            'cs_lname' => $cs_lname,
            'cs_fname' => $cs_fname,
            'cs_mname' => $cs_mname,
            'cs_sex' => $cs_sex,
            'cs_dob' => $cs_dob,
            'cs_pob' => $cs_pob,
            'cs_occupation' => $cs_occupation,
            'cs_estimatedincome' => $cs_estimatedincome,
            'cs_address' => $cs_address,
            'cs_brgy' => $cs_brgy,
            'cs_city' => $cs_city,
            'cs_province' => $cs_province,
            'cs_email' => $cs_email,
            'cs_mobilenum' => $cs_mobilenum,
            'cs_requestname' => $cs_requestname,
            'cs_signature' => $cs_signature,
            'request_status' => $request_status
        );

        $result = $this->db->table('form_sscs')
        ->where('cs_id',$cs_id)
        ->update($bind)
        ->exec();

        if($result)
            return true;
    }    

    public function fetch_sscs_data()
    {
        return $this->db->table('form_sscs')
        ->order_by('cs_lname', 'ASC')
        ->get_all();        
    }   
    public function get_single_data($id){
        return $this->db->table('form_sscs')
        ->where('cs_id', $id)
        ->get();
    }

    public function get_single_image1($id){
        return $this->db->table('form_sscs')
        ->select('cs_clinicalabstract')
        ->where('cs_id', $id)
        ->get();        
    }
    public function get_single_image2($id){
        return $this->db->table('form_sscs')
        ->select('cs_clinicalbills')
        ->where('cs_id', $id)
        ->get();        
    } 
    public function get_single_image3($id){
        return $this->db->table('form_sscs')
        ->select('cs_medicalinfo')
        ->where('cs_id', $id)
        ->get();        
    }
    public function get_single_image4($id){
        return $this->db->table('form_sscs')
        ->select('cs_requestofscsr')
        ->where('cs_id', $id)
        ->get();        
    }           
    public function delete_data($id){
        $result = $this->db->table('form_sscs')
        ->delete()
        ->where('cs_id', $id)
        ->exec();
        if($result)
            return true;                                            
    }



}
?>