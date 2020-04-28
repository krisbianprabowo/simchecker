<?php

class System_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function checkUser($username){
		$this->db->where('id_user',$username);
		return $this->db->get('user')->row() ? : null ;
	}

	public function addTitle($d){
		$this->db->insert('title_train',$d);
		
		return $this->db->affected_rows() > 0;
	}

	public function updateAcc($id_user, $d){
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$d);
		return $this->db->affected_rows() > 0;
	}

	public function addTawaran($d){
		$this->db->insert('tawaran_penelitian',$d);
		
		return $this->db->affected_rows() > 0;
	}

}
?>