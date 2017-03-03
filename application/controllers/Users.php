<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Users extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->model('user');
    }
    
    function add(){
        if($this->input->post('userSubmit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['image']['name'])){

                $data = $this->input->post();
                $img = time() . "." . getExt($_FILES['image']['name']);
 
                $this->user->uploadPic($data);

            }else{
                
                $picture = '';
            }
            
            //Prepare array of user data
            $userData = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'picture' => $img
            );
             
//            print_r($userData); die;
            //Pass user data to model
            $insertUserData = $this->user->insert($userData);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
            }else{
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
            }
        }
        //Form for adding user data
        $this->load->view('add');
    }
}