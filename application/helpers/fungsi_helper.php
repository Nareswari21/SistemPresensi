<?php

function check_already_login() {
	$ci =& get_instance();
	$user_session = $ci->session->userdata('username');
	if($user_session) {
		redirect('dashboard');
	}
}

function check_not_login() {
	$ci =& get_instance();
	$user_session = $ci->session->userdata('username');
	if(!$user_session) {
		redirect('auth');
	}
}
// function count_mahasiswa(){
// 	$ci =& get_instance();
// 	$this->ci->load->model('model_data');
// 	return $this->ci->get()->num_rows();
// }