<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PemesananBarang_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get(){
    	$id = $this->session->userdata('id');
        $query = $this->db->query("SELECT * FROM tbl_daftarpesanan WHERE id_pengguna = '$id'");
    }

    /*model get jadwal */
}
