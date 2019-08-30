<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MProker extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->proker_table = 'proker';
		$this->divisi_table = 'divisi';
		$this->mahasiswa_table = 'mahasiswa';
		$this->proker_join_divisi = 'proker.id_divisi = divisi.id';
		$this->proker_join_mahasiswa = 'proker.nim_ketuplak = mahasiswa.nim';
	}

	public function get_rows($params = array()) {
		$this->db->select('
			proker.id as id,
			proker.nama as nama,
			proker.bulan as bulan,
			proker.tempat as tempat,
			proker.deskripsi as deskripsi,
			divisi.nama as nama_divisi,
			mahasiswa.nim as nim_ketuplak,
			mahasiswa.nama as nama_ketuplak
		');
		$this->db->from($this->proker_table);
		$this->db->join($this->divisi_table, $this->proker_join_divisi);
		$this->db->join($this->mahasiswa_table, $this->proker_join_mahasiswa);
		if (array_key_exists('id', $params)) {
			$this->db->where('proker.id', $params['id']);
		}
		if (array_key_exists('id_divisi', $params)) {
			$this->db->where('proker.id_divisi', $params['id_divisi']);
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
