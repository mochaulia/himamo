<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MProker_raters extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->load->library('session');
		$this->proker_raters_table = 'proker_raters';
		$this->mahasiswa_table = 'mahasiswa';
		$this->proker_raters_join_mahasiswa = 'mahasiswa.nim = proker_raters.nim_rater';
	}

	public function sum_rating($id_proker) {
		$this->db->select_sum('point');
		$this->db->from($this->proker_raters_table);
		$this->db->where('id_proker', $id_proker);
		$query = $this->db->get();
		return sprintf("%.1f", $query->row()->point);
	}

	public function add() {
		$data = array(
				'id_proker' => $this->input->post('id_proker'),
				'nim_rater' => $this->session->userdata('nim'),
				'point' => $this->input->post('point'),
				'review' => $this->input->post('review'),
		);
		$this->db->insert($this->proker_raters_table, $data);
	}

	public function edit() {
		$data = array(
			'point' => $this->input->post('point'),
			'review' => $this->input->post('review'),
		);
		$where = array(
			'id_proker' => $this->input->post('id_proker'),
			'nim_rater' => $this->session->userdata('nim'),
		);
		$this->db->update($this->proker_raters_table, $data, $where);
	}

	public function get_rows($params = array()) {
		$this->db->select('
			proker_raters.nim_rater as nim_rater,
			proker_raters.point as point,
			proker_raters.review as review,
			mahasiswa.nama as nama_rater
		');
		$this->db->order_by('proker_raters.id','desc');
		$this->db->from($this->proker_raters_table);
		$this->db->join($this->mahasiswa_table, $this->proker_raters_join_mahasiswa);
		if (array_key_exists('id_proker', $params)) {
			$this->db->where('proker_raters.id_proker', $params['id_proker']);
		}
		if (array_key_exists('where', $params)) {
			foreach ($params['where'] as $column => $value) {
				$this->db->where($column, $value);
			}
		}
		if (array_key_exists('where_not_in', $params)) {
			foreach ($params['where_not_in'] as $column => $value) {
				$this->db->where_not_in($column, $value);
			}
		}
		$query = $this->db->get();
		if (array_key_exists('return_type', $params)) {
			if ($params['return_type'] == 'one_row') {
				$result = ($query->num_rows() == 1) ? $query->row() : false;
				return $result;
			}
			elseif ($params['return_type'] == 'num_rows_float') {
				$result = $query->num_rows();
				return sprintf("%.1f", $result);
			}
		}
		return $query->result();
	}

	public function count_rating($id_proker) {
		$sum = $this->sum_rating($id_proker);
		$num_rows = $this->get_rows(array('return_type' => 'num_rows_float', 'where' => array('id_proker' => $id_proker)));
		if ($num_rows == 0.0 || $sum == 0.0) {
			return sprintf("%.1f", 0);
		}
		else {
			return sprintf("%.1f", $sum/$num_rows);
		}
	}
}
