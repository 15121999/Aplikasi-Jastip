<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DaftarCustomer extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('user/customer/daftar_customer');
    }

    public function create() {    


     $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_pengguna.email]', [
        'is_unique' => 'Email ini sudah terdaftar!'
    ]);
     $this->form_validation->set_rules('nomor_rekening', 'Nomor rekening', 'trim|numeric|required',
        array('numeric' => 'Kolom ini harus berisi nomor rekening')
    );
     $this->form_validation->set_rules('nomor_hp', 'Nomor Handphone', 'trim|numeric|required',
        array('numeric' => 'Kolom ini harus berisi nomor handphone')
    );


     if ($this->form_validation->run() == false) {
         $this->load->view('user/customer/daftar_customer');
     } else {

         $data = array();
         $data['index'] = $this->db->get('tbl_pengguna')->result_array();

         $kode_traveler         = htmlentities(strip_tags($_POST['kode_traveler']));
         $nama_lengkap         = htmlentities(strip_tags($_POST['nama_lengkap']));
         $email        = htmlentities(strip_tags($_POST['email']));
         $password    = htmlentities(strip_tags($_POST['password']));
         $alamat    = htmlentities(strip_tags($_POST['alamat']));
         $jenis_kelamin    = htmlentities(strip_tags($_POST['jenis_kelamin']));
         $nomor_hp    = htmlentities(strip_tags($_POST['nomor_hp']));
         $nomor_rekening    = htmlentities(strip_tags($_POST['nomor_rekening']));
         $nama_bank    = htmlentities(strip_tags($_POST['nama_bank']));
         $is_active    = htmlentities(strip_tags($_POST['is_active']));
         $nama_pemilik    = htmlentities(strip_tags($_POST['nama_pemilik']));
         $foto_ktp    = $_FILES['foto_ktp']['name'];


         $data = array(
            'nama_lengkap'           => $nama_lengkap,
            'email'           => $email,
            'password' => $password,
            'alamat' => $alamat,
            'jenis_kelamin'=> $jenis_kelamin,
            'nomor_hp'              => $nomor_hp,
            'nomor_rekening' => $nomor_rekening,
            'nama_bank' => $nama_bank,
            'is_active' => $is_active,
            'nama_pemillik ' => $nama_pemilik,
            'foto_ktp' => $foto_ktp, 
            'level'=>1,
        );	

         $config['upload_path']          = './assets/foto';
         $config['allowed_types']        = 'gif|jpg|png';


         $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('foto_ktp'))
         {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);


        }
        else
        {

            $this->db->insert('tbl_pengguna', $data);

                     // $this->session->set_flashdata('success', 'Jadwal telah ditambahkan');
                     //        redirect('user/index');
            echo "<script>
            alert('Pendaftaran Berhasil, Silahkan Login Akun Anda');
            window.location='".site_url('user/index')."';
            </script>";

        }



        var_dump($data);
        die();
    }


}

}
