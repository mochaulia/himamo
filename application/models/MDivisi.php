<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDivisi extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->divisi_table = 'divisi';
	}

	public function get_rows($params = array()) {
		$this->db->select('*');
		$this->db->from($this->divisi_table);
		if (array_key_exists('id', $params)) {
			$this->db->where('id', $params['id']);
		}
		$query = $this->db->get();
		if (array_key_exists('return_type', $params)) {
			if ($params['return_type'] == 'num_rows') {
				$result = $query->num_rows();
			}
			elseif ($params['return_type'] == 'one_row') {
				$result = ($query->num_rows() == 1) ? $query->row() : false;
			}
			elseif ($params['return_type'] == 'all') {
				$result = ($query->num_rows() > 0) ? $query->result() : false;
			}
		}
		return $result;
	}
}
