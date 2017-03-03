<?php
class Speakers_Model extends CI_Model{
   
    public function viewSpeaker()
    {
         $arr = array('first_name','last_name','user_bio','country','profile_image','user_designation',);
        
        
        $this->db->select($arr);
       
        $this->db->where('status','1');
        $this->db->where('is_advisory_board','false');
        $this->db->where('user_role','3');
        $this->db->order_by('id','DESC');
        $query=$this->db->get('user_details');
//        echo $this->db->last_query();
//        die;
        if($query->num_rows()>=1)
        {
           return json_encode($query->result_array()); 
        }
        else{
            return false;
        }
    }


 public function Speakers_country()
    {

        $this->db->select('DISTINCT(country) as c_name');
        $this->db->where('status','1');
        $this->db->where('is_advisory_board','false');
        $this->db->where('user_role','3');
        $this->db->order_by('id','DESC');
        $query=$this->db->get('user_details');
        if($query->num_rows()>=1)
        {
           return array_column($query->result_array(),'c_name'); 
        }
        else{
            return false;
        }
    }
    
 
   
        
    
}
?>

