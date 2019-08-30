<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKepemimpinan extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->mahasiswa_table = 'kepemimpinan';
	}

	public function get_rows($params = array()) {
		$query = $this->db->get($this->mahasiswa_table);
		return $query->result();
	}
}
