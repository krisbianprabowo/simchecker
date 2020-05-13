<?php

class System_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function checkUser($username){
		$this->db->where('id_user',$username);
		return $this->db->get('user')->row() ? : null ;
	}
	
	public function updateNewPassword($id_user, $d){
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$d);

		return $this->db->affected_rows() > 0;
	}

	public function addUserMhs($d, $da){
		$this->db->trans_start();
		$this->db->insert('user',$d);
		$this->db->insert('mahasiswa', $da);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
   	 		return 0;
		}else{
			$this->db->trans_commit();
    		return 1;
		}
	}

	public function addUserDsn($d, $da){
		$this->db->trans_start();
		$this->db->insert('user',$d);
		$this->db->insert('dosen', $da);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
   	 		return 0;
		}else{
			$this->db->trans_commit();
    		return 1;
		}
	}

	public function updateUserMhs($id_user, $d, $da){
		$this->db->trans_start();
		$this->db->where('id_user', $id_user);
		$this->db->update('user',$d);

		$this->db->where('NIM', $id_user);
		$this->db->update('mahasiswa',$da);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
   	 		return 0;
		}else{
			$this->db->trans_commit();
    		return 1;
		}
	}

	public function updateUserDsn($id_user, $d, $da){
		$this->db->trans_start();
		$this->db->where('id_user', $id_user);
		$this->db->update('user',$d);

		$this->db->where('id_dosen', $id_user);
		$this->db->update('dosen',$da);
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
   	 		return 0;
		}else{
			$this->db->trans_commit();
    		return 1;
		}
	}

	public function addTitle($d){
		$this->db->insert('title_train',$d);
		
		return $this->db->affected_rows() > 0;
	}

	public function editTitle($id_pen, $d){
		$this->db->where('no', $id_pen);
		$this->db->update('title_train', $d);

		return $this->db->affected_rows() > 0;
	}
	public function deleteTitle($id_pen){
		$this->db->where('no', $id_pen);
		$this->db->delete('title_train');

		return $this->db->affected_rows() > 0;
	}

	public function updateUser($id_user, $d){
		$this->db->where('id_user',$id_user);
		$this->db->update('user',$d);
		
		return $this->db->affected_rows() > 0;
	}

	public function deleteUser($id_user){
		$this->db->where('id_user',$id_user);
		$this->db->delete('user');

		return $this->db->affected_rows() > 0;
	}

	public function deleteUserDsn($id_user){
		$this->db->trans_start();
		$this->db->where('id_user',$id_user);
		$this->db->delete('user');

		$this->db->where('id_dosen',$id_user);
		$this->db->delete('dosen');
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
   	 		return 0;
		}else{
			$this->db->trans_commit();
    		return 1;
		}
	}

	public function deleteUserMhs($id_user){
		$this->db->trans_start();
		$this->db->where('id_user',$id_user);
		$this->db->delete('user');

		$this->db->where('NIM',$id_user);
		$this->db->delete('mahasiswa');
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE){
			$this->db->trans_rollback();
   	 		return 0;
		}else{
			$this->db->trans_commit();
    		return 1;
		}
	}

	public function addTawaran($d){
		$this->db->insert('tawaran_penelitian',$d);
		
		return $this->db->affected_rows() > 0;
	}

	public function editTawaran($id_tawaran, $d){
		$this->db->where('id_tawaran', $id_tawaran);
		$this->db->update('tawaran_penelitian', $d);

		return $this->db->affected_rows() > 0;
	}

	public function deleteTawaran($id_tawaran){
		$this->db->where('id_tawaran', $id_tawaran);
		$this->db->delete('tawaran_penelitian');

		return $this->db->affected_rows() > 0;
	}

	public function countTawaran(){
		return $this->db->count_all('tawaran_penelitian');
	}

	public function selectTawaranP($limit, $start){
		$this->db->select('a.nama, b.id_tawaran, b.judul, b.interest, b.notes, b.created_at, b.id_tawaran');
		$this->db->from('dosen a, tawaran_penelitian b');
		$this->db->where('a.id_dosen = b.id_dosen');
		$this->db->limit($limit, $start);
		$this->db->order_by('b.created_at','DESC');

		return $this->db->get()->result() ? : 0;
	}

	public function countMyTawaran($id_user){
		$this->db->select('count(id_dosen) as jumlah');
		$this->db->from('tawaran_penelitian');
		$this->db->where('id_dosen', $id_user);

		return $this->db->get()->result() ? : 0;

	}

	public function selectMyTawaranP($id_user, $limit, $start){
		$this->db->select('a.nama, b.id_tawaran, b.judul, b.interest, b.notes, b.created_at');
		$this->db->from('dosen a, tawaran_penelitian b');
		$this->db->where('a.id_dosen = b.id_dosen');
		$this->db->where('b.id_dosen', $id_user);
		$this->db->limit($limit, $start);
		$this->db->order_by('b.created_at','DESC');

		return $this->db->get()->result() ? : 0;
	}

	
	public function selectUserAll(){
		$this->db->select('a.id_user, a.role, b.jabatan, b.nama as nama_dsn, c.nama as nama_mhs');
		$this->db->from('user a');
		$this->db->join('dosen b','a.id_user=b.id_dosen','left');
		$this->db->join('mahasiswa c','a.id_user=c.NIM','left');
		$this->db->order_by('a.role', 'ASC');
		return $this->db->get()->result() ? : 0;
	}

	public function graphPenelitian(){
		$this->db->select('COUNT(*) as jumlah, YEAR(tanggal_ujian) as tahun');
		$this->db->from('title_coll');
		$this->db->where('tanggal_ujian >= DATE_SUB(NOW(), INTERVAL 5 YEAR)');
		$this->db->group_by('YEAR(tanggal_ujian)');

		return $this->db->get()->result() ? : 0;
	}
}
?>