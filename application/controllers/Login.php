<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('manage_login');
        $this->load->helper('security');
       
    }

    function index() {
        if (!$this->session->userdata('clinic_logged_in')) {
            $this->load->view('login/login');
        }else {
            redirect('dashboard');
        }
    }

    public function user_login_process() {
        if (!$this->session->userdata('clinic_logged_in')) {
            $this->form_validation->set_rules('username', 'Username', 'required|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'required|xss_clean');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login/login');
            } else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                );
                $result = $this->manage_login->login($data);
                if ($result == TRUE) {
                    $sess_array = array(
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password')
                    );

                    $this->session->set_userdata('clinic_logged_in', 1);
                     redirect('dashboard');
                   
                } else {
                    $data = array(
                        'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('login/login' , $data);
                }
                
            }
        } else {
            redirect('dashboard');
        }
    }
    
    function logout() {

       $this->session->sess_destroy();
    
        redirect('login', 'refresh');
    }

    

}