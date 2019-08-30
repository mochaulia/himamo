<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('MUsers');
		$this->load->model('MKelas');
		$this->load->model('MMahasiswa');
		$this->load->model('MMahasiswa_kelas');
		$this->load->model('MDivisi');
	}

	public function index() {
		$data = array();
		if ($this->session->userdata('is_logged_in')) {
			$data['user'] = $this->MUsers->get_row_aktif();
			$data['all_kelas'] = $this->MKelas->get_rows();
			$data['all_divisi'] = $this->MDivisi->get_rows(array('return_type' => 'all'));
			$this->load->view('database/database', $data);
		}
		else {
			redirect('users/login');
		}
	}

	public function get() {
		$data = array();
		if ($this->session->userdata('is_logged_in')) {
			$data['kelas'] = $this->MKelas->get_row($_GET['kode_kelas']);
			if ($data['kelas']->nim_km) {
				$data['km'] = $this->MMahasiswa->get_rows(array('return_type' => 'one_row', 'where' => array('mahasiswa.nim' => $data['kelas']->nim_km)));
			}
			if ($data['kelas']->nim_bendahara) {
				$data['bendahara'] = $this->MMahasiswa->get_rows(array('return_type' => 'one_row', 'where' => array('mahasiswa.nim' => $data['kelas']->nim_bendahara)));
			}
			$data['all_mahasiswa'] = $this->MMahasiswa_kelas->get_rows(array('return_type' => 'all', 'where' => array('mahasiswa_kelas.kode_kelas' => $_GET['kode_kelas'])));
			$this->load->view('database/tabel_kelas', $data);
		}
		else {
			echo "access forbidden.";
		}
	}

	public function get_all() {
		$data = array();
		if ($this->session->userdata('is_logged_in')) {
			$data['all_mahasiswa'] = $this->MMahasiswa->get_rows(array('return_type' => 'all'));
			$this->load->view('database/tabel_semua', $data);
		}
		else {
			echo "access forbidden.";
		}
	}
}
