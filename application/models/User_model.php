<?php
 
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*model get jadwal */
    public function gett() {
        $this->db->order_by('username', 'ASC');

        $query = $this->db->get('tbl_user');
        return $query->result_array();
    }
    	
	

			public function login($post)
			{
				$this->db->select('*');
				$this->db->from('tbl_user');
				$this->db->where('username', $post['username']);
				$this->db->where('password', $post['password']);
				$query = $this->db->get();
				return $query;
			}

			public function get($id = null)
			{
				$this->db->select('*');
				$this->db->from('tbl_user');
				if($id != null){
					$this->db->where('id', $id);
				}
				$query = $this->db->get();
				return $query;
			}

			public function add($post)
			{
				$params['username'] = $post['username'];
				$params['password'] = ($post['password']);
				$params['level'] = $post['level'];
				$this->db->insert('tbl_user', $params);
			}

			public function getById($id)
	    {
	        return $this->db->get_where('tbl_user', ['id' => $id])->row_array();
	    }


			public function ubahdatauser()
				  {
				        $username 			= htmlentities(strip_tags($_POST['username']));
						$password 			= htmlentities(strip_tags($_POST['password']));
						$level 			= htmlentities(strip_tags($_POST['level']));

				

						$data = array(
							'username'			=> $username,
							'password'		=> $password,
							'level'				=> $level,


						);
				        $this->db->where('id', $this->input->post('id'));
				        $this->db->update('tbl_user', $data);

				    }
			public function hapusDatauser($id)
			{
				$this->db->where('id', $id);
				$this->db->delete('tbl_user');
			}
		}

