<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends MY_Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        if(!empty($userid=$this->session->userdata('userid')))
        {
          $this->data['title']="Dashboard";
          $this->main = 'admin/dashboard'; // passing middle to function. change this for different views.
          $this->layout();  
        }
        else{
            redirect('admin/login');
        }
    }
}
?>