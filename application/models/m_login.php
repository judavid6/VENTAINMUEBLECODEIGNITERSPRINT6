<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function login($login,$password)
    {
        $this->db->where('login',$login);
        $this->db->where('password',$password);
        $q = $this->db->get('usuarios');
        if($q->num_rows()>0){
           
            $row = $q->row_array(); 
            return $row;
        }else{
            return false;
        }
    }

}

/* End of file M_login.php */
