<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * 
 */
class Report_model extends Model
{

    public function count_sp($get_data)
    {
        $row = $this->db->table('form_soloparent')->select_count('sp_id', 'total_row')->where('sp_brgy', $get_data)->get();
        if($row)
        {
            return $row['total_row'];

        }
        else {
            return false;
        }    
    }

    public function count_pwd($get_data)
    {
        $row = $this->db->table('form_pwd')->select_count('pwd_id', 'total_row')->where('pwd_brgy', $get_data)->get();
        if($row)
        {
            return $row['total_row'];

        }
        else {
            return false;
        }    
    }
    public function count_pmc($get_data)
    {
        $row = $this->db->table('form_pmc')->select_count('pmc_id', 'total_row')->where('pmc_brgy', $get_data)->get();
        if($row)
        {
            return $row['total_row'];

        }
        else {
            return false;
        }    
    }
    public function count_sscs($get_data)
    {
        $row = $this->db->table('form_sscs')->select_count('cs_id', 'total_row')->where('cs_brgy', $get_data)->get();
        if($row)
        {
            return $row['total_row'];

        }
        else {
            return false;
        }    
    }

}
?>