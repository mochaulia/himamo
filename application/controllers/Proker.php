<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proker extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('MUsers');
		$this->load->model('MDivisi');
		$this->load->model('MProker');
		$this->load->model('MProker_raters');
	}

	public function index() {
		$data = array();
		if ($this->session->userdata('is_logged_in')) {
			$get_rows_params = array(
				'return_type' => 'all',
			);
			$data['all_divisi'] = $this->MDivisi->get_rows($get_rows_params);
			$this->load->view('proker/proker', $data);
		}
		else {
			redirect('users/login');
		}
	}

	public function get() {
		$data = array();
		if ($this->session->userdata('is_logged_in')) {
			$get_rows_params = array(
				'id' => $_GET['id_proker'],
				'return_type' => 'one_row',
			);
			$data['proker'] = $this->MProker->get_rows($get_rows_params);
			$get_rows_params = array(
				'where' => array(
					'id_proker' => $_GET['id_proker'],
					'nim_rater' => $this->session->userdata('nim'),
				),
				'return_type' => 'one_row',
			);
			$data['is_have_rate'] = $this->MProker_raters->get_rows($get_rows_params);
			$this->load->view('proker/proker_in_modal', $data);
		}
		else {
			echo "access forbidden.";
		}
	}

	public function get_rate() {
		$data = array();
		if ($this->session->userdata('is_logged_in')) {
			if ($this->input->post('id_proker')) {
				$id_proker = $this->input->post('id_proker');
				if ($this->input->post('point') > 0) {
					$get_rows_params = array(
						'where' => array(
							'id_proker' => $id_proker,
							'nim_rater' => $this->session->userdata('nim'),
						),
						'return_type' => 'one_row',
					);
					$is_have_rate = $this->MProker_raters->get_rows($get_rows_params);
					if ($is_have_rate) {
						$this->MProker_raters->edit();
					}
					else {
						$this->MProker_raters->add();
					}
				}
			}
			else {
				$id_proker = $_GET['id_proker'];
			}
			$data['all_raters'] = $this->MProker_raters->get_rows(array('id_proker' => $id_proker));
			$data['raters'] = $this->MProker_raters->get_rows(array('id_proker' => $id_proker, 'where_not_in' => array('nim_rater' => $this->session->userdata('nim'))));
			$data['rater_aktif'] = $this->MProker_raters->get_rows(array('id_proker' => $id_proker, 'return_type' => 'one_row', 'where' => array('nim_rater' => $this->session->userdata('nim'))));
			$this->load->view('proker/review_in_proker', $data);
		}
		else {
			echo "access forbidden.";
		}
	}

	public function json_rate() {
		if ($this->session->userdata('is_logged_in')) {
			$arr = array(
				'new_rate' => $this->MProker_raters->count_rating($_GET['id_proker']),
				'point' => $_GET['point'],
			);
			header('Content-Type: application/json');
			echo json_encode($arr);
		}
		else {
			echo "access forbidden.";
		}
	}
}
