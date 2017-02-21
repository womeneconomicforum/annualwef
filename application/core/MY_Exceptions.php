<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Exceptions extends CI_Exceptions {
	function __construct() {
			parent::__construct();
	}
	
	public function show_404($page = 'layouts/error404',$error = '') {
        
          $CI =&get_instance();
        $CI->load->view($page);
        echo $CI->output->get_output();
        exit;
    }
}
?>