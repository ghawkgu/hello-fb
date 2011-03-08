<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class access_info extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
	    $appinfo = $this->config->item('appinfo');
	    $data['appinfo'] = $appinfo;
	    	    
	    $signedReq = $this->input->post('signed_request');
	    $encodedData = explode('.', $signedReq);
	    
	    $data['signed_request'] = count($encodedData) > 1 ? base64_decode($encodedData[1]) : '{}';
	    
	    $uri = uri_string();
	    $fragment = explode('#', $uri);
	    if(count($fragment) > 1) {
	        $this->fetchDetail($fragment[1]);
	    }
	    
		$this->load->view('access_info.php', $data);
	}
	
	protected function fetchDetail($accessInfo) {
	    
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */