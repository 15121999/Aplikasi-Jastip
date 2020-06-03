<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller {

    public function __construct() {
        parent::__construct(); 

        $this->load->model('Customer_model');
    }  
    public function index() {
        check_not_login();
        $data = array();
        $data['customer'] = $this->Customer_model->get('');
        $data['content'] = $this->load->view('admin/datacustomer/index', $data, true);
        $this->load->view('admin/layout', $data);
    }
	// Function Detail Pada Customer
    public function detail($id){
        $this->load->model('Customer_model');
        $query = $this->Customer_model->get_detail($id);
        $data['detail'] = $query->result_array();
        $data['content'] = $this->load->view('admin/datacustomer/detail', $data, true);
        $this->load->view('admin/layout', $data);

    }
    // Function Mengaktifkan customer user
    public function active_user($id){
        $this -> Customer_model  -> active_user($id);
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Akun Telah Di Aktifkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );    
        redirect ('Customer ');
    }
    // memblokir customer user
    public function deactive_user($id){
        $this -> Customer_model  -> deactive_user($id);
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Akun Telah Di Non-Aktifkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );    
        redirect ('Customer ');
    }
}
