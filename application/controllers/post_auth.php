<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class post_auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index($tab=null)
	{
		$this->load->view('callback_info.php');
	}
	
	protected function fetchDetail($accessInfo) {
	    
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
