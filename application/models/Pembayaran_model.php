<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran_model extends CI_Model {

     public function __construct() {
        parent::__construct();
    }

    /*model get Pembayaran */
    public function get() {
        $this->db->order_by('n_lengkap', 'ASC');

        $query = $this->db->get('tbl_pembayaran');
        return $query->result_array();
    }
    
         /*model get Pembayaran by id nya*/
        public function getById($id)
        {
            return $this->db->get_where('tbl_pembayaran', ['id' => $id])->row_array();
        }

    public function create() {
        $data = array(
            'id_barang' => trim($this->input->post('id_pesanan')),
            'n_lengkap' => trim($this->input->post('n_lengkap')),
            'tgl_pembayaran' => trim($this->input->post('tgl_pembayaran')),
            'nama_bank' => trim($this->input->post('nama_bank')),
            'n_pemilik' => trim($this->input->post('n_pemilik')),
            'jumlah_tf' => trim($this->input->post('jumlah_tf')),
            'up_bukti' => trim($this->input->post('up_bukti')),


            'prod_created' => date('Y-m-d H:i:s')
        );

        return $this->db->insert('produk', $data);
    }

    public function update($id) {
        $data = array(
            'id_barang' => trim($this->input->post('id_barang')),
            'n_lengkap' => trim($this->input->post('n_lengkap')),
            'email' => trim($this->input->post('email')),
            'no_hp' => trim($this->input->post('no_hp')),
            'tgl_pembayaran' => trim($this->input->post('tgl_pembayaran')),
            'no_hp' => trim($this->input->post('no_hp')),
            'nama_bank' => trim($this->input->post('nama_bank')),
            'prod_updated' => date('Y-m-d H:i:s')
        );

        return $this->db->update('produk', $data, array('id_barang' => trim($id)));
    }

    public function delete($id) {
        return $this->db->delete('produk', array('id_barang' => trim($id)));
    }

}
