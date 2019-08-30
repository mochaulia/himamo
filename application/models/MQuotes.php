<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MQuotes extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->quotes_table = "quotes";
	}

	public function get_rows() {
		$query = $this->db->get($this->quotes_table);
		return $query->result();
	}
}
