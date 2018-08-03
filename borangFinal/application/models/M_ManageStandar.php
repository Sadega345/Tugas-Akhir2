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

	public function select_typeborang() {
		$this->db->select('*');
		$this->db->from('mst_typeborang');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_study() {
		$this->db->select('*');
		$this->db->from('mst_study');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_role_byid(){
		$sql = "SELECT DISTINCT u.role_id,r.role_name FROM USER u INNER JOIN role r WHERE u.role_id=r.role_id";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_permission_byid($id){
		$sql = "SELECT DISTINCT data_user,instrumen,borang,standar,mhslulusan,fakultas,prodi,keuangan,logistik,dosen,jurnalilmiah FROM permission WHERE permission_id='".$id."'";


		$data = $this->db->query($sql);

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
												'" .$data['nmbutir'] ."',
												'" .$data['judulbutir'] ."',
												" .$data['standar'] .",
												" .$data['typeborang'] .",
												" .$data['study'] .")";

		// $sql = "INSERT INTO mst_butir VALUES(
		// 										0,'7.2.2','JUMLAH DAN DANA KEGIATAN SOSIAL',7,2,3
		// 									)";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE mst_butir SET 
						butir_name='" .$data['nmbutir'] ."',
						title='" .$data['judulbutir'] ."',
						standar_id='" .$data['standar'] ."',
						type_borang='" .$data['typeborang'] ."',
						study_id='" .$data['study'] ."'

						WHERE butir_id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */