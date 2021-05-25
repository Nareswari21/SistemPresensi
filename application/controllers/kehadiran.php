<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	// Load library phpspreadsheet
	require('./excel/vendor/autoload.php');

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	// End load library phpspreadsheet

class kehadiran extends CI_Controller{
	function __construct(){
        parent::__construct();      
        $this->load->model('model_data');
        $this->load->helper('url');
		$this->load->database();
		$this->load->library('session','form_validation');
        }
    public function index()
    {
        $data['datas'] = $this->model_data->tampil_kehadiran()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar_kehadiran');
		$this->load->view('v_kehadiran', $data);
		$this->load->view('templates/footer');
    }
	public function hapus(){
		$id_attendance= $this->input->post('id_attendance');
	    $result = $this->model_data->hapus_data_kehadiran($id_attendance);
		redirect('kehadiran');
	}
	public function export_excel()
	{
	   //$data=$this->db->get('attendance')->result();
	   $data = $this->model_data->tampil_kehadiran();
	   // Create new Spreadsheet object
	   $spreadsheet = new Spreadsheet();
	 
	   // Set document properties
	   $spreadsheet->getProperties()->setCreator('Nareswari')
	   ->setLastModifiedBy('Nares')
	   ->setTitle('Kehadiran Mahasiswa')
	   ->setSubject('Kehadiran Mahasiswa')
	   ->setDescription('Test document for Office 2019 XLSX, generated using PHP classes.')
	   ->setKeywords('office 2019 openxml php')
	   ->setCategory('Test result file');
	 
	   // Add some data
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A1', 'No')
	   ->setCellValue('B1', 'Nama Mahasiswa')
	   ->setCellValue('C1', 'Matakuliah')
	   ->setCellValue('D1', 'Time')
	   ;
	 
	   // Miscellaneous glyphs, UTF-8
	   $i=2;
	   $no=1; 
	   
	   foreach($data as $datas) {
	 
	   $spreadsheet->setActiveSheetIndex(0)
	   ->setCellValue('A'.$i, $datas->id_attendance)
	   ->setCellValue('B'.$i, $datas->name)
	   ->setCellValue('C'.$i, $datas->name_course)
	   ->setCellValue('D'.$i, $datas->time_stamp);

	 
	   $no++;
	   $i++;
	   }
	 
	   // Rename worksheet
	   //$spreadsheet->getActiveSheet()->setTitle('Kehadiran Mahasiswa '.date('d-m-Y H'));
	 
	   // Set active sheet index to the first sheet, so Excel opens this as the first sheet
	   $spreadsheet->setActiveSheetIndex(0);
	 
	   // Redirect output to a client’s web browser (Xlsx)
	   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	   header('Content-Disposition: attachment;filename="Kehadiran Mahasiswa.xlsx"');
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