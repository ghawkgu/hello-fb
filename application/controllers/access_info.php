<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class access_info extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
	    $signedReq = $this->input->post('signed_request');
	    $encodedData = explode('.', $signedReq);
	    $data['signed_request'] = base64_decode($encodedData[1]);
	    
		$this->load->view('access_info.php', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */