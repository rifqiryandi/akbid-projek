<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		parent::adminAuth();
	}

	public function index(){
		$this->load->view('admin/dashboard');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */

?>