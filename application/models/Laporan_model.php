<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    } 
 
    /*model get jadwal */
    public function get() {
        $this->db->order_by('tgl_pesan', 'ASC');
        $this->db->where('status_barang = ', 'pesanan telah selesai');


        $query = $this->db->get('detail_laporan');
        return $query->result_array();
    }

    
         /*model get jadwal by id nya*/
        public function getById($id_pesanan)
        {
            return $this->db->get_where('detail_laporan ', ['id_pesanan' => $id_pesanan])->row_array();
        }
    } 
         function carilaporan($data)
    {

        
        $this->db->from('detail_laporan');
        $this->db->where('tgl_pesan >=',$this->input->post('startdate'));
        $this->db->where('tgl_pesan >=',$this->input->post('enddate'));
        $query=$this->db->get();
        return $query->result();
    }