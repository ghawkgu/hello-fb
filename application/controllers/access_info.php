<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class access_info extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index($tab=null)
	{
	    $appinfo = $this->config->item('appinfo');
	    $data['appinfo'] = $appinfo;
	    	    
	    $signedReq = $this->input->post('signed_request');
	    $encodedData = explode('.', $signedReq);
	    
	    $data['signed_request'] = count($encodedData) > 1 ? base64_decode($encodedData[1]) : '{}';
	    $data['user_info'] = null;
	    
	    $accessInfo = json_decode($data['signed_request'], true);
	    if (isset($accessInfo['oauth_token']) && isset($accessInfo['user_id'])) {
	        $userInfo = file('https://graph.facebook.com/' . $accessInfo['user_id'] . "?access_token=" . $accessInfo['oauth_token']);
	        $data['user_info'] = $userInfo;
	    }

            $this->load->library('fbsdk');
	    $data['sr'] = $this->fbsdk->getSignedRequest();
	    
	    $this->load->view('access_info.php', $data);
	}
	
	protected function fetchDetail($accessInfo) {
	    
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
