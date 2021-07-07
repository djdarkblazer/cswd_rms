<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Account_model extends Model {

   //Check if Email Exist	
    public function email_exists($email){
        return $this->db->table('user')->where('email', $email)->get();
    }

    //Update Status to Verified
    public function is_validated($email)
    {
        $data = array(
            'status' => 'Verified'
        );

        $result = $this->db->table('user')
                       ->where('email', $email)
                       ->update($data)
                       ->exec();
        if($result)
            return true;
    }

    //Checking if the account is Verified
    public function check_if_verified($email)
    {
      $data = array(
        'email' => $email,
        'status' => 'Activated'
    );

      return $this->db->table('user')->where($data)->get();
  }

    //Changing Password
  public function change_password($password, $email)
  {
    $data=array(
        'password'=>password_hash($password, PASSWORD_BCRYPT),
    );
    $result=$this->db->table('user')
                 ->where('email', $email)
                 ->update($data)
                 ->exec();
    if($result)
        return true;
}

//End    
}