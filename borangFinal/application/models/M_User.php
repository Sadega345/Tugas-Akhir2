<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
	public function select_all() {
		// $this->db->select('u.user_id,u.username,u.pwd,u.firstname,u.lastname,r.role_name,r.role_id');
		// $this->db->from('user u,role r');

		$sql = "SELECT DISTINCT u.user_id,u.username,u.pwd,u.firstname,u.lastname,r.role_name FROM USER u INNER JOIN role r ON u.role_id=r.role_id";

		// $data = $this->db->get();

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_role() {
		$this->db->select('*');
		$this->db->from('role');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_role_byid($id){
		$sql = "SELECT u.role_id,r.role_name FROM USER u INNER JOIN role r WHERE r.role_id='{$id}'";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM user WHERE user_id = '" .$id ."'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function delete($id) {
		$sql = "DELETE FROM user WHERE user_id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$sql = "INSERT INTO user VALUES(0,'" .$data['username'] ."','" .$data['pwd'] ."','" .$data['firstname'] ."','" .$data['lastname'] ."'," .$data['role'] .",1)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE user SET 
						username='" .$data['username'] ."',
						pwd='" .$data['pwd'] ."',
						firstname='" .$data['firstname'] ."',
						lastname='" .$data['lastname'] ."'

						WHERE user_id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */