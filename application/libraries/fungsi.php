<?php

class fungsi{
    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }
    public function count_mahasiswa(){
        $this->ci->load->model('model_data');
        // return $this->ci->get()->num_rows();
        // return $this->ci->model_data->tampil_mahasiswa()->num_rows();
        return $this->ci->model_data->tampil_mahasiswa()->num_rows();
    }
    public function count_kehadiran(){
        $this->ci->load->model('model_data');
        // return $this->ci->get()->num_rows();
        // return $this->ci->model_data->tampil_mahasiswa()->num_rows();
        return $this->ci->model_data->tampil_kehadiran()->num_rows();
    }
    public function count_matakuliah(){
        $this->ci->load->model('model_data');
        // return $this->ci->get()->num_rows();
        // return $this->ci->model_data->tampil_mahasiswa()->num_rows();
        return $this->ci->model_data->tampil_matakuliah()->num_rows();
    }
    public function count_user(){
        $this->ci->load->model('model_data');
        // return $this->ci->get()->num_rows();
        // return $this->ci->model_data->tampil_mahasiswa()->num_rows();
        return $this->ci->model_data->tampil_user()->num_rows();
    }
} 
