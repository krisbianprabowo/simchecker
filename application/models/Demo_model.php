<?php

class Demo_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function list_penelitian_seluruh(){
		return $this->db->get('tugas_akhir')->result() ? : 0;
	}

	public function list_penelitian_seluruh_a(){
		return $this->db->get('tugas_akhir')->result_array() ? : 0;
	}

	public function update_judul($id,$title){
		$this->db->set('judul',$title);
		$this->db->where('no',$id);
		$this->db->update('tugas_akhir');
		
		return $this->db->affected_rows() > 0;
	}

	public function jumlah_penelitian(){
		$q = $this->db->get('tugas_akhir');
		
		return $q->num_rows() !=0 ? $q->num_rows() : 0;
	}
}