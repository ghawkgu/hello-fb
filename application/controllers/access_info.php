<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class access_info extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('access_info.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */