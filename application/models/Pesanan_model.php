<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_model extends CI_Model {

    public function __construct() {
        parent::__construct(); 
    }
    /*model get pesanan */
    public function get() {
        $this->db->order_by('id_pesanan', 'ASC');

        $query = $this->db->get('detail_bayaruser');
        return $query->result_array();
    }
    /*model get pesanan by id nya*/
    public function getById($id_pesanan)
    {
        return $this->db->get_where('detail_bayaruser ', ['id_pesanan' => $id_pesanan])->row_array();
    }
    // model get batal pesanan
    public function getbatal() {
        $this->db->order_by('id_pesanan', 'ASC');
        $this->db->where('status_barang = ', 'pesanan dibatalkan');
        $query = $this->db->get('detail_pesanan');
        return $query->result_array();
    }
    // model tombol konfirmasi pesanan
    // public function konfirmasi($id_pesanan){
    //     $var = 'pesanan dikonfirmasi';
    //     $this -> db -> set ('status_barang',$var);
    //     $this->db->where('id_pesanan', $id_pesanan);
    //     $this->db->update('detail_bayaruser   ');
    // }
    // mdoel get pesanan telah dikonfirmasi
    public function gettelahdikonfirmasi() {
        $this->db->order_by('id_pesanan', 'ASC');
        $this->db->where('status_barang = ', 'pesanan dikonfirmasi');
        $query = $this->db->get('detail_bayaruser');
        return $query->result_array();
    }
    // model tombol pesanan telah dibayar
    public function bayar($id_pesanan){
        $var = 'pesanan telah dibayar';
        $this -> db -> set ('status_barang',$var);
        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->update('detail_bayaruser   ');
    }
    // model get telah dibayar
    public function gettelahdibayar() {
        $this->db->order_by('id_pesanan', 'ASC');
        $this->db->where('status_barang = ', 'pesanan telah dibayar');
        $query = $this->db->get('detail_bayaruser');
        return $query->result_array();
    }
    // model get pesanan telah selesai
    public function selesai($id_pesanan){
        $var = 'pesanan telah selesai';
        $this -> db -> set ('status_barang',$var);
        $this->db->where('id_pesanan', $id_pesanan);
        $this->db->update('detail_bayaruser');
    }    
}  