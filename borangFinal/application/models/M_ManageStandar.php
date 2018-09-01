<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ManageStandar extends CI_Model {
	public function select_all() {
		//$this->db->select('*');
		//$this->db->from('user');

		//$data = $this->db->get();0

		$sql = "SELECT ms.standar_id,ms.standar_name,mb.butir_name,mb.title,mb.butir_id FROM mst_standar ms INNER JOIN mst_butir mb WHERE ms.standar_id=mb.standar_id";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_standar() {
		$this->db->select('*');
		$this->db->from('mst_standar');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM mst_standar WHERE standar_id = '" .$id ."'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function delete($id) {
		$sql = "DELETE FROM mst_standar WHERE standar_id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$sql = "INSERT INTO mst_standar  VALUES(0,
												'".$data['nmstandar']."')";

		// $sql = "INSERT INTO mst_butir VALUES(
		// 										0,'7.2.2','JUMLAH DAN DANA KEGIATAN SOSIAL',7,2,3
		// 									)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE mst_standar SET 
						standar_name='" .$data['nmstandar'] ."'

						WHERE standar_id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */