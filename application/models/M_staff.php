<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_staff extends CI_Model
{

	public function getAllStaff()
	{
		$sql = "SELECT * FROM tb_staff";
		return $this->db->query($sql)->result();
	}

	public function getStaffById($staff_id)
	{
		$sql = "SELECT * FROM tb_staff WHERE staff_id = $staff_id";
		return $this->db->query($sql)->result();
	}

	public function inputStaff($nama_staff, $pendidikan_terakhir, $nip_staff, $jabatan, $email, $nomor_telp, $id_admin, $foto, $status)
	{
		$data = array(
			'nama' => $nama_staff,
			'pendidikan_terakhir' => $pendidikan_terakhir,
			'nip_staff' => $nip_staff,
			'jabatan' => $jabatan,
			'email' => $email,
			'nomor_telp' => $nomor_telp,
			'foto' => $foto,
			'status' => $status,
			'admin_id' => $id_admin
		);
		$this->db->insert('tb_staff', $data);
	}

	public function editStaff($nama_staff, $pendidikan_terakhir, $nip_staff, $jabatan, $email, $nomor_telp, $staff_id, $foto, $status)
	{
		$data = array(
			'nama' => $nama_staff,
			'pendidikan_terakhir' => $pendidikan_terakhir,
			'nip_staff' => $nip_staff,
			'jabatan' => $jabatan,
			'email' => $email,
			'nomor_telp' => $nomor_telp,
			'foto' => $foto,
			'status' => $status
		);
		if ($foto != "") {
			$data['foto'] = $foto;
		}
		$isi = $this->db->where('staff_id', $staff_id);
		$this->db->update('tb_staff', $data);
	}

}
