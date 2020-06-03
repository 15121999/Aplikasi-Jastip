<?php  
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*model get jadwal */
    public function gett() {
        $this->db->order_by('email', 'ASC');

        $query = $this->db->get('tbl_pengguna');
        return $query->result_array();
    }

			public function login($post)
			{
				$this->db->select('*');
				$this->db->from('tbl_pengguna');
				$this->db->where('email', $post['email']);
				$this->db->where('password', $post['password']);
				$query = $this->db->get();
				return $query;
			}
			public function get($id = null)
			{
				$this->db->select('*');
				$this->db->from('tbl_pengguna');
				if($id != null){
					$this->db->where('id', $id);
				}
				$query = $this->db->get();
				return $query;
			}

			public function add($post)
			{
				$params['email'] = $post['email'];
				$params['password'] = ($post['password']);
				$this->db->insert('tbl_pengguna', $params);
			}

			public function getById($id)
	    {
	        return $this->db->get_where('tbl_pengguna', ['id' => $id])->row_array();
	    }
	    public function active_user($id){
        $var = 'aktif';
        $this -> db -> set ('is_active',$var);
        $this->db->where('id', $id);
        $this->db->update('tbl_pengguna');
    }
    public function deactive_user($id){
        $var = 'tidak aktif';
        $this -> db -> set ('is_active',$var);
        $this->db->where('id', $id);
        $this->db->update('tbl_pengguna');
    }
}