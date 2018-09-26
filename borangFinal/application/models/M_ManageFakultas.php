<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ManageFakultas extends CI_Model {
	public function select_all() {
		//$this->db->select('*');
		//$this->db->from('user');

		//$data = $this->db->get();0

		$sql = "SELECT ms.standar_id,ms.standar_name,mb.butir_name,mb.title,mb.butir_id FROM mst_standar ms INNER JOIN mst_butir mb WHERE ms.standar_id=mb.standar_id";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_fakultas() {
		$this->db->select('*');
		$this->db->from('mst_faculty');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM mst_faculty WHERE faculty_id = '" .$id ."'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function delete($id) {
		// $sql = "DELETE FROM mst_faculty WHERE faculty_id='".$id ."'";

		$sql = "DELETE FROM mst_faculty WHERE faculty_id=".$id;

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$sql = "INSERT INTO mst_faculty  VALUES(0,
												'".$data['nmfakultas']."')";

		// $sql = "INSERT INTO mst_faculty VALUES(
		// 										0,'Psikologi'
		// 									)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE mst_faculty SET 
						faculty_name='" .$data['nmfakultas'] ."'

						WHERE faculty_id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */