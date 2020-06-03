<?php
 
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pesanan_model');
    } 
    // controller halaman index update status pesanan
    public function index() { 
        check_not_login();
        $data = array();
        $data['pesanan'] = $this->Pesanan_model->get('');
        $data['content'] = $this->load->view('admin/pesanan/index', $data, true);
        $this->load->view('admin/layout', $data);
    }
    // controller halaman belum dikonfirmasi 
    public function batal() { 
        check_not_login();
        $data = array();
        $data['pesanan'] = $this->Pesanan_model->getbatal('');
        $data['content'] = $this->load->view('admin/pesanan/pesanandibatalkan', $data, true);
        $this->load->view('admin/layout', $data);

    }
    // controller tombol pesanan dikonfirmasi
    // public function konfirmasi($id_pesanan){
    //     $this -> Pesanan_model  -> konfirmasi($id_pesanan);
    //     $this->session->set_flashdata(
    //         'konfirm',
    //         '<div class="alert alert-success alert-dismissible fade show" role="alert">
    //         Pesanan dikonfirmasi
    //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //         <span aria-hidden="true">&times;</span>
    //         </button>
    //         </div>'
    //     );    
    //     redirect ('Pesanan/belumdikonfirmasi');
    // }
    // controller halaman pesanan telah dikonfirmasi
    public function telahdikonfirmasi() { 
        check_not_login();
        $data = array();
        $data['pesanan'] = $this->Pesanan_model->gettelahdikonfirmasi('');
        $data['content'] = $this->load->view('admin/pesanan/pesanantelahdikonfirmasi', $data, true);
        $this->load->view('admin/layout', $data);
    }
    // controller tombol pesanan telah dibayar
    public function bayar($id_pesanan){
        $this -> Pesanan_model  -> bayar($id_pesanan);
        $this->session->set_flashdata(
            'bayar',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            pesanan telah dibayar
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );    
        redirect ('Pesanan/telahdikonfirmasi');
    }
    // cotroller halaman untu pesanan telah dibayar
    public function pesanantelahdibayar() { 
        check_not_login();
        $data = array();
        $data['pesanan'] = $this->Pesanan_model->gettelahdibayar('');
        $data['content'] = $this->load->view('admin/pesanan/pesanantelahdibayar', $data, true);

        $this->load->view('admin/layout', $data);
    }
    // controller tombol pesanan telah selesai
    public function selesai($id_pesanan){
        $this -> Pesanan_model  -> selesai($id_pesanan);
        $this->session->set_flashdata(
            'selesai',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            pesanan telah selesai
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );    
        redirect ('Pesanan/pesanantelahdibayar');
    }
}