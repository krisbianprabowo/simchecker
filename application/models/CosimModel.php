<?php

class CosimModel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function list_penelitian_seluruh(){
		$this->db->select('no,judul');
		return $this->db->get('title_coll')->result() ? : 0;
	}

	public function listPenelitian(){
		return $this->db->get('title_train')->result() ? : 0;
	}
	

	public function list_penelitian_seluruh_a(){
		return $this->db->get('title_coll')->result_array() ? : 0;
	}

	public function update_judul($id,$title){
		$this->db->set('judul',$title);
		$this->db->where('no',$id);
		$this->db->update('title_coll');
		
		return $this->db->affected_rows() > 0;
	}

	public function jumlah_penelitian(){
		$q = $this->db->get('title_coll');

		return $q->num_rows() !=0 ? : 0;
	}

	public function titleTermSelectD(){
		$this->db->distinct();
		$this->db->select("term, (SELECT COUNT(id)) as df");
		$this->db->group_by('term');
		return $this->db->get('sc_title_tfidf')->result() ? : 0;
	}

	public function titleTermSelectA(){
		$this->db->select('*, (jumlah * idf) as bobot');
		$this->db->order_by('id','ASC');
		return $this->db->get('sc_title_tfidf')->result() ? : 0;
	}

	public function titleTermSelect($term){
		$this->db->select('id, term, idf');
		$this->db->where('term',$term);

		return $this->db->get('sc_title_tfidf')->row() ? : 0;
	}

	public function jumlah_term($docid,$term){
		$this->db->select('id, jumlah');
		$this->db->where('docid',$docid);
		$this->db->where('term',$term);
		
		return $this->db->get('sc_title_tfidf')->row();
	}

	public function insert_term($term){
		$this->db->insert('sc_title_tfidf',$term);
		return $this->db->affected_rows() > 0;
	}

	public function insert_batch_term($term){
		$this->db->insert_batch('sc_title_tfidf',$term);
		return $this->db->affected_rows() > 0;
	}

	public function update_term($docid,$term,$jumlah){
		$this->db->set('jumlah',$jumlah);
		$this->db->where('docid',$docid);
		$this->db->where('term',$term);
		$this->db->update('sc_title_tfidf');

		return $this->db->affected_rows() > 0;
	}

	public function qTitleTermSelectA(){

		return $this->db->get('sc_q_tfidf')->result() ? : 0;
	}

	public function qndTitleTermSelectA(){
		$this->db->select('sc_q_tfidf.*, SUM(sc_title_tfidf.jumlah) as jumTerm, COUNT(sc_title_tfidf.docid) as jumDoc');
		$this->db->from('sc_q_tfidf');
		$this->db->join('sc_title_tfidf', 'sc_title_tfidf.term =sc_q_tfidf.term', 'left');
		$this->db->group_by('term');

		return $this->db->get()->result() ? :0;
	}

	public function qTitleTermSelect($term){
		$this->db->select('id, jumlah');
		$this->db->where('term',$term);
		
		return $this->db->get('sc_q_tfidf')->row() ? : null;
	}

	public function qTitleTermInsert($term){
		$this->db->insert('sc_q_tfidf',$term);
		return $this->db->affected_rows() > 0;
	}

	public function qTitleTermUpdate($term,$jumlah){
		$this->db->set('jumlah',$jumlah);
		$this->db->where('term',$term);
		$this->db->update('sc_q_tfidf');

		return $this->db->affected_rows() > 0;
	}

	public function titleTermSelectByDoc($docid,$term){
		$this->db->select('term, docid, jumlah, idf');
		$this->db->where('docid',$docid);
		$this->db->where('term',$term);

		return $this->db->get('sc_title_tfidf')->row() ? : 0;
	}

	public function jumlah_doc(){
		$this->db->select('no');
		$q = $this->db->get('title_coll');

		return $q->num_rows() ? : 0;
	}

	public function jumlah_docx(){
		$this->db->select('no');
		$q = $this->db->get('title_coll');

		return $q->num_rows() ? : 0;
	}

	public function select_idf($term){
		$this->db->select("COUNT('id') AS df");
		$this->db->where('term',$term);
		return $this->db->get('sc_title_tfidf')->row() ? : 0;
	}


	public function update_idf($id,$w){
		$this->db->set('idf',$w);
		$this->db->where('id',$id);
		$this->db->update('sc_title_tfidf');

		return $this->db->affected_rows() > 0;
	}

	public function update_batch_idf($v){
		$this->db->update_batch('sc_title_tfidf',$v,'term');

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

		return $this->db->get('sc_title_tfidf')->result() ? : 0;
	}

	public function titleVectorSelectA(){
		return $this->db->get('sc_title_vector')->result() ? : 0;
	}

	public function titleVectorSelectQ(){
		return $this->db->get('sc_q_vector')->result() ? : 0;
	}

	public function insert_vector($v){
		$this->db->insert('sc_title_vector',$v);

		return $this->db->affected_rows() > 0;
	}

	public function tempTableCosimCreate(){
		$query 	= $this->db->query("CREATE TEMPORARY TABLE `temp_cosim` (
						  `docid` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
						  `cosim` double NOT NULL
						) ENGINE=InnoDB DEFAULT CHARSET=utf8");
		
	}

	public function tempTableCosimInsert($v){
		$this->db->insert_batch('temp_cosim', $v);

		return $this->db->affected_rows() > 0;
	}

	public function tempTableCosimDuplicate(){
		$query 	= $this->db->query("CREATE TEMPORARY TABLE `temp_cosim2` SELECT * FROM temp_cosim");

		if($query){
			$this->db->query("create index docid on temp_cosim2(docid)");
		}
		
	}


	public function tempTableCosimSelect(){
		$this->db->select('t.no, t.NIM, t.nama, t.judul, tc.cosim');
		$this->db->from('title_coll t, temp_cosim tc');
		$this->db->where('tc.docid = t.no');
		$this->db->order_by('tc.cosim', 'DESC');
		$this->db->limit(20);

		return $this->db->get()->result_array() ? : 0;
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

	/*----------------------------------------------------*/

	public function theoryTotalFile(){
		$this->db->select('id_theory');
		$q 	= $this->db->get('theory');

		return $q->num_rows() ? : 0;
	}

	public function theoryFileSelect(){
		$this->db->select('id_theory,id_title,theory_file');
		return $this->db->get('theory')->result() ? : 0;
	}

	public function theoryTermSelectA(){
		return $this->db->get('sc_theory_tfidf')->result() ? : 0;
	}

	public function theoryTermSelectS($term){
		$this->db->select('id, term, idf');
		$this->db->where('term',$term);

		return $this->db->get('sc_theory_tfidf')->row() ? : 0;
	}

	public function theoryTermSelectD(){
		$this->db->distinct();
		$this->db->select("term, (SELECT COUNT(id)) as df");
		$this->db->group_by('term');
		return $this->db->get('sc_theory_tfidf')->result() ? : 0;
	}

	public function theoryTermSelectByDoc($docid,$term){
		$this->db->select('id, id_theory, jumlah, idf');
		$this->db->where('id_theory',$docid);
		$this->db->where('term',$term);

		return $this->db->get('sc_theory_tfidf')->row() ? : 0;
	}

	public function theoryTermInsertB($term){
		$this->db->insert_batch('sc_theory_tfidf',$term);
		return $this->db->affected_rows() > 0;
	}

	public function theoryIdfUpdateB($v){
		$this->db->update_batch('sc_theory_tfidf',$v,'term');

		return $this->db->affected_rows() > 0;
	}

	public function theoryWeightSelect($docid){
		$this->db->select('(jumlah * idf) as bobot');
		$this->db->where('id_theory', $docid);

		return $this->db->get('sc_theory_tfidf')->result() ? : 0;
	}

	public function theoryVectorSelect(){
		return $this->db->get('sc_theory_vector')->result() ? : 0;
	}

	public function theoryVectorInsert($v){
		$this->db->insert('sc_theory_vector',$v);

		return $this->db->affected_rows() > 0;
	}

	public function qTheoryTermSelect(){
		return $this->db->get('sc_q_tfidf')->result() ? : 0;
	}


	public function qTheoryTermSelectS($term){
		$this->db->select('id, jumlah');
		$this->db->where('term',$term);
		$q = $this->db->get('sc_q_tfidf');
		if ($q->num_rows() != 0){
			return $q->row();
		}
	}

	public function qTheoryTermUpdate($term,$jumlah){
		$this->db->set('jumlah',$jumlah);
		$this->db->where('term',$term);
		$this->db->update('sc_q_tfidf');

		return $this->db->affected_rows() > 0;
	}

	public function qTheoryTermInsert($term){
		$this->db->insert('sc_q_tfidf',$term);
		return $this->db->affected_rows() > 0;
	}

	public function qTheoryIdfUpdate($id,$w){
		$this->db->set('idf',$w);
		$this->db->where('id',$id);
		$this->db->update('sc_q_tfidf');

		return $this->db->affected_rows() > 0;
	}

}
?>