<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class access_info extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function popup() {
        $this->load->view("picnik_popup");
    }
	
	protected function fetchDetail($accessInfo) {
	    
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
