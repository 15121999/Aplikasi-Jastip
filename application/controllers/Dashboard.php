<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() { 
    	check_not_login();
        $data = array();
        $data['content'] = $this->db->get('tbl_pengguna');
        $data['contentt'] = $this->db->get('tbl_daftarpesanan');
        // $data['contenttt'] = $this->db->get('tbl_uploadbukti');
        $data['content'] = $this->load->view('admin/dashboard', $data, true);
        $this->load->view('admin/layout', $data);
    }
}
