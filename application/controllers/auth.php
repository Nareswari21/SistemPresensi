<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function index($error = NULL) {
        $data = array(
            'title' => 'Login Page',
            'action' => site_url('auth/login'),
            'error' => $error
        );
        check_already_login();
        $this->load->view('templates/header');
        $this->load->view('v_login', $data);
        $this->load->view('templates/footer');
    }
    public function login() {
        $this->load->model('model_data');
        $login = $this->model_data->login($this->input->post('username'), md5($this->input->post('password')));
        if ($login == 1) {
            $row = $this->model_data->data_login($this->input->post('username'), md5($this->input->post('password')));
            $data = array(
                'logged' => TRUE,
                'username' => $row->username
            );
            $this->session->set_userdata($data);
            redirect(site_url('dashboard'));
        } else {
            $error = 'username / password salah';
            $this->index($error);
        }
    }
    function deskripsi(){
        $this->load->view('templates/header');
        $this->load->view('v_deskripsi');
        $this->load->view('templates/footer');
    }
    // function tambah_aksi(){
    //         $username = $this->input->post('username');
    //         $password = $this->input->post('password');
     
    //         $data = array(
    //             'username' => $username,
    //             'password' => md5($password)
    //             );
    //         $this->model_data->input_data_register($data,'user');
    //         redirect('auth');
    //     }
    function logout() {
        $this->session->sess_destroy();
        redirect(site_url('auth'));
    }
}