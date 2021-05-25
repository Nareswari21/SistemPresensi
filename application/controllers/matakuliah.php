<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class matakuliah extends CI_Controller{
	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
        }
	public function index()
	{
		$data['datas'] = $this->model_data->tampil_matakuliah()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar_matakuliah');
		$this->load->view('v_matakuliah', $data);
		$this->load->view('templates/footer');
	}
	// function tambah_aksi(){
	// 	$id_course = $this->input->post('id_course');
	// 	$name_course = $this->input->post('name_course');
	// 	$schedule = $this->input->post('schedule');
	// 	$lecturer = $this->input->post('lecturer');

 
	// 	$data = array(
	// 		'id_course' => $id_course,
	// 		'name_course' => $name_course,
	// 		'schedule' => $schedule,
	// 		'lecturer' => $lecturer
	// 		);
	// 	$this->model_data->input_data_matakuliah($data,'course');
	// 	redirect('matakuliah');
	// } 
	public function edit($id_course){
		$where = array('id_course' => $id_course);
		$data['course']= $this->model_data->edit_data_matakuliah($where,'course')->result();
		//print_r($id	);
		$this->load->view('v_matakuliah', $data);
	}
	public function hapus(){
		$id_course= $this->input->post('id_course');
	    $result = $this->model_data->hapus_data_mahasiswa($id_course);
		redirect('matakuliah');
	}
	public function update(){
		$id_course = $this->input->post('id_course');
		$name_course = $this->input->post('name_course');
		$schedule = $this->input->post('schedule');
		$lecturer = $this->input->post('lecturer');
		
		$updated_data = array(
			'id_course' => $id_course,
			'name_course' => $name_course,
			'schedule' => $schedule,
			'lecturer' => $lecturer
			);
		$this->model_data->update_data_matakuliah($updated_data, $this->input->post('id_course'));
		redirect('matakuliah');
	}
	public function export_excel()
	{
	   $data=$this->db->get('course')->result();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Daftar Matakuliah')
	   ->setSubject('Daftar Matakuliah')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'ID Matakuliah')
	   ->setCellValue('B1', 'Nama Matakuliah')
	   ->setCellValue('C1', 'Jadwal')
	   ->setCellValue('D1', 'Dosen Pengajar')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_course)
	   ->setCellValue('B'.$i, $datas->name_course)
	   ->setCellValue('C'.$i, $datas->schedule)
	   ->setCellValue('D'.$i, $datas->lecturer);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   $spreadsheet->getActiveSheet()->setTitle('Daftar Matakuliah '.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Daftar Matakuliah.xlsx"');
	   header('Cache-Control: max-age=0');
	   // If you're serving to IE 9, then the following may be needed
	   header('Cache-Control: max-age=1');
	 
	   // If you're serving to IE over SSL, then the following may be needed
	   header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
	   header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
	   header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
	   header('Pragma: public'); // HTTP/1.0
	 
	   $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
	   $writer->save('php://output');
	   exit;
	}
	
}