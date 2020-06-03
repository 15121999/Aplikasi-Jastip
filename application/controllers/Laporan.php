<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Laporan_model');
        /* $this->load->model('jadwal_model');*/
    } 

    public function index() { 
        check_not_login();
        // die($startdate."===".$enddate);
        $data = array();
        $data['pesanan'] = $this->Laporan_model->get('');
        $data['content'] = $this->load->view('admin/Laporan/index', $data, true);
        $this->load->view('admin/layout', $data);

    }
    public function carilaporan()
    { 
        $startdate = $this->input->post('startdate',TRUE);
        $enddate = $this->input->post('enddate',TRUE);


        // var_dump($tglawal);
        // die;

        $sql1 = "SELECT * FROM detail_laporan WHERE status_barang='Pesanan Telah Selesai' AND tgl_pesan BETWEEN '$startdate' AND '$enddate' GROUP BY id_pesanan order by tgl_pesan desc   ";
        $data['laporan'] = $this->db->query($sql1)->result_array();
        $data['content'] = $this->load->view('admin/Laporan/laporan', $data, true);
        $this->load->view('admin/layout', $data);

    }
    

}