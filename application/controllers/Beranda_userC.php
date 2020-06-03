<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda_userC extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_not_login_user();

        $this->load->model('BerandauserC_model');
    }

    public function index() {
    	$data = array();
        $data['customer'] = $this->BerandauserC_model->get();
        $data['content'] = $this->load->view('user/customer/index_customer', $data, true);

        $this->load->view('user/customer/index_customer', $data);
    }

    public function detail($id) {

        $this->load->model('BerandauserC_model');
        
        $query = $this->BerandauserC_model->getById($id);
        $data['detail'] = $query->result_array();
        $data['content'] = $this->load->view('user/customer/detail', $data, true);
        $this->load->view('user/customer/detail', $data);
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('kota_tujuan',$keyword);
        $query['customer'] = $this->db->get('tbl_uploadbarang')->result();
        $this->load->view('user/customer/index_hasil',$query);
    }

    public function pesan($id) {

        $this->load->model('BerandauserC_model');
        
        $query = $this->BerandauserC_model->getById($id);
        $data['pesan'] = $query->result_array();
        $data['content'] = $this->load->view('user/customer/pemesanan', $data, true);
        $this->load->view('user/customer/pemesanan', $data);
    }

    public function sortir()
    {
        $input = $this->input->post('pilih');


        if(isset($_POST['cek']) == 1 && $input == 1){
            $data['customer'] = $this->BerandauserC_model->getAsc();


        } elseif(isset($_POST['cek']) == 2 && $input == 2) {
            $data['customer'] = $this->BerandauserC_model->getDesc();


        } else {
            $data['customer'] = $this->BerandauserC_model->getAll();
        }
        $this->load->view('user/customer/index_hasil',$data);
    }
    public function tampilsemua(){
        $data = array();
        $data['customer'] = $this->BerandauserC_model->tampilsemua();
        $data['content'] = $this->load->view('user/customer/indextampilsemua', $data, true);

        $this->load->view('user/customer/indextampilsemua', $data);

    }

}