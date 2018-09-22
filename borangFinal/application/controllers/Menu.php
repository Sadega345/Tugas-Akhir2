<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Menu');
	}

	public function index() {
		$data['userdata'] = $this->userdata;

		$data['page'] = "menu";
		$data['judul'] = "Menu Butir";
		$data['deskripsi'] = "Manage Data Butir";
		// $data['dataStandar'] = $this->M_ManageStandar->select_standar();
		
		// $data['modal_tambah_manageStandar'] = show_my_modal('modals/modal_tambah_manageStandar', 'tambah-manageStandar', $data);

		// $this->template->views('ManageStandar/home', $data);
		$this->template->views('hell.php',$data);
	}

	public function detail($param=""){

		if($param=="") $param = $this->uri->segment(3);
		$data['userdata'] = $this->userdata;

		$data['page'] = "menu";
		$data['judul'] = "Menu Butir";
		$data['deskripsi'] = "Manage Data Butir";

		$data['tabel'] = $param;
		$data['dataMenu'] = $this->M_Menu->select_all($param);
		$data['dataMenuHeader'] = $this->M_Menu->select_kolom($param);

	
		 $session_form = array(
					'field' => $data['dataMenuHeader'],
					'table' => $data['tabel']
				);

		$this->session->set_userdata($session_form);
		$data['modal_tambah_hasilMenu'] = show_my_modal('modals/modal_tambah_hasil_menu','tambah-hasilMenu');
		$this->template->views('HasilButir/hell.php',$data);
	}

	public function prosesTambah() {
		 $this->form_validation->set_rules('tabel', 'Nama tabel', 'trim|required');
		
		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_Menu->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update($param="") {
		if($param=="") $param = $this->uri->segment(3);

		$id = trim($_POST['id']);
		$tabel = $_POST['tabel'];

		$data['dataMenuHeader'] = $this->M_Menu->select_kolom($param);

		$data['dataMenu'] = $this->M_Menu->select_by_id($id,$tabel);
		
		$data['userdata'] = $this->userdata;
	
		$session_form = array(
			'field' => $data['dataMenuHeader'],
		);
		
		echo show_my_modal('modals/modal_update_hasil_menu','ubah-datahasilmenu' ,$data);
		
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('tabel', 'Nama tabel', 'trim|required');		

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_Menu->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete() {
		$id = $_POST['id'];
		$tabel = $_POST['tabel'];
		$result = $this->M_Menu->delete($id, $tabel);

		if ($result > 0) {
			echo show_succ_msg('Data Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Gagal dihapus', '20px');
		}
	}

	public function export() {
		error_reporting(E_ALL);
    
		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();

		$data = $this->M_pegawai->select_all_pegawai();

		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0); 
		$rowCount = 1; 

		$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, "ID");
		$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, "Nama");
		$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, "Nomor Telepon");
		$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, "ID Kota");
		$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, "ID Kelamin");
		$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, "ID Posisi");
		$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, "Status");
		$rowCount++;

		foreach($data as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->id); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value->nama); 
		    $objPHPExcel->getActiveSheet()->setCellValueExplicit('C'.$rowCount, $value->telp, PHPExcel_Cell_DataType::TYPE_STRING);
		    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->id_kota); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->id_kelamin); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->id_posisi); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->status); 
		    $rowCount++; 
		} 

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
		$objWriter->save('./assets/excel/Data Pegawai.xlsx'); 

		$this->load->helper('download');
		force_download('./assets/excel/Data Pegawai.xlsx', NULL);
	}

	public function import() {
		$this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {
			$this->session->set_flashdata('msg', 'File harus diisi');
		} else {
			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('excel')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data = $this->upload->data();
				
				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' .$data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

				$index = 0;
				foreach ($sheetData as $key => $value) {
					if ($key != 1) {
						$id = md5(DATE('ymdhms').rand());
						$check = $this->M_pegawai->check_nama($value['B']);

						if ($check != 1) {
							$resultData[$index]['id'] = $id;
							$resultData[$index]['nama'] = ucwords($value['B']);
							$resultData[$index]['telp'] = $value['C'];
							$resultData[$index]['id_kota'] = $value['D'];
							$resultData[$index]['id_kelamin'] = $value['E'];
							$resultData[$index]['id_posisi'] = $value['F'];
							$resultData[$index]['status'] = $value['G'];
						}
					}
					$index++;
				}

				unlink('./assets/excel/' .$data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_pegawai->insert_batch($resultData);
					if ($result > 0) {
						$this->session->set_flashdata('msg', show_succ_msg('Data Pegawai Berhasil diimport ke database'));
						redirect('Pegawai');
					}
				} else {
					$this->session->set_flashdata('msg', show_msg('Data Pegawai Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('Pegawai');
				}

			}
		}
	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */