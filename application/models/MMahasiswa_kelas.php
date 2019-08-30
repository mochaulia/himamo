<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMahasiswa_kelas extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->mahasiswa_kelas_table = 'mahasiswa_kelas';
		$this->mahasiswa_table = 'mahasiswa';
		$this->mahasiswa_kelas_join_mahasiswa = 'mahasiswa_kelas.nim = mahasiswa.nim';
	}

	public function get_rows($params = array()) {
		$this->db->select('
			mahasiswa_kelas.nim as nim,
			mahasiswa_kelas.kode_kelas as kode_kelas,
			mahasiswa.nama as nama_mahasiswa,
			mahasiswa.jenis_kelamin as jenis_kelamin_mahasiswa,
		');
		$this->db->from($this->mahasiswa_kelas_table);
		$this->db->join($this->mahasiswa_table, $this->mahasiswa_kelas_join_mahasiswa);
		if (array_key_exists('where', $params)) {
			foreach ($params['where'] as $column => $value) {
				$this->db->where($column, $value);
			}
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
