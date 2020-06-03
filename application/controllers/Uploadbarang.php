<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Uploadbarang extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('user/traveler/upload_barang');
	}

	public function create() {    


		$this->form_validation->set_rules('harga', 'Harga', 'trim|numeric|required',
        array('numeric' => 'Kolom ini harus berisi harga jasa per-kg')
    	);

    	if ($this->form_validation->run() == false) {
         $this->load->view('user/traveler/upload_barang');
     	} else {

		$data = array();
		$data['index'] = $this->db->get('tbl_uploadbarang')->result_array();

		$id_pengguna         	 = htmlentities(strip_tags($_POST['id_pengguna']));
		$harga          		 = htmlentities(strip_tags($_POST['harga']));
		$maks_berat        		 = htmlentities(strip_tags($_POST['maks_berat']));
		$kota_tujuan    		 = htmlentities(strip_tags($_POST['kota_tujuan']));
		$kota_asal    			 = htmlentities(strip_tags($_POST['kota_asal']));
		$jadwal_keberangkatan    = htmlentities(strip_tags($_POST['jadwal_keberangkatan']));
		$jadwal_kedatangan    	 = htmlentities(strip_tags($_POST['jadwal_kedatangan']));
		$waktu_kedatangan    	 = htmlentities(strip_tags($_POST['waktu_kedatangan']));


		$data = array(
			
			'id_pengguna'           => $id_pengguna,
			'harga'           		=> $harga,
			'maks_berat'            => $maks_berat,
			'kota_tujuan' 			=> $kota_tujuan,
			'kota_asal' 			=> $kota_asal,
			'jadwal_keberangkatan'  => $jadwal_keberangkatan,
			'jadwal_kedatangan'		=> $jadwal_kedatangan,
			'waktu_kedatangan'		=> $waktu_kedatangan,

		);	


			$this->db->insert('tbl_uploadbarang', $data);
			$this->session->set_flashdata('success', 'Jadwal telah ditambahkan');

			echo "<script>
			alert('Jadwal berhasil di upload');
			window.location='".site_url('Uploadbarang')."';
			</script>";

		}

	}


}
