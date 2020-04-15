<?php

class System_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function check_user($username){
		$this->db->where('id_user',$username);
		return $this->db->get('user')->row() ? : null ;
	}

	public function update_acc($id_user, $d){
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$d);
		return $this->db->affected_rows() > 0;
	}

}
?>