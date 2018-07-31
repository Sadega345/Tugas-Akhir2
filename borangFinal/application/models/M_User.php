<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('user');

		$data = $this->db->get();

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
		$sql = "INSERT INTO user VALUES('{$user_id}','" .$data['username'] ."','" .$data['pwd'] ."'," .$data['firstname'] ."','" .$data['lastname'] ."'," .$data['role_id'] .")";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */