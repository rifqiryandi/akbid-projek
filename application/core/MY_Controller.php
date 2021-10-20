<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// load model here
		$this->load->model('m_login');
		$this->load->model('m_admin');
	}

	public function adminAuth(){
		if (is_null($this->session->userdata('admin_id_sess'))) {
			$this->alertLogin('admin');
		}else{
			$data['s_user'] = $this->m_admin->getAdminById($this->session->userdata('admin_id_sess'))[0];
			$this->load->view('admin/header', $data);
		}
	}

	function alertLogin($asal){
		$alert = '<div class="alert alert-danger alert-dismissible">
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        <center>Session Expired</center>
		      </div>';
		$this->session->set_flashdata('notif_login', $alert);
		redirect('admin/login');
	}
}

/* End of file mY_controller.php */
/* Location: ./application/controllers/mY_controller.php */
