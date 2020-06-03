<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProfilTraveler_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	// /*model get jadwal */
	// public function get() {
	// 	$this->db->order_by('nama_lengkap', 'ASC');
	// 	$this->db->where('id_pengguna', =>$this->session->userdata($id))

	// 	$query = $this->db->get('tbl_pengguna');
	// 	return $query->result_array();
	// }


	/*model get jadwal by id nya*/
	public function getById($id)
	{
		return $this->db->get_where('tbl_pengguna', ['id' => $id]);

	}
	public function ubahdatastatus()
	  {
		        $nama_lengkap 			= htmlentities(strip_tags($_POST['nama_lengkap']));
				$email 			= htmlentities(strip_tags($_POST['email']));
				$jenis_kelamin 		= htmlentities(strip_tags($_POST['jenis_kelamin']));
				$alamat 			= htmlentities(strip_tags($_POST['alamat']));
				$nomor_hp 	= htmlentities(strip_tags($_POST['nomor_hp']));
				$nomor_rekening 			= htmlentities(strip_tags($_POST['nomor_rekening']));
				$nama_bank 			= htmlentities(strip_tags($_POST['nama_bank']));
				$nama_pemillik 			= htmlentities(strip_tags($_POST['nama_pemillik']));

				$data = array(
					'nama_lengkap'		=> $nama_lengkap,
					'email'				=> $email,
					'jenis_kelamin'		=> $jenis_kelamin,
					'alamat'			=> $alamat,
					'nomor_hp'			=> $nomor_hp,
					'nomor_rekening'	=> $nomor_rekening,
					'nama_bank'			=> $nama_bank,
					'nama_pemillik'		=> $nama_pemillik,

				);
		        $this->db->where('id', $this->session->userdata('id'));
		        $this->db->update('tbl_pengguna', $data);

		    }
	// public function get_detail($id = NULL)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('tbl_pengguna');
	// 	$this->db->where($id = echo $this->session->userdata);

	// 	if ($id != null) {
	// 		$this->db->where('id_pengguna', = $this->session->userdata($id));
	// 	}
	// 	$query = $this->db->get();
	// 	return $query;

	// }
}
