    <?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class BerandauserC_model extends CI_Model {

        public function __construct() {
            parent::__construct();
        }

        /*model get jadwal */
        public function get() {

        $id = $this->session->userdata('id');
       $alamat=$this->session->alamat;

        $query = $this->db->query("SELECT id_pengguna,channel,nama_lengkap,id_jadwal,harga,maks_berat,kota_tujuan,kota_asal,jadwal_keberangkatan,jadwal_kedatangan,waktu_kedatangan,maks_berat,kota_tujuan,alamat FROM tbl_uploadbarang INNER JOIN tbl_pengguna ON tbl_uploadbarang.id_pengguna=tbl_pengguna.id WHERE tbl_uploadbarang.kota_tujuan = '$alamat'");

            return $query->result_array();

        }

        public function tampilsemua(){


            $this->db->order_by('id_pengguna', 'ASC');

            $query = $this->db->get('tbl_uploadbarang');
            return $query->result_array();
}
        
        /*model get jadwal by id nya*/
        public function getById($id)
        {
            $query=$this->db->query("SELECT nama_lengkap,channel,nomor_hp,email,alamat,id_pengguna,id_jadwal,harga,maks_berat,kota_tujuan,kota_asal,jadwal_keberangkatan,jadwal_kedatangan,waktu_kedatangan,maks_berat from tbl_pengguna INNER JOIN tbl_uploadbarang ON tbl_pengguna.id=tbl_uploadbarang.id_pengguna WHERE tbl_pengguna.id = '$id'");
            return $query;
        }
        public function ubahdatastatus()
        {
            $jenis       = htmlentities(strip_tags($_POST['jenis']));
            $harga            = htmlentities(strip_tags($_POST['harga']));
            $maks_berat = htmlentities(strip_tags($_POST['maks_berat']));
            $kota_tujuan            = htmlentities(strip_tags($_POST['kota_tujuan']));
            $jadwal_keberangkatan            = htmlentities(strip_tags($_POST['jadwal_keberangkatan']));

            $jadwal_kedatangan            = htmlentities(strip_tags($_POST['jadwal_kedatangan']));
            $foto_barang    = $_FILES['foto_barang']['name'];






            $data = array(
                'jenis'                 => $jenis,
                'harga'                 => $harga,
                'maks_berat'            => $maks_berat,
                'kota_tujuan'           => $kota_tujuan,
                'kota_asal'           => $kota_asal,

                'jadwal_keberangkatan'  => $jadwal_keberangkatan,
                'jadwal_kedatangan'     => $jadwal_kedatangan,
                'foto_barang'           => $foto_barang,


            );
            $this->db->where('id_barang', $this->input->post('id_barang'));
            $this->db->update('tbl_uploadbarang', $data);

        }
        public function get_detail($id = NULL)
        {
            $this->db->select('*');
            $this->db->from('tbl_uploadbarang');
            if ($id != null) {
                $this->db->where('id_pengguna', $id);
            }
            $query = $this->db->get();
            return $query;

        }

        public function get_pesan($id = NULL)
        {
            $this->db->select('*');
            $this->db->from('tbl_uploadbarang');
            if ($id != null) {
                $this->db->where('id_pengguna', $id);
            }
            $query = $this->db->get();
            return $query;

        }


        // public function getAll()
        // {
        //     return $this->db->get('tbl_uploadbarang')->result();
        // }
 
        // public function getAsc()
        // {
        //     $this->db->order_by('harga', 'asc');
        //     return $this->db->get('tbl_uploadbarang')->result();


        // }
 
        // public function getDesc()
        // {
        //     $this->db->order_by('harga', 'desc');
        //     return $this->db->get('tbl_uploadbarang')->result();


        // }






        public function getAsc() {

        $id = $this->session->userdata('id');
       $alamat=$this->session->alamat;

        $query = $this->db->query("SELECT id_pengguna,id_jadwal,harga,maks_berat,kota_tujuan,kota_asal,jadwal_keberangkatan,jadwal_kedatangan,waktu_kedatangan,maks_berat,kota_tujuan,alamat FROM tbl_uploadbarang INNER JOIN tbl_pengguna ON tbl_uploadbarang.id_pengguna=tbl_pengguna.id WHERE tbl_uploadbarang.kota_tujuan = '$alamat' ORDER BY harga ASC");

            return $query->result_array();

        }


        public function getDesc() {

        $id = $this->session->userdata('id');
       $alamat=$this->session->alamat;

        $query = $this->db->query("SELECT id_pengguna,id_jadwal,harga,maks_berat,kota_tujuan,kota_asal,jadwal_keberangkatan,jadwal_kedatangan,waktu_kedatangan,maks_berat,kota_tujuan,alamat FROM tbl_uploadbarang INNER JOIN tbl_pengguna ON tbl_uploadbarang.id_pengguna=tbl_pengguna.id WHERE tbl_uploadbarang.kota_tujuan = '$alamat' ORDER BY harga DESC");

            return $query->result_array();

        }
        public function getAll(){
       $alamat=$this->session->alamat;
       $query = $this->db->query("SELECT id_pengguna,id_jadwal,harga,maks_berat,kota_tujuan,kota_asal,jadwal_keberangkatan,jadwal_kedatangan,waktu_kedatangan,maks_berat,kota_tujuan,alamat FROM tbl_uploadbarang INNER JOIN tbl_pengguna ON tbl_uploadbarang.id_pengguna=tbl_pengguna.id WHERE tbl_uploadbarang.kota_tujuan = '$alamat'");

            return $query->result_array();
        }
        

    }
