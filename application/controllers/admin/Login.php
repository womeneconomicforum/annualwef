<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller
{
  public function __construct() {
      parent::__construct();
  }  
  public function index(){
      $this->validateLogin();
  }
  public function validateLogin()
  {
    $this->form_validation->set_rules('username','UserName','required|alpha_numeric');
    $this->form_validation->set_rules('password','Password','required');
    $this->form_validation->set_rules('remember','Remember me','integer');
    if($this->form_validation->run()==FALSE)
    {
        $this->load->view('admin/login/index');  
    }
    else{
       $this->authLogin(); 
    }
  }
  public function authLogin(){
      $username=$this->input->get_post('username'); 
      $password=$this->input->get_post('username');
      
      $this->load->model('admin/Users');
      $data=$this->Users->login($username,$password);
      if($data==FALSE){
        $this->load->view('admin/login/index');  
      }else{
          redirect('admin/dashboard');  
      }
  }
  public function forgetPassword(){
      
  }
  public function logOut(){
      
  }
  public function loginAttempt(){
      
  }
  public function userSession(){
      
  }
  
}
