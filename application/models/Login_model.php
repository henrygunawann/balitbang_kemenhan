<?php
class Login_model extends CI_Model{
 
  function validate($username,$password){
    // $this->db->where('user_email',$email);
    // $this->db->where('user_password',$password);
    // $result = $this->db->get('tbl_users',1);
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $result = $this->db->get('user_akses',1);    
    return $result;
  }
 
}