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
				$sql = "SELECT u.username,rp.nama_modul FROM USER u,role_permission rp WHERE u.role_id=rp.role_id AND u.username='".$username."' ";

				$data = $this->db->query($sql);
				
				$result = $data->row();

				   var_dump($result->fakultas);
			       $session_menu = array(
					'nama_modul' => $result->nama_modul,
					'username' => $result->username,
					'firstname' => $result->firstname,
					'lastname' => $result->lastname,
					'user_id' => $result->user_id
				);
				$this->session->set_userdata($session_menu);
				
				// echo  $this->session->userdata('fakultas');
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