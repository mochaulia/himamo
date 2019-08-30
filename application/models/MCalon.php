<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCalon extends CI_Model {

    public function __construct() {
        parent:: __construct();
        $this->load->database();
        $this->calon_table = "calon";
    }

    public function get_rows() {
        $query = $this->db->get($this->calon_table);
        return $query->result();
    }
}
