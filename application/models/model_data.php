<?php

class model_data extends CI_Model{

	function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get('user');
        return $query->num_rows();
    }

    function data_login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->row();
    }
    // public function input_data_register($data,$table){
	// 	$this->db->insert($table,$data);
	// }
	
	#chart
	public function tampil_chart(){
        $query=$this->db->query("select count(name) as totalperson from person;");

        return $query;
    }
	public function tampil_chart2(){
		$query=$this->db->query("select count(name_course) as totalcourse from course;");

        return $query;
    }
	#user
	public function tampil_user(){
		return $this->db->get('user');
	}
	//data mahasiswa
	public function tampil_mahasiswa(){
		return $this->db->get('person');
	}
	// public function edit_data_mahasiswa($where,$table){	
	// 	return $this->db->get_where($table,$where);
	// }
	// public function update_data_mahasiswa($updated_data, $id_person){
	// 	$this->db->where('id_person', $id_person); 
	// 	$this->db->update('person', $updated_data);
	// }
	public function hapus_data_mahasiswa($id_person){
        $result = $this->db->delete('person', array('id_person' => $id_person)); 
        return $result;
	}
	//matakuliah
	public function tampil_matakuliah(){
		return $this->db->get('course');
	}
	// function input_data_matakuliah($data,$table){
	// 	$this->db->insert($table,$data);
	// }
	// public function edit_data_matakuliah($where,$table){	
	// 	return $this->db->get_where($table,$where);
	// }
	public function update_data_matakuliah($updated_data, $id_course){
		$this->db->where('id_course', $id_course); 
		$this->db->update('course', $updated_data);
	}
	public function hapus_data_matakuliah($id_course){
        $result = $this->db->delete('course', array('id_course' => $id_course)); 
        return $result;
	}
	//kehadiran
	public function tampil_kehadiran(){
		$this->db->select('attendance.id_attendance, person.name, course.name_course, attendance.time_stamp');
		$this->db->from('attendance');
		$this->db->join('person','person.id_person = attendance.id_person', 'left');
		$this->db->join('course','course.id_course = attendance.id_course', 'left');
		$query = $this->db->get();
		return $query;
	}
	public function hapus_data_kehadiran($id_attendance){
        $result = $this->db->delete('attendance', array('id_attendance' => $id_attendance)); 
        return $result;
	}
}