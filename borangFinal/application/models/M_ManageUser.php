<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ManageUser extends CI_Model {
	public function select_all() {
		//$this->db->select('*');
		//$this->db->from('user');

		//$data = $this->db->get();0

		$sql = "SELECT u.*, r.role_name FROM USER u, role r WHERE u.role_id=r.role_id";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_role() {
		$this->db->select('*');
		$this->db->from('role');

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
		$sql = "INSERT INTO permission  VALUES(0,
												" .$data['role'] .",
												'" .$data['datauser'] ."',
												'" .$data['instrumen'] ."',
												'" .$data['borang'] ."',
												'" .$data['standar'] ."',

												'" .$data['mhslulusan'] ."',
												'" .$data['fakultas'] ."',
												'" .$data['prodi'] ."',

												'" .$data['keuangan'] ."',
												'" .$data['logistik'] ."',
												'" .$data['dosen'] ."',
												'" .$data['jurnalilmiah'] ."')";

		// $sql = "INSERT INTO permission VALUES(
		// 										0,1,'dataUser','Instrumen','Borang','Standar','MhsLulusan',
		// 										'Fakultas','Prodi','Keuangan','Logistik','Dosen','JurnalIlmiah'
		// 									)";

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