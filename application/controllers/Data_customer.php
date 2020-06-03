<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_customer extends CI_Controller {

    public function __construct() {
        parent::__construct();

         $this->load->model('Customer_model');
    }

    public function index() {
        $data = array();
        $data['customer'] = $this->Customer_model->get();
        $data['content'] = $this->load->view('admin/data_customer/index', $data, true);

        $this->load->view('layout', $data);


    }

}