<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProfilCustomer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        check_not_login_user();
        $this->load->model('ProfilCustomer_model');
    }

    public function index() {
        $this->load->view('user/customer/profil');
    }
    public function detail() {
        $id = $this->session->userdata('id');

        // $query = $this->ProfilCustomer_model->getById($id);
        $data['detail'] = $this->ProfilCustomer_model->getById($id)->row_array();
        $data['content'] = $this->load->view('user/customer/profil', $data, true);
        $this->load->view('user/customer/profil', $data);
    }
    public function edit(){

        $id = $this->session->userdata('id');
        $data['edit'] = $this->ProfilCustomer_model->getById($id)->row_array();

        // $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_pengguna.email]', [
        // 'is_unique' => 'Email ini sudah terdaftar!'
        // ]);
        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('user/customer/edit_profil', $data);


        } else {

           $nama_lengkap            = htmlentities(strip_tags($_POST['nama_lengkap']));
                $email          = htmlentities(strip_tags($_POST['email']));
                $jenis_kelamin      = htmlentities(strip_tags($_POST['jenis_kelamin']));
                $alamat             = htmlentities(strip_tags($_POST['alamat']));
                $nomor_hp   = htmlentities(strip_tags($_POST['nomor_hp']));
                $nomor_rekening             = htmlentities(strip_tags($_POST['nomor_rekening']));
                $nama_bank          = htmlentities(strip_tags($_POST['nama_bank']));
                $nama_pemillik          = htmlentities(strip_tags($_POST['nama_pemillik']));

                $data = array(
                    'nama_lengkap'      => $nama_lengkap,
                    'email'             => $email,
                    'jenis_kelamin'     => $jenis_kelamin,
                    'alamat'            => $alamat,
                    'nomor_hp'          => $nomor_hp,
                    'nomor_rekening'    => $nomor_rekening,
                    'nama_bank'         => $nama_bank,
                    'nama_pemillik'     => $nama_pemillik,

                );
                $this->db->where('id', $this->session->userdata('id'));
                $this->db->update('tbl_pengguna', $data);
          
            $this->session->set_flashdata('success', 'Data telah diupdate');
            redirect('ProfilCustomer/detail');
        }

    }       
}
