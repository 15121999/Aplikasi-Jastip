    <?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Uploadbukti_model_admin extends CI_Model {

     public function __construct() {
        parent::__construct();
    }

    /*model get Pembayaran */
    public function get() {
        $this->db->order_by('id_upload', 'ASC');

        $query = $this->db->get('detail_pembayaran');
        $this->db->where('rekening_tujuan = ', 'Bank BNI 0387107158');

        return $query->result_array();
    }
    /*model get Pembayaran by id_upload nya*/
    public function getById($id_upload)
    {
        return $this->db->get_where('detail_pembayaran', ['id_upload' => $id_upload])->row_array();
    }
            // model get detail bukti pembayaran
    public function get_detail($id_upload = NULL){

        $this->db->select('*');
        $this->db->from('detail_pembayaran');
        if ($id_upload != null) {
            $this->db->where('id_upload', $id_upload);
        }
        $query = $this->db->get();
        return $query;
    }
            //model konfirmasi pembayaran 
    public function konfirmasi($id_upload){
        $var = 'Pembayaran Terkonfirmasi';
        $this -> db -> set ('status_pembayaran',$var);
        $this->db->where('id_upload', $id_upload);
        $this->db->update('detail_pembayaran');
    }
     public function unkonfirmasi($id_upload){
        $var = 'Pembayaran Belum Dikonfirmasi';
        $this -> db -> set ('status_pembayaran',$var);
        $this->db->where('id_upload', $id_upload);
        $this->db->update('detail_pembayaran');
    }
}
