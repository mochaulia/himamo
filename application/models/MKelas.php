<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKelas extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->kelas_table = "kelas";
	}

	public function get_rows() {
		$query = $this->db->get($this->kelas_table);
		return $query->result();
	}

	public function get_row($kode_kelas) {
		$where = array(
			'kode' => $kode_kelas,
		);
		$query = $this->db->get_where($this->kelas_table, $where);
		return $query->row();
	}

	public function update_from_user() {
		$data = array(
			'nama' => $_GET['nama_kelas'],
			'wali_dosen' => $_GET['wali_dosen'],
			'nim_km' => $_GET['nim_km'],
			'nim_bendahara' => $_GET['nim_bendahara'],
			'nim_terakhir_ubah' => $_GET['nim_terakhir_ubah'],
		);
		$where = array('kode' => $_GET['kode_kelas']);
		$this->db->update($this->kelas_table, $data, $where);
	}
}
