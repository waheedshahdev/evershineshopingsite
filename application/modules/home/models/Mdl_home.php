<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_home extends CI_Model
{

function __construct() {
parent::__construct();
}

public function validate_credentials($email, $password){
        $sql = "SELECT * FROM tbl_customers WHERE email='".$email."' AND password='".md5($password)."' AND status = 'Active'";
          if($query=$this->db->query($sql))
          {
              return $query->row_array();
          }
          else{
            return false;
          }
    
    }

}