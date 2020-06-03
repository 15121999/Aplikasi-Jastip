<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StatusPesanan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    /*model get jadwal */
    public function get() {
        // $this->db->order_by('nama_barang', 'ASC');

        // $query = $this->db->get('tbl_daftarpesanan');
        // return $query->result_array();
        $id = $this->session->userdata('id');

        // $this->db->select('*');
        // $this->db->from('tbl_daftarpesanan');
        // $this->db->where('id_traveler', $this->session->userdata('id'));
        // $query = $this->db->get();
        // return $query->result();


        // $query = $this->db->query("SELECT id_pesanan, id_traveler, jenis, nama_barang, jumlah_barang, harga_barang, status_barang, harga
        //     FROM tbl_daftarpesanan WHERE id_pengguna = '$id'");
        // return $query;   

        // $query = $this->db->query("SELECT tbl_daftarpesanan.id_pesanan, id_traveler, jenis, nama_barang, jumlah_barang, harga_barang, status_barang,status_diterima,status_sampai, tbl_uploadbarang.harga
        //     FROM tbl_daftarpesanan
        //     INNER JOIN tbl_uploadbarang ON tbl_daftarpesanan.id_traveler = tbl_uploadbarang.id_pengguna WHERE tbl_daftarpesanan.id_pengguna = '$id'");
        // return $query;   


        $query = $this->db->query("SELECT tbl_daftarpesanan.id_pesanan,tbl_daftarpesanan.id_upload, tgl_pesan,jenis, email_pemesan, nama_barang, jumlah_barang, harga_barang, status_barang,konfirmasi_customer,status_traveler, tbl_pengguna.nama_lengkap, nomor_hp, tbl_uploadbarang.harga, kota_tujuan, status_barang, jadwal_kedatangan, jadwal_keberangkatan, waktu_kedatangan
            FROM tbl_pengguna
            JOIN tbl_uploadbarang ON tbl_pengguna.id = tbl_uploadbarang.id_pengguna
            JOIN tbl_daftarpesanan ON tbl_pengguna.id = tbl_daftarpesanan.id_traveler             
            WHERE tbl_daftarpesanan.id_pengguna = '$id' AND status_barang LIKE '%pesanan dikonfirmasi%' GROUP BY id_pesanan");
        return $query;   

    }

    
    /*model get jadwal by id nya*/
    public function getById($id)
    {
       return $this->db->get_where('tbl_daftarpesanan', ['id_pesanan' => $id_pesanan])->row_array();
   }
   public function ubahdatastatus()
   {
    $id_pengguna         = htmlentities(strip_tags($_POST['id_pengguna']));
    $nama_barang         = htmlentities(strip_tags($_POST['nama_barang']));
    $jenis               = htmlentities(strip_tags($_POST['jenis']));
    $harga_jasa          = htmlentities(strip_tags($_POST['harga_jasa']));
    $harga_barang        = htmlentities(strip_tags($_POST['harga_barang']));


    $data = array(
        'id_pengguna'           => $id_pengguna,
        'nama_barang'           => $nama_barang,
        'jenis'                 => $jenis,
        'harga_jasa'            => $harga_jasa,
        'harga_barang'          => $harga_barang,


    );
    $this->db->where('id_pesanan', $this->input->post('id_pesanan'));
    $this->db->update('tbl_daftarpesanan', $data);

}

public function tangkap($id)
{
    $query=$this->db->query("SELECT id_pesanan,konfirmasi_customer,status_traveler 
        FROM tbl_daftarpesanan WHERE id_pesanan = '$id'");
    return $query;
}
public function pesananproses (){
    $id = $this->session->userdata('id');

    $query = $this->db->query("SELECT * FROM detail_bayaruser WHERE id_pengguna = '$id' AND status_barang LIKE '%pesanan telah dibayar%'");
    return $query;   
}

public function pesananselesai (){
    $id = $this->session->userdata('id');

    $query = $this->db->query("SELECT * FROM detail_pesanan WHERE id_pengguna = '$id' AND status_barang LIKE '%pesanan telah selesai%'");
    return $query;   
}

public function pesananbatal (){
    $id = $this->session->userdata('id');

    $query = $this->db->query("SELECT * FROM detail_pesanan WHERE id_pengguna = '$id' AND status_barang LIKE '%pesanan dibatalkan%'");
    return $query;   
}

public function getupload (){
    

    $query = $this->db->query("SELECT * FROM tbl_uploadbukti");
    return $query;   
}

public function pesanandibatalkan($id_pesanan){
    $var = 'pesanan dibatalkan';
    $this->db->set('status_barang',$var);
    $this->db->where('id_pesanan', $id_pesanan);
    $this->db->update('tbl_daftarpesanan');
}
    public function lihatbukti($id)
    {

        $query = $this->db->query("SELECT * FROM detail_bayaruser WHERE id_pesanan = '$id'");
        return $query;  
    }


}
