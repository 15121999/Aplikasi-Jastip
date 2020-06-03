<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StatusPesanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_not_login_user();

        $this->load->model('StatusPesanan_model');


    }

    public function index() {

        $id = $this->session->userdata('id');

        $data = array();
        $data['pesanan'] = $this->StatusPesanan_model->get()->result_array();
        $data['upload'] = $this->StatusPesanan_model->getupload()->result_array();
        $data['content'] = $this->load->view('user/customer/status_pesanan', $data, true);
        $this->load->view('user/customer/status_pesanan', $data);
    }
    public function status_diproses() {

        $id = $this->session->userdata('id');

        $data = array();
        $data['pesanan'] = $this->StatusPesanan_model->pesananproses()->result_array();
        $data['content'] = $this->load->view('user/customer/status_pesanan_proses', $data, true);
        $this->load->view('user/customer/status_pesanan_proses', $data);
    }

    public function status_selesai() {

        $id = $this->session->userdata('id');

        $data = array();
        $data['pesanan'] = $this->StatusPesanan_model->pesananselesai()->result_array();
        $data['content'] = $this->load->view('user/customer/status_pesanan_selesai', $data, true);
        $this->load->view('user/customer/status_pesanan_selesai', $data);
    }

        public function status_batal() {

        $id = $this->session->userdata('id');

        $data = array();
        $data['pesanan'] = $this->StatusPesanan_model->pesananbatal()->result_array();
        $data['content'] = $this->load->view('user/customer/status_pesanan_batal', $data, true);
        $this->load->view('user/customer/status_pesanan_batal', $data);
    }


    public function status_dibatalkan($id_pesanan){
        $this->StatusPesanan_model->pesanandibatalkan($id_pesanan);
        $this->session->set_flashdata(
            'konfirm',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Pesanan Telah Selesai
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );    
        redirect ('StatusPesanan');
    }



    public function updatestatus($id) {

        $this->load->model('StatusPesanan_model');
        
        $query = $this->StatusPesanan_model->tangkap($id);
        $data['update'] = $query->result_array();
        $data['content'] = $this->load->view('user/customer/update_status', $data, true);
        $this->load->view('user/customer/update_status', $data);
    }
    public function ubahdata(){
    	$id = $this->session->userdata('id');
        // $data['edit'] = $this->StatusPesanan_model->getById($id)->row_array();
        $this->form_validation->set_rules('id_pesanan', 'id_pesanan', 'required');
        $this->form_validation->set_rules('konfirmasi_customer', 'konfirmasi_customer', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('user/traveler/update_status', $data);

        } else {

          $id_pesanan  = htmlentities(strip_tags($_POST['id_pesanan']));
          $konfirmasi_customer          = htmlentities(strip_tags($_POST['konfirmasi_customer']));


          $data = array(
            'id_pesanan'         => $id_pesanan,
            'konfirmasi_customer'         => $konfirmasi_customer,


        );
          $this->db->where('id_pesanan', $id_pesanan);
          $this->db->update('tbl_daftarpesanan', $data);

          
          $this->session->set_flashdata('success', 'Data telah diupdate');
          echo "<script>
          alert('Status berhasil di update');
          window.location='".site_url('StatusPesanan/status_diproses')."';
          </script>";
      }
  }
  public function lihatbukti($id) {

    $this->load->model('StatusPesanan_model');

    $query = $this->StatusPesanan_model->lihatbukti($id);
    $data['bukti'] = $query->result_array();
    $data['content'] = $this->load->view('user/customer/lihat_bukti', $data, true);
    $this->load->view('user/customer/lihat_bukti', $data);

}
}



