<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class access_info extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
	    $encodedData = $this->input->post('signed_request');
	    $data['signed_request'] = json_decode(base64_decode($encodedData));
	    
		$this->load->view('access_info.php', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */