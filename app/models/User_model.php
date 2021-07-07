<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class User_model extends Model
{

    public function create_user($lastname,$firstname,$middlename,$username, $password, $email,$role,$image)
    {
        $bind = array(
            'lastname' => $lastname,
            'firstname' => $firstname,
            'middlename' => $middlename,
            'username' => $username,
            'email' => $email,
            'password' =>password_hash($password, PASSWORD_BCRYPT),
            'role' => $role,
            'status' => 'Unverified',
            'image' => $image
            );

        $result = $this->db->table('user')
                        ->insert($bind)
                        ->exec();
        if($result)
            return true;
    }

//.End	
}