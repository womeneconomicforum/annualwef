<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Speakers extends MY_Controller{
    public function __construct() {
        parent::__construct();
        $this->data['title']="Add Speaker";
    }
    public function index(){
        //View Speakers
        
        $this->data['title']="Speakers";
        $this->main = 'admin/speakers/view-speakers'; // passing middle to function. change this for different views.
        $this->layout();  
    }
    public function addSpeakers(){
        $this->form_validation->set_rules('fname', 'First Name','trim|alpha|required');
        $this->form_validation->set_rules('lname', 'Last Name','trim|alpha');
        $this->form_validation->set_rules('designation', 'Designatino','trim|alpha');
        $this->form_validation->set_rules('country', 'Country','trim|alpha');
        $this->form_validation->set_rules('discription', 'Discription','trim');
        //$this->form_validation->set_rules('userfile', 'Profile Image','callback_do_upload');
        
        if($this->form_validation->run()==FALSE)
        {
            
            $this->main = 'admin/speakers/add-speakers'; // passing middle to function. change this for different views.
            $this->layout();  
        }else{
            $this->do_upload();
        }
    }
    public function do_upload(){
                
	$config['upload_path']   = './assets/uploads/speakers/';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	$config['max_size']	 = '1000';
	$config['max_width']     = '1024';
	$config['max_height']    = '768';
        $config['overwrite']     =true;
	$this->load->library('upload', $config);

	if ( ! $this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());
                $this->data['error']=$error;
                $this->main = 'admin/speakers/add-speakers'; // passing middle to function. change this for different views.
                $this->layout();
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $filename=$data['upload_data']['file_name'];
                $this->insertSpeaker($filename);
            }
    }
    public function insertSpeaker($filename){
       $speakerdata=array(
           'user_id'=>'user'.rand(1000, 10000),
           'first_name'=> $this->input->get_post('fname'),
           'last_name'=>  $this->input->get_post('lname'),
           'user_designation'=>  $this->input->get_post('designation'),
           'country'=>  $this->input->get_post('country'),
           'user_bio'=>$this->input->get_post('description'),
           'profile_image'=>$filename,
           'user_role'=>4,
           'is_advisory_board'=>$this->input->get_post('is_advisory'),
       );
       $this->load->model('admin/Speakers_Model');
       if($this->Speakers_Model->addSpeaker($speakerdata)==TRUE)
       {
         $this->data['success']="Record inserted Successfully !";  
         $this->main = 'admin/speakers/add-speakers'; // passing middle to function. change this for different views.
         $this->layout();  
       }else{
         $this->data['error']="Record insert Failed !";  
         $this->main = 'admin/speakers/add-speakers'; // passing middle to function. change this for different views.
         $this->layout();  
       }
    }
    
   
     
}
?>