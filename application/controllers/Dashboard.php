<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->check_isvalidated();
    }
    public function index() {
        $this->load->view('index');
    }
    
    public function error() {
        $this->load->view('template/error');
    }

    private function check_isvalidated() {
        if (!$this->session->userdata('clinic_logged_in')) {
            redirect('login', 'refresh');
        }
    }
}
