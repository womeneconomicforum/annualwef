<?php

class MY_Controller extends CI_Controller {

  //set the class variable.
   var $template  = array();
   var $data      = array();
   //Load layout    
   public function layout() {
     // making temlate and send data to view.
     $this->template['header'] = $this->load->view('admin/header', $this->data, true);
     $this->template['topbar'] = $this->load->view('admin/topbar', $this->data, true);
     $this->template['leftsidebar']= $this->load->view('admin/leftsidebar', $this->data, true);
     $this->template['main'] = $this->load->view($this->main, $this->data, true);
     $this->template['footerbar'] = $this->load->view('admin/footerbar', $this->data, true);
     $this->template['footer'] = $this->load->view('admin/footer', $this->data, true);
     $this->load->view('admin/index', $this->template);
   }
}

class Parent_admin_controller extends MY_Controller {
    function __construct() {
        parent::__construct();
//        if ($this->uri->rsegments[2] != 'login') {
//            $this->redirect_not_logged();
//            if (defined('USER_TYPE') && USER_TYPE != 'A' AND USER_TYPE != 'S')
//                show_404();
//        }
    }

}
