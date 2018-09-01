<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_CreateTable extends CI_Model {
	public function select_historistable() {
		$sql = "SELECT * FROM mst_historis";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_mstbutir() {
		$sql = "SELECT * FROM mst_butir";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
		$inputan_form = $data['kolom'];
		$param = explode('|', $data['nmbutir']);
		$nama_judul = $param[0];
		$butir_id = $param[1];
		$judul_underscore = str_replace(".", "_", str_replace(" ", "_", $nama_judul));

		$gabungan_kata = implode(",", $inputan_form);

		$isi_form = "";
		$isi_kolom = "";

		
		
		foreach($inputan_form as $value){
			$isi_form .= $value.",";
			
			$isi_kolom .=",". $value." VARCHAR(100) NOT NULL";
			
		}
		$isi_kolom = substr($isi_kolom, 1);
		$sql = "INSERT INTO mst_historis values(0,
													'".$judul_underscore."',
													'".$isi_form."',
													'".$butir_id."',
													'".strtolower($judul_underscore)."') ;";
		$sql2 = "CREATE TABLE IF NOT EXISTS ".$judul_underscore."(
					".$isi_kolom."
				)";

		$this->db->query($sql2);
		$this->db->query($sql);
	

		return $this->db->affected_rows();
	}

	// public function delete($id) {
	// 	$sql = "DELETE FROM mst_historis WHERE id_historis='" .$id ."'";

	// 	$this->db->query($sql);

	// 	return $this->db->affected_rows();
	// }

	public function delete($id) {
		// $nama_judul = $_REQUEST['nmbutir'];
		$ex_butir_id = explode("|", $id);
		$butir_id = $ex_butir_id[0];
		$nama_judul = $ex_butir_id[1];
		$sql2 = "DROP TABLE ".$nama_judul." ";

		$sql = "DELETE FROM mst_historis WHERE id_historis='".$id."'";

		$this->db->query($sql2);
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */