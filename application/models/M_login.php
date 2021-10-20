<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

	// PENGECEKAN LOGIN ADMIN
	function cekAdmin($username){
		$sql = "SELECT count(admin_id) AS hitung FROM tb_admin WHERE username = '$username'";
		return $this->db->query($sql)->result();
	}

	function cekAdminPass($username, $password){
		$sql = "SELECT count(admin_id) AS hitung FROM tb_admin WHERE username = '$username' AND password = '$password'";
		return $this->db->query($sql)->result();
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */