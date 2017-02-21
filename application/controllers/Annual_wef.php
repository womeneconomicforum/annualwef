<?php

/**
 * Controller for Annual wef page
 * Developed By: Shailesh Saraswat
 * Development started on: 21 Feb 2017
 **/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Annual_wef extends Parent_admin_controller {

    public function index(){
        
         $pageTitle = "Annual WEF New Delhi May 8 - 13th 2017";
         $data['page_title'] = "$pageTitle | " . SITE_NAME;
           $this->load->get_view("annual_wef_view",$data);

    }
    
    
}


?>
