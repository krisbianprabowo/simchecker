<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sim_checker extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('demo_model');
		$this->load->model('alpha_model');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('utility');
	}

	public function index(){
		$this->load->view('dashboard/dtemplate.php');
	}

	public function simcheck_theory(){

		$d['body'] = 'dashboard/sim/_similarity-theory.php'; 
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function simcheck_title(){
		$title = $this->input->get('title');
		/*$lowcase = strtolower($title);
		$stem = array();
		$term = explode(" ",$lowcase);*/
		$token = $this->preprocess->Text($title);
		$stop_word = array();
		if (empty($title)){
			$d['title_c'] = "Data yang diinputkan kosong";
		}else {
			foreach ($token as $t){
				$s = $this->porter->Stem($t);
				array_push($stop_word,$s);
			}
			$cleanWord = implode(" ",$stop_word);

			$d['title_c'] = $cleanWord;
		}
		$d['body'] = 'dashboard/sim/_similarity-title.php'; 
		$this->load->view('dashboard/dtemplate.php',$d);
		
	}


	public function tawaran_penelitian(){
		$d['body'] = 'dashboard/sim/_tawaran-penelitian.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function list_penelitian(){
		$d['l'] = $this->demo_model->list_penelitian_seluruh();

		$d['body'] = 'dashboard/sim/_list-penelitian.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function list_penelitian_o(){
		$d['l'] = $this->demo_model->list_penelitian_seluruh();

		$d['body'] = 'dashboard/olah/_list-penelitian-olah.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function trend(){
		$d['body'] = 'dashboard/sim/_trend.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function olah_akun(){
		$d['body'] = 'dashboard/olah/_akun-olah.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function format_judul(){
		$l = $this->demo_model->list_penelitian_seluruh_a();
		foreach ($l as $l){

			$c_judul 	= html_entity_decode($l['judul_sebelum']);
			$c_judul2 	= htmlspecialchars_decode($c_judul,ENT_QUOTES);
			echo $c_judul2;
			$l['judul'] = strip_tags($c_judul2);

			$status = $this->demo_model->update_judul($l['no'],$l['judul']);
			if($status==1)
				echo "berhasil";
			else
				echo "gagal";
			
		}
	}
	public function term_process(){

		$j = $this->alpha_model->list_penelitian_seluruh();
		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time1: {$time}";
		$this->db->query("TRUNCATE table sc_tfidf");
		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time12: {$time}";
		set_time_limit(300);
		foreach($j as $j){
			$title = $j->judul;
			$docid = $j->no;
			/*$lowcase = strtolower($title);
			$stem = array();
			$term = explode(" ",$lowcase);*/
			$token = $this->preprocess->Text($title);
			
			$stop_word = array();
			foreach ($token as $t){
				$term 	= $this->porter->Stem($t);
				$hitung_term = $this->alpha_model->jumlah_term($docid,$term);

				if (count($hitung_term) > 0) {
					$jumlah = $hitung_term->jumlah;
					$jumlah++;
					$s['jumlah'] = $jumlah;

					/*$this->alpha_model->update_term($docid,$term,$s['jumlah']);*/
				} else {
					$s['term'] 	= $term;
					$s['docid']	= $docid;
					$s['jumlah'] = 1;
					
					array_push($stop_word,$s);
				}
			}

			
			$this->alpha_model->insert_batch_term($stop_word);
			echo $this->db->last_query();
		}
		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time2: {$time}";
		$N = $this->alpha_model->jumlah_doc();
		$all = $this->alpha_model->select_all_term();

		foreach ($all as $all) {
			$term 	= $all->term;
			$tf  	= $all->jumlah;
			$setdf 	= $this->alpha_model->select_idf($term);
			$idf =  log(round($N/$setdf->df,3),10);
			$idf_round = round($idf,3);
			$this->alpha_model->update_idf($all->id, $idf_round);
			/*echo "$term ".round($w,3,PHP_ROUND_HALF_DOWN)."<br>";*/
		}

		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time3: {$time}";

    	echo max_allowed_packet;
		

	}

	public function vector_process(){
		$this->db->query("TRUNCATE table sc_vector");
		$j1 = $this->alpha_model->list_penelitian_seluruh();

		foreach ($j1 as $j1) {
			$docid = $j1->no;

			$wterm = $this->alpha_model->select_bobot_doc($docid);

			$ysum = 0;
			foreach ($wterm as $w){
				echo $docid." ".$w->bobot;
				$ysum = $ysum + pow($w->bobot,2);
				echo "=".round($ysum,3)."+";
				/*echo $ysum."+";*/
			}
			$yvector 	= sqrt($ysum);
			$yVectorR3 	= round($yvector,3);

			$v['docid'] 	= $docid;
			$v['yvector'] 	= $yVectorR3;
			$this->alpha_model->insert_vector($v);
			echo round($yvector,3)."<br>";
		}
	}

	public function cosim_process(){
		$this->db->query("TRUNCATE table sc_q_tfidf");
		$title = $this->input->get('title');
		$token = $this->preprocess->Text($title);
		$stop_word = array();

		if (empty($title)){
			echo "Data yang diinputkan kosong";
		}else {
			foreach ($token as $t){
				$term 	= $this->porter->Stem($t);
				$hitung_term = $this->alpha_model->jumlah_term_query($term);
				if (count($hitung_term) > 0) {
					$jumlah = $hitung_term->jumlah;
					$jumlah++;
					$s['jumlah'] = $jumlah;

					$this->alpha_model->update_term_query($term,$s['jumlah']);
				} else {
					$s['term'] 	  	= $term;
					$s['jumlah']  	= 1;
					$this->alpha_model->insert_term_query($s);
				}
			}

			$all 	= $this->alpha_model->select_all_term_query();
			$xsum 	= 0; 
			foreach ($all as $all) {

				$term 	= $all->term;
				$tf  	= $all->jumlah;
				$setIdf 	= $this->alpha_model->select_term($term);
				if ($setIdf == FALSE){
					/*echo "gagal";
					echo $idf;*/
					$w_round = 0;
					$xsum = $xsum + pow($w_round,3);
				}else {
					$this->alpha_model->update_idf_query($all->id,$setIdf->idf);
					$w = $tf * $setIdf->idf;
					$w_round = round($w,3);
					
					/*$this->alpha_model->update_bobot($all->id,$w_round);*/
					$xsum = $xsum + pow($w_round,2);
					
				}
			}

			$xvector 	= sqrt($xsum);
			$xVectorR3 	= round($xvector,3);
			echo $xVectorR3."<br>";
			
			$all_vector = $this->alpha_model->select_all_vector();
			foreach ($all_vector as $vall){
				$dot_product = 0;
				$vector_d = $vall->yvector;
				$all_2	= $this->alpha_model->select_all_term_query();
				foreach ($all_2 as $all_2 ){
					$bobot_q = $all_2->jumlah * $all_2->idf;
					$tfidf_d = $this->alpha_model->select_term_doc($vall->docid, $all_2->term);
					if ($tfidf_d == FALSE){
						$bobot_d = 0;
					}else {
						$bobot_d = $tfidf_d->jumlah * $tfidf_d->idf;
					}
					$dot_product = $dot_product + ($bobot_d * $bobot_q);

				}

				$cosim = $dot_product/($vector_d*$xVectorR3);

				echo round($cosim,3)."+";

			}
		}

	}

	/*public function sample_term(){
		$j = $this->alpha_model->list_penelitian_seluruh();
		$this->db->query("TRUNCATE table sc_tfidf");

		foreach($j as $j){
			$title = $j->judul;
			$docid = $j->id;
			$lowcase = strtolower($title);
			$stem = array();
			$term = explode(" ",$lowcase);
			$token = $this->preprocess->Text($title);
			$stop_word = array();
			foreach ($token as $t){
				$term 	= $this->porter->Stem($t);
				$hitung_term = $this->alpha_model->jumlah_term($docid,$term);
				if (count($hitung_term) > 0) {
					$jumlah = $hitung_term->jumlah;
					$jumlah++;
					$s['jumlah'] = $jumlah;

					$this->alpha_model->update_term($docid,$term,$s['jumlah']);
				} else {
					$s['term'] 	= $term;
					$s['docid']	= $docid;
					$s['jumlah'] = 1;
					$this->alpha_model->insert_term($s);
				}
			}

		}

		$N = $this->alpha_model->jumlah_doc();
		$all = $this->alpha_model->select_all_term();

		foreach ($all as $all) {
			$term 	= $all->term;
			$tf  	= $all->jumlah;
			$idf 	= $this->alpha_model->select_idf($term);
			$w = $tf * log(round($N/$idf->df,3),10);
			$w_round = round($w,3);
			$this->alpha_model->update_bobot($all->id,$w_round);
			echo "$term ".round($w,3,PHP_ROUND_HALF_DOWN)."<br>";
		}

	}

	public function sample_vector(){
		$this->db->query("TRUNCATE table sc_vector");
		$j1 = $this->alpha_model->list_penelitian_seluruh();

		foreach ($j1 as $j1) {
			$docid = $j1->id;

			$wterm = $this->alpha_model->select_bobot_doc($docid);

			$ysum = 0;
			foreach ($wterm as $w){
				$ysum = $ysum + pow($w->bobot,2);
				echo round($ysum,3)."+";
			}
			$yvector 	= sqrt($ysum);
			$yVectorR3 	= round($yvector,3);

			$v['docid'] 	= $docid;
			$v['yvector'] 	= $yVectorR3;
			$this->alpha_model->insert_vector($v);
			echo round($yvector,3)."<br>";
		}
	}

	public function sample_cosim(){
		$this->db->query("TRUNCATE table sc_q_tfidf");
		$title = $this->input->get('title');
		$token = $this->preprocess->Text($title);
		$stop_word = array();

		if (empty($title)){
			echo "Data yang diinputkan kosong";
		}else {
			foreach ($token as $t){
				$term 	= $this->porter->Stem($t);
				$hitung_term = $this->alpha_model->jumlah_term_query($term);
				if (count($hitung_term) > 0) {
					$jumlah = $hitung_term->jumlah;
					$jumlah++;
					$s['jumlah'] = $jumlah;

					$this->alpha_model->update_term_query($term,$s['jumlah']);
				} else {
					$s['term'] 	  	= $term;
					$s['jumlah']  	= 1;
					$this->alpha_model->insert_term_query($s);
				}
			}

			$all 	= $this->alpha_model->select_all_term_query();
			$xsum 	= 0; 
			foreach ($all as $all) {

				$term 	= $all->term;
				$tf  	= $all->jumlah;
				$idf 	= $this->alpha_model->select_term($term);
				if ($idf == FALSE){
					$w_round = 0;
					$xsum = $xsum + pow($w_round,3);
				}else {
					$w = $tf * $idf->bobot;
					$w_round = round($w,3);
					$this->alpha_model->update_bobot_query($all->id,$w_round);
					$xsum = $xsum + pow($w_round,2);
					
				}
			}

			$xvector 	= sqrt($xsum);
			$xVectorR3 	= round($xvector,3);

			
			$all_vector = $this->alpha_model->select_all_vector();
			foreach ($all_vector as $vall){
				$dot_product = 0;
				$vector_d = $vall->yvector;
				$all_2	= $this->alpha_model->select_all_term_query();
				foreach ($all_2 as $all_2 ){
					$bobot_q = $all_2->bobot;
					$tfidf_d = $this->alpha_model->select_term_doc($vall->docid, $all_2->term);
					if ($tfidf_d == FALSE){
						$bobot_d = 0;
					}else {
						$bobot_d = $tfidf_d->bobot;
					}
					$dot_product = $dot_product + ($bobot_d * $bobot_q);

				}

				$cosim = $dot_product/($vector_d*$xVectorR3);

				echo round($cosim,3)."+";

			}
		}

	}*/

}
