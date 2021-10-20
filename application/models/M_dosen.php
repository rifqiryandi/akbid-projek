<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_dosen extends CI_Model {

	public function getAllDosen(){
		$sql = "SELECT * FROM tb_dosen";
		return $this->db->query($sql)->result();
	}

	public function getDosenById($dosen_id){
		$sql = "SELECT * FROM tb_dosen WHERE dosen_id = $dosen_id";
		return $this->db->query($sql)->result();
	}

	public function inputDosen($nama_dosen, $nidn_dosen, $nip_dosen, $prodi, $email, $jabatan_struktural, $nomor_telp, $id_admin, $foto, $status)
	{
		$data = array(
			'nama' => $nama_dosen,
			'nidn_dosen' => $nidn_dosen,
			'nip_dosen' => $nip_dosen,
			'prodi' => $prodi,
			'email' => $email,
			'jabatan_struktural' => $jabatan_struktural,
			'nomor_telp' => $nomor_telp,
			'foto' => $foto,
			'status' => $status,
			'admin_id' => $id_admin
		);
		$this->db->insert('tb_dosen', $data);
	}

	public function editDosen($nama_dosen, $nidn_dosen, $nip_dosen, $prodi, $email, $jabatan_struktural, $nomor_telp, $foto, $status, $dosen_id)
	{
		$data = array(
			'nama' => $nama_dosen,
			'nidn_dosen' => $nidn_dosen,
			'nip_dosen' => $nip_dosen,
			'prodi' => $prodi,
			'email' => $email,
			'jabatan_struktural' => $jabatan_struktural,
			'nomor_telp' => $nomor_telp,
			'status' => $status
		);
		if ($foto != "") {
			$data['foto'] = $foto;
		}
		$isi = $this->db->where('dosen_id', $dosen_id);
		$this->db->update('tb_dosen', $data);
	}


}
