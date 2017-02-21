<?php
class Users extends CI_Model{
    public function login($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        //$this->db->where('active','1');
        $query=$this->db->get('users');
        if($query->num_rows()==1)
        {
            return $query->result_array();
        }
        else{
            return FALSE;
        }
    }
}