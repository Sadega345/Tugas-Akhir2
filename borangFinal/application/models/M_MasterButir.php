<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_MasterButir extends CI_Model {
	public function select_all() {
		//$this->db->select('*');
		//$this->db->from('user');

		//$data = $this->db->get();0

		$sql = "SELECT ms.standar_id,ms.standar_name,mb.butir_name,mb.title,mb.butir_id FROM mst_standar ms INNER JOIN mst_butir mb WHERE ms.standar_id=mb.standar_id";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_butir() {
		$sql = "SELECT butir_id,butir_name,title FROM mst_butir";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_standar() {
		$this->db->select('*');
		$this->db->from('mst_standar');

		$data = $this->db->get();

		return $data->result();
		
	}

	public function select_study() {
		$this->db->select('*');
		$this->db->from('mst_study');

		$data = $this->db->get();

		return $data->result();
		
	}

	public function select_typeborang() {
		$this->db->select('*');
		$this->db->from('mst_typeborang');

		$data = $this->db->get();

		return $data->result();
		
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM mst_butir WHERE butir_id = '" .$id ."'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function delete($id) {
		$sql = "DELETE FROM mst_butir WHERE butir_id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$sql = "INSERT INTO mst_butir  VALUES(0,
												'".$data['namabutir']."',
												'".$data['judulbutir']."',
												'".$data['nmstandar']."',
												'".$data['typeborang']."',
												'".$data['study']."'
											)";

		// $sql = "INSERT INTO mst_butir VALUES(
		// 										0,'4..9.1','Lembaga Pendidikan ',4,1,3
		// 									)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE mst_butir SET 
						butir_name='" .$data['nmbutir'] ."',
						title = '".$data['judulbutir']."',
						standar_id = '".$data['standar']."',
						type_borang = '".$data['typeborang']."',
						study_id = '".$data['study']."' WHERE butir_id='" .$data['id'] ."'";

		// $sql = "UPDATE mst_butir SET 
		// 				butir_name='3.1.3',
		// 				title = 'DATA MAHASISWA REGULER DAN NON REGULER',
		// 				standar_id = 'Standar 10',
		// 				type_borang = 'A',
		// 				study_id = 'S1'

		// 				WHERE butir_id=31";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */