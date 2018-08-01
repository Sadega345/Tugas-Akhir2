<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instrumen extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Instrumen');
	}

	public function index() {
		$data['userdata'] = $this->userdata;

		$data['page'] = "instrumen";
		$data['judul'] = "Instrumen";
		$data['deskripsi'] = "Instrumen";
		//$data['dataRole'] = $this->M_User->select_role();
		$data['modal_tambah_file'] = show_my_modal('modals/modal_tambah_file', 'tambah-instrumen', $data);

		$this->template->views('Instrumen/home', $data);
	}

	public function tampil() {
		$data['instrumen'] = $this->M_Instrumen->select_all();
		$this->load->view('Instrumen/list_data', $data);
	}

	public function do_upload() {

		$config['upload_path']="./assets/instrumen";
        $config['allowed_types']='xlsx|docs|pdf';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
            $data = array('upload_data' => $this->upload->data());
 
            $judul= $this->input->post('instrumen_name');
            $file= $data['upload_data']['file_name']; 
             
            $result= $this->M_Instrumen->simpan_upload($judul,$file);
            echo json_decode($result);
        }
	}

	

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_Instrumen->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Instrumen Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Instrumen Gagal dihapus', '20px');
		}
	}

	
	
}

/* End of file KelolaUser.php */
/* Location: ./application/controllers/KelolaUser.php */