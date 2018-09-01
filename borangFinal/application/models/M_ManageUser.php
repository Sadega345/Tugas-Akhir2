<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ManageUser extends CI_Model {
	public function select_all() {
		//$this->db->select('*');
		//$this->db->from('user');

		//$data = $this->db->get();0

		$sql = "SELECT p.role_id,p.permission_id,p.id_historis,p.nama_modul,r.role_name FROM role_permission p, role r WHERE p.role_id=r.role_id";

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

	public function select_historis(){
		$sql = "SELECT * FROM mst_historis ";


		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM role_permission where permission_id= '".$id."' ";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function delete($id) {
		$sql = "DELETE FROM role_permission WHERE permission_id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		$menu = $data['menu'];
		$idhistoris = $data['id'];
		$sql = "";
		
		for($i =0; $i < count($menu); $i++){
				$sql = "INSERT INTO role_permission  VALUES(0,
												" .$data['role'].",
												".$idhistoris[$i].",
												'" .$menu[$i]."'
											);";
				$this->db->query($sql);							
		}
		
		return $this->db->affected_rows();
	}

	public function update($data) {
		$sqlDataUser = "";

		if(isset($data['datauser'])){
			$sqlDataUser .= " data_user = '".$data['datauser']."',";
		}
		if(isset($data['instrumen'])){
			$sqlDataUser .= " instrumen = '".$data['instrumen']."',";
		}
		if(isset($data['borang'])){
			$sqlDataUser .= " borang = '".$data['borang']."',";
		}
		if(isset($data['standar'])){
			$sqlDataUser .= " standar = '".$data['standar']."',";
		}

		$cekkoma = substr($sqlDataUser, (strlen($sqlDataUser)-1));
		if($cekkoma==","){
			$sqlDataUser = substr($sqlDataUser,1,(strlen($sqlDataUser)-2));
		}
		$sql = "UPDATE permission SET 
						".$sqlDataUser."
						WHERE role_id=" .$data['id'];


		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */