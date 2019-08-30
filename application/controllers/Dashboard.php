<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
			$data['all_divisi'] = $this->MDivisi->get_rows(array('return_type' => 'all'));
			$this->load->view('dashboard/dashboard', $data);
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
			if ($data['kelas']->nim_terakhir_ubah) {
				$data['terakhir_ubah'] = $this->MMahasiswa->get_rows(array('return_type' => 'one_row', 'where' => array('mahasiswa.nim' => $data['kelas']->nim_terakhir_ubah)));
			}
			$data['all_mahasiswa'] = $this->MMahasiswa_kelas->get_rows(array('return_type' => 'all', 'where' => array('mahasiswa_kelas.kode_kelas' => $_GET['kode_kelas'])));
			$data['user'] = $this->MUsers->get_row_aktif();
			$this->load->view('dashboard/tabel', $data);
		}
		else {
			echo "access forbidden.";
		}
	}

	public function update_kelas() {
		if ($this->session->userdata('is_logged_in')) {
			$this->MKelas->update_from_user();
			echo $this->MMahasiswa->get_rows(array('return_type' => 'one_row', 'where' => array('mahasiswa.nim' => $_GET['nim_terakhir_ubah'])))->nama_mahasiswa;
		}
		else {
			echo "access forbidden.";
		}
	}

	public function change_pwd() {
		if ($this->session->userdata('is_logged_in')) {
			$this->MUsers->change_pwd();
			redirect('users/logout');
		}
		else {
			echo "access forbidden.";
		}
	}
}
