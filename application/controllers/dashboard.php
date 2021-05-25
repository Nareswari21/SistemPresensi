<?php

class dashboard extends CI_Controller{

	public function index()
	{
		check_not_login();
		$data['datas'] = $this->model_data->tampil_chart()->result();
		$data['datas2'] = $this->model_data->tampil_chart2()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_dashboard');
		$this->load->view('v_dashboard', $data);
		$this->load->view('templates/footer');

	}
}

?>