<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MSiswa extends CI_Model {
	public function get_siswa(){
		$sql = "select nis, full_name, email
			from siswa order by nis";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}