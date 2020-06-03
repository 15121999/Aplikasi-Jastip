<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_pesananT extends CI_Controller {

	public function __construct() {
		parent::__construct();
		check_not_login_user();

		$this->load->model('Daftarpesanan_model');
	}

	public function index() {

        $id = $this->session->userdata('id');

        $data = array();
        $data['pesanan'] = $this->Daftarpesanan_model->get()->result_array();
        $data['content'] = $this->load->view('user/traveler/daftar_pesanan', $data, true);
		        // $data['sum'] = $this->Daftarpesanan_model->get_sum();
        $this->load->view('user/traveler/daftar_pesanan', $data);
    }
    public function create() {    


      $data = array();
      $data['index'] = $this->db->get('tbl_daftarpesanan')->result_array();

      $id_pengguna         = htmlentities(strip_tags($_POST['id_pengguna']));
      $nama_barang         = htmlentities(strip_tags($_POST['nama_barang']));
      $jenis         = htmlentities(strip_tags($_POST['jenis']));

      $harga_jasa         = htmlentities(strip_tags($_POST['harga_jasa']));

      $harga_barang        = htmlentities(strip_tags($_POST['harga_barang']));
		// $foto_barang    = $_FILES['foto_barang']['name'];




                // var_dump($foto_ktp);
                // die();



      $data = array(
         'id_pengguna'           => $id_pengguna,

         'nama_barang'           => $nama_barang,
         'jenis'           => $jenis,


         'harga_jasa'           => $harga_jasa,

         'harga_barang'           => $harga_barang,
			// 'foto_barang' => $foto_barang, 


     );	



      $this->db->insert('tbl_daftarpesanan', $data);

      $this->session->set_flashdata('success', 'Jadwal telah ditambahkan');

      echo "<script>
      alert('Barang berhasil di upload');
      window.location='".site_url('Daftar_pesananT')."';
      </script>";






		// var_dump($data);
		// die();


  }
  public function edit($id){
    $this->load->model('Daftarpesanan_model');

    $query = $this->Daftarpesanan_model->dapat($id_pesanan);
    $data['edit'] = $query->result_array();
    $data['content'] = $this->load->view('user/traveler/edit_status', $data, true);

    $this->load->view('user/traveler/edit_status', $data);
}
public function ubahdata(){
   $id = $this->session->userdata('id');
        // $data['edit'] = $this->Daftarpesanan_model->getById($id)->row_array();
   $this->form_validation->set_rules('id_pesanan', 'id_pesanan', 'required');


   $this->form_validation->set_rules('status_traveler', 'status_traveler', 'required');

   if ($this->form_validation->run() == false) {

    $this->load->view('user/traveler/edit_status', $data);

} else {

  $id_pesanan  = htmlentities(strip_tags($_POST['id_pesanan']));
  $status_traveler          = htmlentities(strip_tags($_POST['status_traveler']));




  $data = array(
    'id_pesanan'         => $id_pesanan,
    'status_traveler'         => $status_traveler,




);
  $this->db->where('id_pesanan', $id_pesanan);
  $this->db->update('tbl_daftarpesanan', $data);


  $this->session->set_flashdata('success', 'Data telah diupdate');
  echo "<script>
  alert('Status berhasil di update');
  window.location='".site_url('Daftar_pesananT/telahbayar')."';
  </script>";
}
}
public function updatestatus($id) {

    $this->load->model('Daftarpesanan_model');

    $query = $this->Daftarpesanan_model->getById($id);
    $data['update'] = $query->result_array();
    $data['content'] = $this->load->view('user/traveler/edit_status', $data, true);
    $this->load->view('user/traveler/edit_status', $data);
}

public function detail_pemesan($id) {

    $this->load->model('Daftarpesanan_model');

    $query = $this->Daftarpesanan_model->detailpesan($id);
    $data['detailpesan'] = $query->result_array();
    $data['content'] = $this->load->view('user/traveler/detail', $data, true);
    $this->load->view('user/traveler/detail', $data);
}

public function telahbayar(){
    $id = $this->session->userdata('id');

    $data = array();
    $data['pesanan'] = $this->Daftarpesanan_model->telahbayar()->result_array();
    $data['content'] = $this->load->view('user/traveler/daftar_pesanan_bayar', $data, true);
                // $data['sum'] = $this->Daftarpesanan_model->get_sum();
    $this->load->view('user/traveler/daftar_pesanan_bayar', $data);
}

public function telahselesai(){
    $id = $this->session->userdata('id');

    $data = array();
    $data['pesanan'] = $this->Daftarpesanan_model->telahselesai()->result_array();
    $data['content'] = $this->load->view('user/traveler/daftar_pesanan_selesai', $data, true);
                // $data['sum'] = $this->Daftarpesanan_selesai_model->get_sum();
    $this->load->view('user/traveler/daftar_pesanan_selesai', $data);
}
public function dibatalkan(){
    $id = $this->session->userdata('id');

    $data = array();
    $data['pesanan'] = $this->Daftarpesanan_model->dibatalkan()->result_array();
    $data['content'] = $this->load->view('user/traveler/daftar_pesanan_batal', $data, true);
                // $data['sum'] = $this->Daftarpesanan_batal_model->get_sum();
    $this->load->view('user/traveler/daftar_pesanan_batal', $data);
}
public function lihatbukti($id) {

    $this->load->model('Daftarpesanan_model');

    $query = $this->Daftarpesanan_model->lihatbukti($id);
    $data['bukti'] = $query->result_array();
    $data['content'] = $this->load->view('user/traveler/lihat_bukti', $data, true);
    $this->load->view('user/traveler/lihat_bukti', $data);

}
}