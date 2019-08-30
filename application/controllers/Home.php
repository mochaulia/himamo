<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('MDivisi');
		$this->load->model('MKepemimpinan');
		$this->load->model('MMahasiswa');
		$this->load->model('MQuotes');
	}

	public function index() {
		$data['all_divisi'] = $this->MDivisi->get_rows(array('return_type' => 'all'));
		$data['all_pemimpin'] = $this->MKepemimpinan->get_rows();
		$data['all_quotes'] = $this->MQuotes->get_rows();
		$this->load->view('home', $data);
	}
}
