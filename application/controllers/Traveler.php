<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Traveler extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Traveler_model');
    }
    // Controller Index Menu Traveler
    public function index() {
        check_not_login();
        $data = array();
        $data['traveler'] = $this->Traveler_model->get('');
        $data['content'] = $this->load->view('admin/datatraveler/datatraveler', $data, true);
        $this->load->view('admin/layout', $data);
    }   
    // COntroller Detail Traveler
    public function detail($id){
        $this->load->model('Traveler_model');
        $query = $this->Traveler_model->get_detail($id);
        $data['detail'] = $query->result_array();
        $data['content'] = $this->load->view('admin/datatraveler/detail', $data, true);
        $this->load->view('admin/layout', $data);
    }
    // Controller Mengaktifkan Traveler
    public function active_user($id){
        $query = $this->Traveler_model->active_user($id);

        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Akun Telah Di Aktifkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );    
        redirect ('Auth_user/index');
    }
    // Controller mMemblokir User Traveler
    public function deactive_user($id){
        $query= $this ->Traveler_model-> deactive_user($id);
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Akun Telah Di Non-Aktifkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );    
        redirect ('Auth_user/index');
    }
}