<?php

class Alpha_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function list_penelitian_seluruh(){
		$this->db->select('no,judul');
		return $this->db->get('title_coll')->result() ? : 0;
	}


	public function list_penelitian_seluruh_a(){
		return $this->db->get('title_coll')->result_array() ? : 0;
	}

	public function update_judul($id,$title){
		$this->db->where('no',$id);
		$this->db->update('title_coll',$title);
		
		return $this->db->affected_rows() > 0;
	}

	public function jumlah_penelitian(){
		$q = $this->db->get('title_coll');

		return $q->num_rows() !=0 ? : 0;
	}

	public function select_all_term(){

		return $this->db->get('sc_tfidf')->result() ? : 0;
	}

	public function select_term($term){
		$this->db->select('id, term, idf');
		$this->db->where('term',$term);

		return $this->db->get('sc_tfidf')->row() ? : 0;
	}

	public function jumlah_term($docid,$term){
		$this->db->select('id, jumlah');
		$this->db->where('docid',$docid);
		$this->db->where('term',$term);
		
		return $this->db->get('sc_tfidf')->row();
	}

	public function insert_term($term){
		$this->db->insert('sc_tfidf',$term);
		return $this->db->affected_rows() > 0;
	}

	public function insert_batch_term($term){
		$this->db->insert_batch('sc_tfidf',$term);
		return $this->db->affected_rows() > 0;
	}

	public function update_term($docid,$term,$jumlah){
		$this->db->set('jumlah',$jumlah);
		$this->db->where('docid',$docid);
		$this->db->where('term',$term);
		$this->db->update('sc_tfidf');

		return $this->db->affected_rows() > 0;
	}

	public function select_all_term_query(){

		return $this->db->get('sc_q_tfidf')->result() ? : 0;
	}

	public function jumlah_term_query($term){
		$this->db->select('id, jumlah');
		$this->db->where('term',$term);
		
		return $this->db->get('sc_q_tfidf')->row();
	}

	public function insert_term_query($term){
		$this->db->insert('sc_q_tfidf',$term);
		return $this->db->affected_rows() > 0;
	}

	public function update_term_query($term,$jumlah){
		$this->db->set('jumlah',$jumlah);
		$this->db->where('term',$term);
		$this->db->update('sc_q_tfidf');

		return $this->db->affected_rows() > 0;
	}

	public function select_term_doc($docid,$term){
		$this->db->select('term, docid, jumlah, idf');
		$this->db->where('docid',$docid);
		$this->db->where('term',$term);

		return $this->db->get('sc_tfidf')->row() ? : 0;
	}

	public function jumlah_doc(){
		$this->db->select('no');
		$q = $this->db->get('title_coll');

		return $q->num_rows() ? : 0;
	}

	public function select_idf($term){
		$this->db->select("COUNT('id') AS df");
		$this->db->where('term',$term);
		return $this->db->get('sc_tfidf')->row() ? : 0;
	}


	public function update_idf($id,$w){
		$this->db->set('idf',$w);
		$this->db->where('id',$id);
		$this->db->update('sc_tfidf');

		return $this->db->affected_rows() > 0;
	}

	public function update_batch_idf($v){
		$this->db->update_batch('sc_tfidf',$v,'term');
		
		return $this->db->affected_rows() > 0;
	}

	public function update_idf_query($id,$w){
		$this->db->set('idf',$w);
		$this->db->where('id',$id);
		$this->db->update('sc_q_tfidf');

		return $this->db->affected_rows() > 0;
	}

	public function select_bobot_doc($docid){
		$this->db->select('(jumlah * idf) as bobot');
		$this->db->where('docid', $docid);

		return $this->db->get('sc_tfidf')->result() ? : 0;
	}

	public function select_all_vector(){
		return $this->db->get('sc_vector')->result() ? : 0;
	}

	public function insert_vector($v){
		$this->db->insert('sc_vector',$v);

		return $this->db->affected_rows() > 0;
	}

	public function tempTable_create(){
		$query 	= $this->db->query("CREATE TEMPORARY TABLE `temp_words` (
						  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
						  `term` varchar(50) NOT NULL,
						  `docid` int(5) NOT NULL,
						  `jumlah` int(3) NOT NULL,
						  `idf` double NOT NULL
						) ENGINE=InnoDB DEFAULT CHARSET=utf8");

		if ($query){
			$this->db->query("CREATE INDEX term_index ON temp_words(term);");
			$this->db->query("INSERT INTO temp_words VALUES(1,'words',302,2,0.25);");

		}
		
	
	}

	public function tempTable_show(){
		return $this->db->get('temp_words')->result();
	}



}