<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('MUsers');
	}

	public function login() {
		if (!$this->session->userdata('is_logged_in')) {
			$data = array();
			if ($this->input->post('login_submit_himamo')) {
				$this->form_validation->set_rules('username_himamo', 'Username', 'required');
				$this->form_validation->set_rules('password_himamo', 'Password', 'required');
				if ($this->form_validation->run() == true) {
					$params = array(
						'return_type' => 'one_row',
						'where' => array(
							'username' => $this->input->post('username_himamo'),
							'password' => md5($this->input->post('password_himamo')),
						),
					);
					$logged_in = $this->MUsers->get_rows($params);
					if ($logged_in) {
						$this->session->set_userdata('is_logged_in', true);
						$this->session->set_userdata('id_user', $logged_in->id_user);
						$this->session->set_userdata('nim', $logged_in->nim);
						if (isset($_GET['next'])) {
							redirect(base_url($_GET['next']));
						}
						redirect(base_url('/dashboard/'));
					}
					else {
						$data['error_msg'] = 'Wrong username or password, please try again.';
					}
				}
			}
			$this->load->view('users/login', $data);
		}
		else {
			redirect(base_url('/dashboard/'));
		}
	}

	public function logout() {
		$this->session->unset_userdata('is_logged_in');
		$this->session->unset_userdata('id_user');
		$this->session->sess_destroy();
		redirect(base_url('/login/'));
	}
}
