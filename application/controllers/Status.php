<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller {

    public function __construct() {
        parent::__construct();

         $this->load->model('Status_model');
    }

    public function index() {
        $data = array();
        $data['status'] = $this->Status_model->get();
        $data['content'] = $this->load->view('admin/status_pemesanan/index', $data, true);

        $this->load->view('layout', $data);


    }
    public function edit($id)
    {
            
            $data['status'] = $this->Status_model->getById($id);
            $this->form_validation->set_rules('n_customer', 'n_customer', 'required');
            $this->form_validation->set_rules('n_barang', 'n_barang', 'required');
            

            if ($this->form_validation->run() == false) {
                $data['content'] = $this->load->view('admin/status_pemesanan/edit', $data, true);
                $this->load->view('layout', $data);

            } else {
                $this->status_model->ubahdatastatus();
                $this->session->set_flashdata('success', 'Jadwal telah diubah');
                        redirect('status');
            }
                

    }       

}