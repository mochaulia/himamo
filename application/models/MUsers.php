<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUsers extends CI_Model {

	public function __construct() {
		parent:: __construct();
		$this->load->database();
		$this->users_table = 'users';
		$this->mahasiswa_table = 'mahasiswa';
		$this->kelas_table = 'kelas';
		$this->mahasiswa_kelas_table = 'mahasiswa_kelas';
		$this->mahasiswa_join_users = 'mahasiswa.nim = users.username';
		$this->mahasiswa_kelas_join_users = 'mahasiswa_kelas.nim = users.username';
		$this->mahasiswa_kelas_join_kelas = 'mahasiswa_kelas.kode_kelas = kelas.kode';
	}

	public function get_rows($params = array()) {
		$this->db->select('
			users.id as id_user,
			users.username as username,
			mahasiswa.nim as nim,
			mahasiswa.nama as nama_mahasiswa,
			mahasiswa.jenis_kelamin as jenis_kelamin,
			mahasiswa_kelas.kode_kelas as kode_kelas,
			kelas.nama as nama_kelas,
			kelas.wali_dosen as wali_dosen
		');
		$this->db->from($this->users_table);
		$this->db->join($this->mahasiswa_table, $this->mahasiswa_join_users);
		$this->db->join($this->mahasiswa_kelas_table, $this->mahasiswa_kelas_join_users);
		$this->db->join($this->kelas_table, $this->mahasiswa_kelas_join_kelas);
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

	public function get_row_aktif() {
		return $this->get_rows(array(
			'return_type' => 'one_row',
			'where' => array(
				'users.id' => $this->session->userdata('id_user'),
			),
		));
	}

	public function change_pwd() {
		$data = array(
			'password' => md5($this->input->post('newpwd')),
		);
		$where = array('id' => $this->get_row_aktif()->id_user);
		$this->db->update($this->users_table, $data, $where);
	}
}
