<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voting extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('MCalon');
        $this->load->model('MCalon_voters');
        $this->load->model('MQuickcount');
    }

    public function index() {
        if ($this->session->userdata('is_logged_in')) {
            if ($this->MCalon_voters->udevote($this->session->userdata('nim'))) {
                $this->load->view('voting/alert');
            }
            else {
                $data['all_calon'] = $this->MCalon->get_rows();
                $this->load->view('voting/pilkahim', $data);
            }
        }
        else {
            redirect(base_url('users/login/?next=voting'));
        }
        
    }

    public function send() {
        if ($this->session->userdata('is_logged_in')) {
            $this->MCalon_voters->add();
            redirect(base_url('voting/done'));
        }
        else {
            redirect('users/login');
        }
    }

    public function done() {
        if ($this->session->userdata('is_logged_in')) {
            $this->load->view('voting/done');
        }
        else {
            redirect('users/login');
        }
    }
    
    public function datacalon() {
        if ($this->session->userdata('is_logged_in')){
            $data['semua_calon'] = $this->MCalon->get_rows();
            $this->load->view('voting/datacalon', $data);
        }
        else
            redirect(base_url('users/login/?next=voting/datacalon'));
    }
    
    public function quickcount() {
        if ($this->session->userdata('is_logged_in')){
            $this->load->view('voting/quickcount');
        }
        else
            redirect(base_url('users/login/?next=voting/quickcount'));
    }

}
