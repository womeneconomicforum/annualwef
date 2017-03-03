<?php

/**
 * Controller for Annual wef page
 * Developed By: Shailesh Saraswat
 * Development started on: 21 Feb 2017
 **/



if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Annual_wef extends CI_Controller {

 public function __construct() {
      parent::__construct();
     
      $this->load->model('Speakers_Model', 'speaker_list');
       
      
  }  


    public function index(){
        
         $pageTitle = "Annual WEF New Delhi May 8 - 13th 2017";
         $data['page_title'] = "$pageTitle | " . SITE_NAME;
         $data['title_name'] = $pageTitle;
           $this->load->get_view("annual_wef_view",$data);

    }
    
   //function to show program details of wef 2017
    public function program_details(){
        
         $pageTitle = "WEF 2017 Program Details";
         $data['page_title'] = "$pageTitle | " . SITE_NAME;
         $data['title_name'] = $pageTitle;
         $this->load->get_view("program_details_view",$data);
        
    }
    
    //function to show annual wef speaker list 2017
     public function annual_speakers_2017(){
        
       $data['speakers'] = $this->speaker_list->viewSpeaker();     //get data of all the speaker
       $data['Sp_country'] = $this->speaker_list->Speakers_country();

         $pageTitle = "WEF 2017 Speakers";
         $data['page_title'] = "$pageTitle | " . SITE_NAME;
         $data['title_name'] = $pageTitle;
         $this->load->get_view("wef_annual_speakers",$data);
        
    }
    
    
    
    
}


?>
