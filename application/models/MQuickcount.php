<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MQuickcount extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
        $this->calon_voters = "calon_voters";
    }

    public function persentase_calon($id_calon) {
        $this->db->select('*');
        $this->db->where(array('id_calon' => $id_calon));
        $query = $this->db->get($this->calon_voters);
        $jumlah_dari_id = $query->num_rows();
        $jumlah_seluruhnya = $this->db->count_all_results($this->calon_voters);
        $persentase = ($jumlah_dari_id / $jumlah_seluruhnya)*100;
        return $persentase;
    }
    
    public function jumlah_vote($id_calon){
        $this->db->select('*');
        $this->db->where(array('id_calon' => $id_calon));
        $query = $this->db->get($this->calon_voters);
        $jumlah_dari_id = $query->num_rows();
        return $jumlah_dari_id;
    }
}