<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_user extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('user/index');
    }

    public function create() {    
	 		

			$data = array();
			$data['index'] = $this->db->get('tbl_pengguna_user')->result_array();
 			$this->form_validation->set_rules('username', 'username', 'required');
 			$this->form_validation->set_rules('email', 'email', 'required');
 	
 			if ($this->form_validation->run() == false) {
		         $data['content'] = $this->load->view('user/index', $data, true);
		        $this->load->view('layout', $data);
 			
 			} else {
                $n_lengkap         = htmlentities(strip_tags($_POST['n_lengkap']));
                $no_hp         = htmlentities(strip_tags($_POST['no_hp']));
                $alamat         = htmlentities(strip_tags($_POST['alamat']));

                $username         = htmlentities(strip_tags($_POST['username']));
                $email        = htmlentities(strip_tags($_POST['email']));
                $password    = htmlentities(strip_tags($_POST['password']));

		

				$data = array(
                    'n_lengkap'           => $n_lengkap,
                    'no_hp'           => $no_hp,
                    'alamat'           => $alamat,
                    'username'           => $username,
                    'email'              => $email,
                    'password' => $password,
	
										
        );

 				$this->db->insert('tbl_pengguna_user', $data);

				 $this->session->set_flashdata('success', '');
 						redirect('user/index');
 			}
        
    }

}