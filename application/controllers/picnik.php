<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class picnik extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function popup() {
        $this->load->view("picnik_popup");
    }
	
        function export() {
            $data = array(
		'file' => $this->input->get("file"),
	    );
            $this->load->view("picnik_close", $data);
	}

        function close() {
            $this->load->view("picnik_close");
	}
	    
	protected function fetchDetail($accessInfo) {
	    
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
