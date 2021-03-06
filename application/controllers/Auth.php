<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	//Function buat login
	public function login()
	{
		check_already_login();
		$this->load->view('admin/login');
	}
	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['admin/login'])) {
			$this->load->model('user_model');
			$query = $this->user_model->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'id' => $row->id,
					'level' => $row->level
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='" . site_url('admin/dashboard') . "';
				</script>";
			} else {
				echo "<script>
					alert('Login gagal, username/password salah');
					window.location='" . site_url('auth/login') . "';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('id', 'level');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
