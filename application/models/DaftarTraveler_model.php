<?php  
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarTraveler_model extends CI_Model
{
	
    public function __construct() {
        parent::__construct();
    }
    	public function view(){
		return $this->db->get('DaftarTraveler')->result();
	}
	
	// Fungsi untuk melakukan proses upload file
	public function upload(){
		$config['upload_path'] = './gambar/';
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
			'kode_traveler'=>$this->input->post('kode_traveler'),
			'nama_lengkap'=>$this->input->post('nama_lengkap'),
			'email'=>$this->input->post('email'),
			'umur'=>$this->input->post('umur'),
			'nomor_hp'=>$this->input->post('nomor_hp'),
			'nomor_rekening'=>$this->input->post('nomor_rekening'),
			'nama_bank'=>$this->input->post('nama_bank'),
			'nama_pemilik'=>$this->input->post('nama_pemilik'),




			'nama_file' => $upload['file']['file_name'],
			'ukuran_file' => $upload['file']['file_size'],
			'tipe_file' => $upload['file']['file_type']
		);
		
		$this->db->insert('DaftarTraveler', $data);
	}
}












?>