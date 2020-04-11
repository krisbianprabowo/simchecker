<?php

class System_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function check_user($username){
		$this->db->where('id_user',$username);
		return $this->db->get('user')->row() ? : null ;
	}

}
?>