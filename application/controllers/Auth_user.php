	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth_user extends CI_Controller {

		public function __construct() 
		{
			parent::__construct();

			$this->load->model('pengguna_model');
		}
		public function index()
		{
			$this->load->view('user/index');
		}

		public function login()
		{
			check_already_login();
			$this->load->view('user/index');
		}
		public function process()
		{
			$post = $this->input->post(null, TRUE);


			$query = $this->pengguna_model->login($post);
			if($query->num_rows() > 0){
				$row = $query->row();
				$params = array(
					'id' => $row->id,
					'email' => $row->email,
					'password' => $row->password,
					'level' => $row->level,
					'alamat' => $row->alamat,
					'is_active' => $row->is_active

				);

				$this->session->set_userdata($params);
				$level=$this->session->level;
				$is_active=$this->session->is_active;


				//var_dump($is_active);
				//die();

				if ($level==1 && $is_active=='aktif') 
				{
					echo "<script>
					alert('Login berhasil');
					window.location='".site_url('Beranda_userC')."';
					</script>";
					// redirect('Beranda_userC');
					/* ini halaman customer*/
				}
				elseif ($level==1 && $is_active=='') {
					echo "<script>
					alert('Akun anda belum aktif, coba beberapa saat lagi');
					window.location='".site_url('Beranda_user')."';
					</script>";
				}
				elseif($level==2 && $is_active=='aktif') 
				{
					echo "<script>
					alert('Login berhasil');
					window.location='".site_url('Beranda_userT')."';
					</script>";
					// redirect('Beranda_userT');
					// $this->load->view('user/traveler/index_traveler');/* ini halaman traveler*/
				}
				elseif ($level==2 && $is_active=='') {
					echo "<script>
					alert('Akun anda belum aktif, coba beberapa saat lagi');
					window.location='".site_url('Beranda_user')."';
					</script>";

				}

			}else{
				echo "<script>
				alert('Login gagal, username / password salah');
				window.location='".site_url('Beranda_user')."';
				</script>";
			}
		}
		public function active_user($id){
			$this -> pengguna_model -> active_user($id);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
				Akun Telah Di Aktifkan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);    
			redirect ('Traveler');
		}
		public function deactive_user($id){
			$this -> pengguna_model -> deactive_user($id);
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
				Akun Telah Di Non-Aktifkan
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);    
			redirect ('Traveler');
		}


		public function logout()
		{
			$params = array('id', 'email', 'password','level');
			$this->session->unset_userdata($params);

			redirect('');

		}


	}

