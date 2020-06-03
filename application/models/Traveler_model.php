<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Traveler_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    /*model get traveler */
    public function get() {
        $this->db->order_by('nama_lengkap', 'ASC');
        $this->db->where('level = ', '2');

        $query = $this->db->get('tbl_pengguna');
        return $query->result_array();
    }
    /*model get traveler by id nya*/
    public function getById($id)
    {
        return $this->db->get_where('tbl_pengguna', ['id' => $id])->row_array();
    }
    // model get detail by id traveler
    public function get_detail($id = NULL){

        $this->db->select('*');
        $this->db->from('tbl_pengguna');
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    // model mengaktifkan traveler user by id traveler
    public function active_user($id){
        $var = 'aktif';
        $this -> db -> set ('is_active',$var);
        $this->db->where('id', $id);
        $this->db->from('tbl_pengguna');
    }
    // model memblokir traveler user by id traveler
    public function deactive_user($id){
        $var = 'tidak aktif';
        $this -> db -> set ('is_active',$var);
        $this->db->where('id', $id);
        $this->db->from('tbl_pengguna');
    }
}