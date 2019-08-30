<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MMahasiswa extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->mahasiswa_table = 'mahasiswa';
		$this->mahasiswa_kelas_table = 'mahasiswa_kelas';
		$this->kelas_table = 'kelas';
		$this->mahasiswa_join_mahasiswa_kelas = 'mahasiswa.nim = mahasiswa_kelas.nim';
		$this->mahasiswa_kelas_join_kelas = 'mahasiswa_kelas.kode_kelas = kelas.kode';
	}

	public function get_rows($params = array()) {
		if (array_key_exists('kepemimpinan', $params)) {
			$this->db->select('
				mahasiswa.nim as nim,
				mahasiswa.nama as nama_mahasiswa,
				mahasiswa.jenis_kelamin as jenis_kelamin_mahasiswa,
			');
			$this->db->from($this->mahasiswa_table);
		}
		else {
			$this->db->select('
				mahasiswa.nim as nim,
				mahasiswa.nama as nama_mahasiswa,
				mahasiswa.jenis_kelamin as jenis_kelamin_mahasiswa,
				mahasiswa_kelas.kode_kelas as kode_kelas,
				kelas.nama as nama_kelas,
				kelas.wali_dosen as wali_dosen
			');
			$this->db->from($this->mahasiswa_table);
			$this->db->join($this->mahasiswa_kelas_table, $this->mahasiswa_join_mahasiswa_kelas);
			$this->db->join($this->kelas_table, $this->mahasiswa_kelas_join_kelas);
		}
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
