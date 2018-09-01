<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Instrumen extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('tbl_instrumen');

		$data = $this->db->get();

		return $data->result();
	}

	public function simpan_upload($judul,$file) {
		// $sql = "INSERT INTO tbl_instrumen VALUES(0,'Bio Dodo','buat jumlah 4.3.3.docx')";

		// $this->db->query($sql);

		// return $this->db->affected_rows();

		$data = array(
                'instrumen_name' => $judul,
                'file' => $file
            );  
        $result= $this->db->insert('tbl_instrumen',$data);
        return $result;
	}

	public function delete($id) {
		$sql = "DELETE FROM tbl_instrumen WHERE instrumen_id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
}

/* End of file M_auth.php */
/* Location: ./application/models/M_auth.php */