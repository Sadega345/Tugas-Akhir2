<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Menu extends CI_Model {
	public function select_all($param) {

		$sql = "SELECT * FROM ".$param." ";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_kolom($param){
		$sql = "
					SELECT column_name
					FROM INFORMATION_SCHEMA.COLUMNS
					WHERE TABLE_NAME = N'".$param."' 
				";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data){
		$listkolom = $data['arrayfield'];
		$hasilkolom =  explode("|", $listkolom);

		$query_temp="";
		
		for($i = 0; $i < count($hasilkolom); $i++){
			$query_temp.=",'".$data[$hasilkolom[$i]]."'";
		}
		$query_temp = substr($query_temp, 1);
		$query = "INSERT INTO ".$data['tabel']." values(".$query_temp.")";

		// $sql = "INSERT INTO 3_4_5_lembaga_yang_memesan_lulusan_untuk_bekerja VALUES (
		// 		$data['Nama3'],
		// 		$data['Alamat3'],
		// 		$data['id']
		// 		)";
      
       $this->db->query($query);

	   return $this->db->affected_rows();
	}

	public function delete($id, $tabel){

		$query = "DELETE FROM ".$tabel." WHERE id =".$id;
      
       $this->db->query($query);

	   return $this->db->affected_rows();
	}

	public function select_by_id($id,$tabel){
		$sql = "SELECT * FROM ".$tabel." WHERE id = ".$id;

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data){
		$listkolom = $data['arrayfield'];
		$hasilkolom =  explode("|", $listkolom);

		$query_temp="";
		
		for($i = 1; $i < count($hasilkolom); $i++){
			$query_temp .=",".$hasilkolom[$i]."='".$data[$hasilkolom[$i]]."'";
		}
		$query_temp = substr($query_temp, 1);

		$sql = "UPDATE ".$data['tabel']." SET 
				".$query_temp."
				WHERE id= ".$data['id'];

		$data = $this->db->query($sql);

		return 1;
	}

}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */