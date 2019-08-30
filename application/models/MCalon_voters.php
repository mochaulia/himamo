<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCalon_voters extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
        $this->calon_voters_table = "calon_voters";
    }

    public function add() {
        $data = array(
            'id_calon' => $this->input->post('id_calon'),
            'nim_voter' => $this->input->post('nim_voter')
        );
        $this->db->insert($this->calon_voters_table, $data);
    }

    public function udevote($nim_voter) {
        $where = array(
            'nim_voter' => $nim_voter,
        );
        $query = $this->db->get_where($this->calon_voters_table, $where);
        if ($query->num_rows() > 0) {
            return true;
        }
        else {
            return false;
        }
    }
    
    public function get_rows() {
        $query = $this->db->get($this->calon_voters_table);
        return $query->result();
    }
}
