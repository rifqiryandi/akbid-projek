<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class logout extends CI_Controller {

		public function index(){
			$this->session->unset_userdata('admin_id_sess');
			redirect('admin/login');
		}

	}

	/* End of file logout.php */
	/* Location: ./application/controllers/logout.php */
 ?>