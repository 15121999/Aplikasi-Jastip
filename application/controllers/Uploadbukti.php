<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Uploadbukti extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_not_login_user();

        $this->load->model('Uploadbukti_model');
    }

    public function index() {
        $data = array();
        $data['bukti'] = $this->Uploadbukti_model->get();
        $data['content'] = $this->load->view('user/customer/upload_bukti', $data, true);

        $this->load->view('user/customer/upload_bukti', $data);
    }

    public function create() {    
        

     $data = array();
     $data['index'] = $this->db->get('tbl_uploadbukti')->result_array();
     
     
     $id_pengguna         = htmlentities(strip_tags($_POST['id_pengguna']));
     $id_traveler         = htmlentities(strip_tags($_POST['id_traveler']));
     $id_pesanan         = htmlentities(strip_tags($_POST['id_pesanan']));
     $nomor_rekening         = htmlentities(strip_tags($_POST['nomor_rekening']));
     $nama_bank        = htmlentities(strip_tags($_POST['nama_bank']));
     $rekening_tujuan        = htmlentities(strip_tags($_POST['rekening_tujuan']));
     $bukti_pembayaran    = $_FILES['bukti_pembayaran']['name'];

                // var_dump($bukti_pembayaran);
                // die();

     

     $data = array(
        'id_pengguna'           => $id_pengguna,
        'id_traveler'           => $id_traveler,
        'id_pesanan'           => $id_pesanan,
        'nomor_rekening'           => $nomor_rekening,
        'nama_bank' => $nama_bank, 
        'rekening_tujuan'           => $rekening_tujuan,
        'bukti_pembayaran' => $bukti_pembayaran, 
    );	

     $config['upload_path']          = './assets/buktiPembayaran';
     $config['allowed_types']        = 'gif|jpg|png';
     

     $this->load->library('upload', $config);

     if ( ! $this->upload->do_upload('bukti_pembayaran'))
     {
        $error = array('error' => $this->upload->display_errors());
        print_r($error);

        
    }
    else
    {
     
        $this->db->insert('tbl_uploadbukti', $data);

        $this->db->query("UPDATE tbl_daftarpesanan SET id_upload = 1 WHERE id_pesanan = '$id_pesanan'");

        $this->session->set_flashdata('success', 'Bukti pembayaran berhasil diupload');

        echo "<script>
        alert('Bukti Pembayaran berhasil di upload');
        window.location='".site_url('StatusPesanan')."';
        </script>";

    }

    

				 // var_dump($data);
     //             die();
    
    
}
public function bukti($id){
    $this->load->model('Uploadbukti_model');
    
    $query = $this->Uploadbukti_model->get($id);
    $data['bukti'] = $query->result_array();
    $data['content'] = $this->load->view('user/customer/upload_bukti', $data, true);
    $this->load->view('user/customer/upload_bukti', $data);
}

}
