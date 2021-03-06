<?php
class Speakers_Model extends CI_Model{
    function get_random_password($chars_min=6, $chars_max=8, $use_upper_case=false, $include_numbers=false, $include_special_chars=false)
    {
        $length = rand($chars_min, $chars_max);
        $selection = 'aeuoyibcdfghjklmnpqrstvwxz';
        if($include_numbers) {
            $selection .= "1234567890";
        }
        if($include_special_chars) {
            $selection .= "!@\"#$%&[]{}?|";
        }

        $password = "";
        for($i=0; $i<$length; $i++) {
            $current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
            $password .=  $current_letter;
        }                

      return $password;
    }

    public function addSpeaker($data){
        //Login Username
        $uname=$data['first_name'].$data['last_name'];
        $username=$string = preg_replace('/\s+/', '', strtolower($uname));
        //Login Data
        $login_data=array(
            'user_id'=>$data['user_id'],
            'user_role'=>3,
            'username'=>$username,
            'password'=>  md5($this->get_random_password()),
            'active'=>1,
            
        );
        
        $this->db->set($data);
        $this->db->set('last_update','NOW()',FALSE);
        if($this->db->insert('user_details')==TRUE){
            //Insert login Data In User Table
            $this->db->set($login_data);
            $this->db->set('last_update','NOW()',FALSE);
            $this->db->set('created_on','NOW()',FALSE);
            $this->db->insert('users');
            return TRUE;
        }else{
            return FALSE;
        }   
    }
    
    public function viewSpeaker()
    {
        $this->db->where('status','1');
        $this->db->where('user_role','3');
        $this->db->order_by('id','DESC');
        $query=$this->db->get('user_details');
        if($query->num_rows()>=1)
        {
           return $query->result_array(); 
        }
        else{
            return false;
        }
    }
    
    public function editSpeaker($id,$data){
      $this->db->set($data);
      $this->db->set('last_update','NOW()',FALSE);
      $this->db->where('user_id',$id);
      if($this->db->update('user_details')==TRUE){
          return TRUE;  
      }else{
          return FALSE;
      }
    }
    
    public function deleteSpeaker($id){
        $this->db->set('status','0');
        $this->db->set('last_update','NOW()',FALSE);
        $this->db->where('user_id',$id);
        if($this->db->update('user_details'))
        {
          $this->db->set('active','0');
          $this->db->set('last_update','NOW()',FALSE);
          $this->db->where('user_id',$id); 
          $this->db->update('users');
          return TRUE;  
        }else{
            return FALSE;
        }
        
    }
}
?>

