<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('admin/login');
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$chk_admin = $this->m_login->cekAdmin($username)[0]->hitung;

		if ($chk_admin != 0){
			$chk_pass = $this->m_login->cekAdminPass($username, $password)[0]->hitung;
			if ($chk_pass == 0){
				$alert = '<div class="alert alert-danger alert-dismissible">
					            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					            <center>Password Salah</center>
					          </div>';
				$this->session->set_flashdata('notif_login', $alert);
				$this->session->set_flashdata('s_username', $username);
				redirect('admin/login');
			}else{
				$this->session->set_userdata('admin_id_sess', $this->m_admin->getAdminByUsername($username)[0]->admin_id);
				redirect('admin/dashboard');
			}		
		}else{
			$alert = '<div class="alert alert-danger alert-dismissible">
			            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			            <center>Username Tidak Ada</center>
			          </div>';
			$this->session->set_flashdata('notif_login', $alert);
			redirect('admin/login');
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
?>