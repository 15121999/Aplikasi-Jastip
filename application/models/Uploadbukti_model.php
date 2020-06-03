<?php  
defined('BASEPATH') or exit('No direct script access allowed');

class Uploadbukti_model extends CI_Model
{
	
	public function __construct() {
		parent::__construct();
	}
	public function get($id){
		
		// $query = $this->db->query("SELECT tbl_pengguna.nama_bank,nomor_rekening, tbl_daftarpesanan.id_pesanan, id_traveler, jenis, nama_barang, jumlah_barang, harga_barang, status_barang
		// 	FROM tbl_pengguna 
		// 	INNER JOIN tbl_daftarpesanan ON tbl_pengguna.id = tbl_daftarpesanan.id_pengguna WHERE tbl_daftarpesanan.id_pesanan = '$id'");
		// return $query;  




		$query = $this->db->query("SELECT tbl_pengguna.nama_bank,nomor_rekening, tbl_daftarpesanan.id_pesanan, id_traveler, jenis, nama_barang, jumlah_barang, harga_barang, status_barang, tbl_uploadbarang.harga
			FROM tbl_daftarpesanan 
			JOIN tbl_uploadbarang ON tbl_daftarpesanan.id_traveler = tbl_uploadbarang.id_pengguna 
			JOIN tbl_pengguna ON tbl_daftarpesanan.id_pengguna = tbl_pengguna.id
			WHERE tbl_daftarpesanan.id_pesanan = '$id'");
		return $query;  
	}

	// public function getById($id)
	// {
	// 	$query=$this->db->query("SELECT id_pesanan, rekening_tujuan, bukti_pembayaran from tbl_daftarpesanan INNER JOIN tbl_uploadbukti ON tbl_daftarpesanan.id_pengguna=tbl_uploadbukti.id_pengguna WHERE tbl_daftarpesanan.id_pengguna = '$id'");
	// 	return $query;
	// }


	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path']          = './assets/buktiPembayaran/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('input_gambar')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'id_pengguna'=>$this->input->post('id_pengguna'),
			'rekening_tujuan'=>$this->input->post('rekening_tujuan'),



			'nama_file' => $upload['file']['file_name'],
			'ukuran_file' => $upload['file']['file_size'],
			'tipe_file' => $upload['file']['file_type']
		);
		
		$this->db->insert('Uploadbukti', $data);
	}
	public function get_bukti($id = NULL)
	{
		$this->db->select('*');
		$this->db->from('tbl_daftarpesanan');
		if ($id != null) {
			$this->db->where('id_pesanan', $id);
		}
		$query = $this->db->get();
		return $query;

	}
}












?>