<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
  public function __construct() {
      parent::__construct();
  }  
  public function index(){
      $userid=$this->session->userdata('userid');
      if(!empty($userid))
      {
          redirect('admin/dashboard');  
      }
      else{
        $this->validateLogin();  
      }
      
  }
  public function validateLogin()
  {
    $this->form_validation->set_rules('username','UserName','required|alpha_numeric');
    $this->form_validation->set_rules('password','Password','required');
    //$this->form_validation->set_rules('remember','Remember me','integer');
    if($this->form_validation->run()==FALSE)
    {
        $this->load->view('admin/login');  
    }
    else{
       $this->authLogin(); 
    }
  }
  public function authLogin(){
      $username=$this->input->get_post('username'); 
      $password=md5($this->input->get_post('password'));
      
      $this->load->model('admin/Users');
      $data=$this->Users->login($username,$password);
      if($data==FALSE){
        $message['error']="Invalid UserName & Password !";
        $this->load->view('admin/login',$message);  
      }else{
          foreach($data as $row)
          {
              $userid=$row['user_id'];
          }
          $this->userSession($userid);
          
      }
  }
  public function forgetPassword(){
      
  }
  public function logOut(){
      $this->session->unset_userdata('userid');
      redirect('admin/login');
  }
  
  public function userSession($userid){
   $this->session->set_userdata('userid', $userid); 
   $this->loginAttempt($userid);
    
  }
  public function loginAttempt($userid){
      $this->load->model('admin/Users'); 
      if($this->Users->loginAttempt($userid, $this->input->ip_address())==TRUE)
      {
        redirect('admin/dashboard');    
      }
  }
}
