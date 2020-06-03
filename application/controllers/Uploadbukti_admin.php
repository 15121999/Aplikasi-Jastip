<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Uploadbukti_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Uploadbukti_model_admin');
    }
    // Controller halaman index update pembayaran 
    public function index() {
        $data = array();
        
        $data['bukti'] = $this->Uploadbukti_model_admin->get('');
        $data['content'] = $this->load->view('admin/uploadbukti/index', $data, true);

        $this->load->view('admin/layout', $data);
    }
    // Controller konfirmasi pembayaran
    public function konfirmasi($id_upload){
        $this -> Uploadbukti_model_admin  -> konfirmasi($id_upload);
        $this->session->set_flashdata(
            'konfirm',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Pembayaran Terkonfirmasi
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );    
        redirect ('Uploadbukti_admin ');
    }
    // controller detail pembayaran
    public function detail($id_upload){

        $this->load->model('Uploadbukti_model_admin');

        $query = $this->Uploadbukti_model_admin->get_detail($id_upload);
        $data['detail'] = $query->result_array();
        $data['content'] = $this->load->view('admin/uploadbukti/detail', $data, true);
        $this->load->view('admin/layout', $data);
    }

     public function unkonfirmasi($id_upload){
        $this -> Uploadbukti_model_admin  -> unkonfirmasi($id_upload);
        $this->session->set_flashdata(
            'konfirm',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Pembayaran Belum Dikonfirmasi
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );    
        redirect ('Uploadbukti_admin ');
    }           
} 