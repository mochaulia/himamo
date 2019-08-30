<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function kekeluargaan() {
		$this->load->view('divisi/kekeluargaan');
	}

	public function kaderisasi() {
		$this->load->view('divisi/kaderisasi');
	}

	public function kominfo() {
		$this->load->view('divisi/kominfo');
	}

	public function kreatifitas() {
		$this->load->view('divisi/kreatifitas');
	}

	public function kemasyarakatan() {
		$this->load->view('divisi/kemasyarakatan');
	}

	public function kajianstrategis() {
		$this->load->view('divisi/kajianstrategis');
	}

	public function rumahtangga() {
		$this->load->view('divisi/rumahtangga');
	}
}
