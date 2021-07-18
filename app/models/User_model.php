<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class User_model extends Model
{
    public function fetch_single_user($id)
    {
        return $this->db->table('user')
        ->where('id', $id)
        ->get();
    }

    public function update_useracc($id,$lastname,$firstname,$middlename,$email,$username,$role,$status)
    {
        $bind = array(
            'lastname' => $lastname,
            'firstname' => $firstname,
            'middlename' => $middlename,
            'email' => $email,
            'username' => $username,
            'role' => $role,
            'status' => $status
            );
        return $this->db->table('user')
                        ->where('id', $id)
                        ->update($bind)
                        ->exec();
    }


//.End	
}