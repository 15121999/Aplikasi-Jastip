<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PemesananBarang extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->library('form_validation');
		
	}

	public function create() {    


		$data = array();
		$data['index'] = $this->db->get('tbl_daftarpesanan')->result_array();

		$id_pengguna         	= htmlentities(strip_tags($_POST['id_pengguna']));
		$id_traveler        	= htmlentities(strip_tags($_POST['id_traveler']));
		$email_pemesan        	= htmlentities(strip_tags($_POST['email_pemesan']));
		$jenis         			= htmlentities(strip_tags($_POST['jenis']));
		$nama_barang        	= htmlentities(strip_tags($_POST['nama_barang']));
		$jumlah_barang    		= htmlentities(strip_tags($_POST['jumlah_barang']));
		$harga_barang    		= htmlentities(strip_tags($_POST['harga_barang']));
		$tgl_pesan    			= htmlentities(strip_tags($_POST['tgl_pesan']));
		$status_barang    		= htmlentities(strip_tags($_POST['status_barang']));
		$deskripsi_pesanan    		= htmlentities(strip_tags($_POST['deskripsi_pesanan']));



		$data = array(

			'id_pengguna'           => $id_pengguna,
			'id_traveler'           => $id_traveler,
			'email_pemesan'         => $email_pemesan,
			'jenis'           		=> $jenis,
			'nama_barang'           => $nama_barang,
			'jumlah_barang' 		=> $jumlah_barang,
			'harga_barang' 			=> $harga_barang,
			'tgl_pesan' 			=> $tgl_pesan,
			'status_barang' 		=> $status_barang,
			'deskripsi_pesanan' 	=> $deskripsi_pesanan,



		);	

			$this->db->insert('tbl_daftarpesanan', $data);
			$this->session->set_flashdata('success', 'Jadwal telah ditambahkan');

			echo "<script>
			alert('Pesanan berhasil dibuat');
			window.location='".site_url('Beranda_userC')."';
			</script>";


		



		// var_dump($data);
		// die();


	}


}
