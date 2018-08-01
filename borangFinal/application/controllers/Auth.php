<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_auth');
	}
	
	public function index() {
		$session = $this->session->userdata('status');

		if ($session == '') {
			$this->load->view('login');
		} else {
			redirect('Home');
		}
	}

	public function login() {
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->M_auth->login($username, $password);

			if ($data == false) {
				$this->session->set_flashdata('error_msg', 'Username / Password Anda Salah.');
				redirect('Auth');
			} else {
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				$this->session->set_userdata($session);
				$sql = "SELECT data_user,instrumen,borang,standar,mhslulusan,fakultas,prodi,
				keuangan,logistik,dosen,jurnalilmiah FROM permission";

				$data = $this->db->query($sql);

				$result = $data->row();
				$session_data = array(
					'data_user' => $result->data_user,
					'instrumen' => $result->instrumen,
					'borang' => $result->borang,
					'standar' => $result->standar,
					'mhslulusan' => $result->mhslulusan,
					'fakultas' => $result->fakultas,

					'prodi' => $result->prodi,
					'keuangan' => $result->keuangan,
					'logistik' => $result->logistik,
					'dosen' => $result->dosen,
					'jurnalilmiah' => $result->jurnalilmiah
				);
				$this->session->set_userdata($session_data);
				
				redirect('Home');

			}
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('Auth');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Auth');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */