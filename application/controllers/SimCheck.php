<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SimCheck extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('demo_model');
		$this->load->model('alpha_model');
		$this->load->model('CosimModel');
		$this->load->model('system_model');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->library('pdf2text');
		$this->load->library('pagination');
		$this->load->helper('form');
		$this->load->helper('utility');
		$this->load->helper('convertAlphabet');
		/*$this->load->helper('pdf2text');*/
	}

	public function index(){
		$this->load->view('dashboard/sim/_landing-page.php');
	}

	public function dashboard(){
		$d['body'] = 'dashboard/sim/_dashboard.php';
		$this->load->view('dashboard/dtemplate.php', $d);
	}

	public function login(){
		$this->load->view('dashboard/sim/_login-page.php');
	}

	/*public function proses_login(){
		$username 	= $this->input->post('username',true);
		$password 	= $this->input->post('password',true);
		$akun = $this->system_model->checkUser($username);
		$passwordhash	= $akun->password;
		if (!empty($akun)){
			
			$verify = verifyHashedPassword($password,$passwordhash);
			if($verify == TRUE){
			$data_session = array(	'level' => 'admin',
									'id_admin'=>$akun->id,
									'username'=>$akun->username,
									'nama'=>$akun->nama,
									'logged_in' => TRUE
									);
			$this->session->set_userdata($data_session);
			redirect(site_url('SimCheck'));
			}else {
				$error ="Username or Password is Not Found";
				$this->session->set_flashdata('info',error_message($error));
				redirect(site_url('SimCheck/login'));
			}
		}else{
			$error ="Username or Password is Not Found";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}*/

	public function proses_login(){
		$id_user 	= $this->input->post('username',true);
		$password 	= $this->input->post('password',true);
		$akun = $this->system_model->checkUser($id_user);
		
		if (!empty($akun)){
			$passwordhash	= $akun->password;
			$verify = verifyHashedPassword($password,$passwordhash);
			if($verify == TRUE){
				$data_session = array(	'level' => 'admin',
										'id_user'=>$akun->id_user,
										'photo_user'=>$akun->photo,
										/*'username'=>$akun->username,*/
										'nama'=>'dosen S.S, M.Hum.',
										'logged_in' => TRUE
										);
				$this->session->set_userdata($data_session);
			echo "success";
			}else {
				echo "failed";
			}
		}else{
			echo "failed";
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		$_SESSION = [];
		redirect('SimCheck/redirect_logout');
		
	}
	public function redirect_logout(){
		$this->session->set_flashdata('outlog','1');
        redirect('SimCheck?logout=success');
	}
	
	public function test(){
		$this->load->view('dashboard/sim/-test.php');
	}

	public function simcheck_theory(){

		$d['body'] = 'dashboard/sim/_similarity-theory.php'; 
		$this->load->view('dashboard/dtemplate.php', $d);
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
		$config	= array();
		$config['base_url']	= base_url('SimCheck/tawaran_penelitian');
		$config['total_rows'] = $this->system_model->countTawaran();
		$config['per_page']	= 3;
		$config['uri_segment'] =3;
		/*$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = floor($choice);*/

		$config['first_link']       = '<i class="flaticon2-fast-back" style="font-size:0.85em"></i>';
        $config['last_link']        = '<i class="flaticon2-fast-next" style="font-size:0.85em"></i>';
        $config['next_link']        = '<i class="flaticon2-next" style="font-size:0.85em"></i>';
        $config['prev_link']        = '<i class="flaticon2-back" style="font-size:0.85em"></i>';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link" style="padding:7px 13px;margin:3px;font-weight:600">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link"  style="padding:7px 13px;margin:3px;font-weight:600;background-color:#591DF1 !important;border-color:#591DF1">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link" style="padding:7px 11px;margin:3px;background-color:#f0f3ff;">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link" style="padding:7px 11px;margin:3px;;background-color:#f0f3ff;">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link" style="padding:7px 11px;margin:3px;;background-color:#f0f3ff;">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link" style="padding:7px 11px;margin:3px;;background-color:#f0f3ff;">';
        $config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);
		$d['page']	= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$d['data'] 	= $this->system_model->selectTawaranP($config['per_page'],$d['page']);
		$d['pagination'] = $this->pagination->create_links();
		$d['body'] 	= 'dashboard/sim/_tawaran-penelitian.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function list_penelitian(){
		$d['l'] = $this->CosimModel->listPenelitian();
		$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/row-details1.js" type="text/javascript"></script>';

		$d['body'] = 'dashboard/sim/_list-penelitian.php';

		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function list_penelitian_o(){
		$d['l'] = $this->CosimModel->listPenelitian();
		$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/row-details1.js" type="text/javascript"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/bootstrap-datepicker.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/input-mask.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/bootstrap-select.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/typeahead.js"></script><script src="'.asset_url().'/app/custom/general/components/extended/add-penelitian-toastr.js"></script>';
		$d['body'] = 'dashboard/olah/_list-penelitian-olah.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function generate_dataset(){

		$d['body'] = 'dashboard/olah/_generate-dataset.php'; 
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function trend(){
		$d['body'] = 'dashboard/sim/_trend.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function olah_akun(){
		if (isset($_SESSION['logged_in'])) {
			$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/components/extended/toastr.js" type="text/javascript"></script>';
			$d['body'] = 'dashboard/olah/_akun-olah.php';
			$this->load->view('dashboard/dtemplate.php',$d);
		}else {
			$error ="You Must Login First To Access The Pages";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function proc_olah_akun(){

		$id_user = $_SESSION['id_user'];
		$chpass = 0;
		$chphoto  = 0;
		$chverify = 0;
		$status   = 0;
		$akun = $this->system_model->checkUser($id_user);
		if(!empty($akun)){
			if(!empty($_POST['password_baru'])){
				$pass = $this->input->post('password_baru');
				$pass_lama = $this->input->post('password_lama');
				$verify = verifyHashedPassword($pass_lama, $akun->password);
				$chpass =1;
				if ($verify == TRUE){
					$chverify =1;
					$d['password']= passwordHash($pass);
				}
			}

			if($_FILES['photo']['size'] != 0 and $_FILES['photo']['error'] ==0){
				$chphoto =1;
				$img_size	= $_FILES['photo']['size'];
				$ekstensi 	= pathinfo($_FILES["photo"]["name"])['extension'];
		      	$target_dir = "./assets/media/users/";
			}
			if($chpass == 1 and $chphoto ==1){
				$target_file = "photo-".$id_user.time().'.'.$ekstensi;
				if ($img_size < 4194304 and $chverify ==1) {
					move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir.$target_file);
					$url_image = "/media/users/".$target_file;
					$d['photo'] = $url_image;
					$status = $this->system_model->updateUser($id_user,$d);
					echo (($status > 0)? "success" : "failed" );
					if ($status > 0){
						$_SESSION['photo_user'] = $url_image;
					}
				}else {
					echo "failed";
				}
			}else{
				if ($chpass == 1 or $chphoto ==1){
					if($chphoto ==1){
						$target_file = "photo-".$id_user.time().'.'.$ekstensi;
						if ($img_size < 4194304) {
							move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir.$target_file);
							$url_image = "/media/users/".$target_file;
							$d['photo'] = $url_image;
							$status = $this->system_model->updateUser($id_user,$d);
							echo (($status > 0)? "success" : "failed" );
							if ($status > 0){
								$_SESSION['photo_user'] = $url_image;
							}
						}else {
							echo "failed";
						}
					}elseif ($chverify ==1){
						/*$d['photo'] = "/media/users/default.jpg";*/
						$status = $this->system_model->updateUser($id_user, $d);
						echo (($status > 0)? "success" : "failed" );
					}else{
						echo "failed";
					}
				}else{
					echo "failed";
				}
			}
		}else{
			echo "failed";
		}
	}

	public function format_judul(){

		$l = $this->CosimModel->list_penelitian_seluruh_a();
		foreach ($l as $l){
			$c_judul = str_replace("&nbsp;", " ", $l['judul_sebelum']);
			$c_judul 	= html_entity_decode($c_judul , ENT_QUOTES,"UTF-8");
			
			$l['judul'] = strip_tags($c_judul);
			echo $l['judul'];
			$status = $this->CosimModel->update_judul($l['no'],$l['judul']);
			if($status==1)
				echo "berhasil";
			else
				echo "gagal";
		}
	}

	public function term_process(){
		$j = $this->CosimModel->list_penelitian_seluruh();
		$this->db->query("TRUNCATE table sc_title_tfidf");
		set_time_limit(300);
		$stop_word = array();
		foreach($j as $j){
			$title = $j->judul;
			$docid = $j->no;
			
			$token = $this->preprocess->Text($title);
			
			foreach ($token as $t){
				$term 	= $this->porter->Stem($t);
				$jumlah = 0;
				if (in_array($term,array_column($stop_word, 'term')) && in_array($docid, array_column($stop_word, 'docid'))) {
					foreach($stop_word as $k => $v){
						if ($v['term'] == $term && $v['docid'] == $docid) {
							$stop_word[$k]['jumlah'] ++;
							$jumlah = $stop_word[$k]['jumlah'];
						}

					}
					
					if($jumlah < 2){
						$s['term'] 	= $term;
						$s['docid']	= $docid;
						$s['jumlah'] = 1;

						array_push($stop_word,$s);
					}
					/*$this->CosimModel->update_term($docid,$term,$s['jumlah']);*/
				} else {
					$s['term'] 	= $term;
					$s['docid']	= $docid;
					$s['jumlah'] = 1;
					/*$this->CosimModel->insert_term($s);*/

					array_push($stop_word,$s);
				}
				
			}
			
		}
	//	echo "<pre>";print_r($stop_word);echo "</pre>";
		$this->CosimModel->insert_batch_term($stop_word);
		$N = $this->CosimModel->jumlah_doc();
		$all = $this->CosimModel->titleTermSelectD();
	//	echo $this->db->last_query();
		$idfUpdate = array();
		foreach ($all as $all) {
			$term 	= $all->term;
			$setdf 	= $all->df;
			$idf =  (log(round($N/ (1 + $setdf),4),10)) + 1;
			$d['term'] = $term;
			$d['idf'] = round($idf,4);
			
			array_push($idfUpdate,$d);
			/*echo "$term ".round($idf_round,3,PHP_ROUND_HALF_DOWN)."<br>";*/
		}
		
		$this->CosimModel->update_batch_idf($idfUpdate);

		$d['outputTerm'] = $this->CosimModel->titleTermSelectA();
		$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/base/html-table.js" type="text/javascript"></script>';
		$d['body'] = 'dashboard/olah/_dataset-title--first.php'; 
		$this->load->view('dashboard/dtemplate.php',$d);

	}

	public function vector_process(){
		$this->db->query("TRUNCATE table sc_title_vector");
		$j1 = $this->CosimModel->list_penelitian_seluruh();

		foreach ($j1 as $j1) {
			$docid = $j1->no;

			$wterm = $this->CosimModel->select_bobot_doc($docid);

			$ysum = 0;
			foreach ($wterm as $w){
				$ysum = $ysum + pow($w->bobot,2);
				/*echo $ysum."+";*/
			}
			$yvector 	= sqrt($ysum);
			$yVectorR3 	= round($yvector,4);

			$v['docid'] 	= $docid;
			$v['yvector'] 	= $yVectorR3;
			$this->CosimModel->insert_vector($v);
		}

		$d['outputTerm'] = $this->CosimModel->titleVectorSelectA();
		$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/base/html-table.js" type="text/javascript"></script>';
		$d['body'] = 'dashboard/olah/_dataset-title--second.php'; 
		$this->load->view('dashboard/dtemplate.php',$d);

	}

	public function term_process_log(){
		$j = $this->CosimModel->list_penelitian_seluruh();
		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time1: {$time}";
		$this->db->query("TRUNCATE table sc_title_tfidf");
		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time12: {$time}";
		set_time_limit(300);
		$stop_word = array();
		foreach($j as $j){
			$title = $j->judul;
			$docid = $j->no;
			
			$token = $this->preprocess->Text($title);
			
			foreach ($token as $t){
				$term 	= $this->porter->Stem($t);
				$jumlah = 0;
				if (in_array($term,array_column($stop_word, 'term')) && in_array($docid, array_column($stop_word, 'docid'))) {
					foreach($stop_word as $k => $v){
						if ($v['term'] == $term && $v['docid'] == $docid) {
							$stop_word[$k]['jumlah'] ++;
							$jumlah = $stop_word[$k]['jumlah'];
						}

					}
					
					if($jumlah < 2){
						$s['term'] 	= $term;
						$s['docid']	= $docid;
						$s['jumlah'] = 1;

						array_push($stop_word,$s);
					}
					/*$this->CosimModel->update_term($docid,$term,$s['jumlah']);*/
				} else {
					$s['term'] 	= $term;
					$s['docid']	= $docid;
					$s['jumlah'] = 1;
					/*$this->CosimModel->insert_term($s);*/

					array_push($stop_word,$s);
				}
				
			}
			
		}
	//	echo "<pre>";print_r($stop_word);echo "</pre>";
		$this->CosimModel->insert_batch_term($stop_word);

		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time2: {$time}";
		$N = $this->CosimModel->jumlah_doc();
		$all = $this->CosimModel->titleTermSelectD();
	//	echo $this->db->last_query();
		$idfUpdate = array();
		foreach ($all as $all) {
			$term 	= $all->term;
			$setdf 	= $all->df;
			echo $setdf;
			$idf =  (log(round($N/ (1 + $setdf),4),10)) + 1;
			$d['term'] = $term;
			$d['idf'] = round($idf,4);
			
			array_push($idfUpdate,$d);
			/*echo "$term ".round($idf_round,3,PHP_ROUND_HALF_DOWN)."<br>";*/
		}

		echo $this->CosimModel->update_batch_idf($idfUpdate);

		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time3: {$time}";

	}

	public function vector_process_log(){
		$this->db->query("TRUNCATE table sc_title_vector");
		$j1 = $this->CosimModel->list_penelitian_seluruh();

		foreach ($j1 as $j1) {
			$docid = $j1->no;

			$wterm = $this->CosimModel->select_bobot_doc($docid);

			$ysum = 0;
			foreach ($wterm as $w){
				echo $docid." ".$w->bobot;
				$ysum = $ysum + pow($w->bobot,2);
				echo "=".round($ysum,4)."+";
				/*echo $ysum."+";*/
			}
			$yvector 	= sqrt($ysum);
			$yVectorR3 	= round($yvector,4);

			$v['docid'] 	= $docid;
			$v['yvector'] 	= $yVectorR3;
			$this->CosimModel->insert_vector($v);
			echo round($yvector,4)."<br>";
		}

	}

	public function titleTFIDFProc(){

		$this->db->query("TRUNCATE table sc_q_tfidf");
		
		$title = $this->input->get('title'); //mengambil judul yang dimasukkan oleh user yang nantinya bertindak sebagai query;
		$token = $this->preprocess->Text($title); // mengolah text dalam judul sesuai dengan tahapan preprocess

		if (empty($title)){
			$d['titleCheck'] = "Data yang diinputkan kosong";
		}else {
			foreach ($token as $t){
				$term 	= $this->porter->Stem($t); // pemanggilan library untuk proses stemming dalam tiap-tiap token/term
				$hitung_term = $this->CosimModel->qTitleTermSelect($term); //query untuk memanggil term dalam database(db)
				if (count($hitung_term) > 0) { //jika term sudah terdapat dalam db tambahkan nilai jumlah(tf) term tersebut
					$jumlah = $hitung_term->jumlah; 
					$jumlah++;
					$s['jumlah'] = $jumlah;

					$this->CosimModel->qTitleTermUpdate($term,$s['jumlah']); //update nilai jumlah(tf) dalam db
				} else {
					//sebaliknya jika belum tersedia, term akan ditambahkan dalam database dengan jumlah awal 1;
					$s['term'] 	  	= $term;
					$s['jumlah']  	= 1;
					$this->CosimModel->qTitleTermInsert($s);
				}
			}
			//------- Perhitungan Nilai Panjang Vector Dalam Query------///
			$all 	= $this->CosimModel->qndTitleTermSelectA();

			//inisialisasi variabel untuk menyimpan nilai panjang vector sementara
			$xsum 	= 0;
			$N = $this->CosimModel->jumlah_doc();
			foreach ($all as $all){

				$term 	= $all->term;
				$tf  	= $all->jumlah;
				$setIdf 	= $this->CosimModel->titleTermSelect($term);
				if ($setIdf == FALSE){
					$rIdf	= round((log(round($N/ (1 + 0),4),10)), 4) + 1;
					//jika term tidak terdapat dalam db, maka kalkulasi nilai bobot(w) tersebut dengan rumus tf * idf;
					$w_round = $tf * $rIdf;
					//bobot(w) dipangkatkan dua kemudian  hasilnya disimpan dalam variabel
					$xsum += pow($w_round,2);
					$data['idf']		= $rIdf;
					$data['weight'] 	= round($w_round, 4);
					$data['jumTermDoc']	= 0;
				}else {
					//sebaliknya, term yang sudah ada dalam db dipangkatkan dua dan kemudian hasilnya disimpan dalam variabel
					$this->CosimModel->update_idf_query($all->id,$setIdf->idf);
					$w = $tf * $setIdf->idf;
					$w_round = round($w, 4);
					$xsum += pow($w_round,2);
					$data['idf']		= $setIdf->idf;
					$data['weight'] 	= $w_round;
					$data['jumTermDoc']	= $all->jumTerm;
				}
				// data-data pengolahan disimpan dalam array untuk ditampilkain hasilnya kepada pengguna;
				$data['idTerm']		= $all->id;
				$data['term']		= $term;
				$data['jumTermQuery'] 	= $tf;
				
				$data['jumDoc']		= $all->jumDoc;


				$qTermArr[] = $data;
				//array_push($qTermArr, $d);
			}
			//setelah didapat nilai akhir kemudian diakarkan untuk mendapatkan nilai panjang vector query;
			$xvector 	= sqrt($xsum);
			$xVectorR3 	= round($xvector,4);

			$_SESSION['xVector']	= $xVectorR3;
			$dataV['docid']	= '1';
			$dataV['yvector'] = $xVectorR3;

			$qtermArrVec[] = $dataV;
			if(isset($_SESSION['xVector'])){
				$d['outputTerm']	= $qTermArr;
				$d['outputTermR']	= $qtermArrVec;
			}else{
				$d['title_check'] = "Terjadi Kesalahan Selama Pemrosesan Data, Mohon Ulangi Kembali";
			}
		//	redirect(base_url('simcheck/titleCosimProcS2'));
		}

		//tampilkan hasil perhitungan TF-IDF dalam Website
		$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/cosimprocs1.js" type="text/javascript"></script>';
	/*	$d['body'] = 'dashboard/sim/_similarity-title-procfirst.php'; 
		$this->load->view('dashboard/dtemplate.php',$d);*/
		redirect(base_url('SimCheck/titlecosimproc'));

	}

	public function theoryTFIDFProc(){

		$this->db->query("TRUNCATE table sc_q_tfidf");
		$filename 	= $_FILES['title']['name'];
		$targetFile = "theory/".$filename;
		if (empty($filename)){
			$error = 'Failed to upload the files';
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/simcheck_theory'));
		}else {
			$fileExt	= strtolower(pathinfo($filename,PATHINFO_EXTENSION));
			if($fileExt != 'pdf'){
				$error = 'File Extension is not PDF';
				$this->session->set_flashdata('info',error_message($error));
				redirect(site_url('SimCheck/simcheck_theory'));
			}else{
				set_time_limit(300);
				$Cpdf 	= $this->pdf2text->startConvert($targetFile); //mengambil judul yang dimasukkan oleh user yang nantinya bertindak sebagai query;
				$token = $this->preprocess->Text($Cpdf); // mengolah text dalam judul sesuai dengan tahapan preprocess
				foreach ($token as $t){
					$term 	= $this->porter->Stem($t); // pemanggilan library untuk proses stemming dalam tiap-tiap token/term
					$hitung_term = $this->CosimModel->qTitleTermSelect($term); //query untuk memanggil term dalam database(db)
					if (count($hitung_term) > 0) { //jika term sudah terdapat dalam db tambahkan nilai jumlah(tf) term tersebut
						$jumlah = $hitung_term->jumlah; 
						$jumlah++;
						$s['jumlah'] = $jumlah;

						$this->CosimModel->qTitleTermUpdate($term,$s['jumlah']); //update nilai jumlah(tf) dalam db
					} else {
						//sebaliknya jika belum tersedia, term akan ditambahkan dalam database dengan jumlah awal 1;
						$s['term'] 	  	= $term;
						$s['jumlah']  	= 1;
						$this->CosimModel->qTitleTermInsert($s);
					}
				}
				//------- Perhitungan Nilai Panjang Vector Dalam Query------///
				$all 	= $this->CosimModel->qndTitleTermSelectA();

				//inisialisasi variabel untuk menyimpan nilai panjang vector sementara
				$xsum 	= 0;
				$N = $this->CosimModel->jumlah_doc();
				foreach ($all as $all){

					$term 	= $all->term;
					$tf  	= $all->jumlah;
					$setIdf 	= $this->CosimModel->titleTermSelect($term);
					if ($setIdf == FALSE){
						$rIdf	= round((log(round($N/ (1 + 0),4),10)), 4) + 1;
						//jika term tidak terdapat dalam db, maka kalkulasi nilai bobot(w) tersebut dengan rumus tf * idf;
						$w_round = $tf * $rIdf;
						//bobot(w) dipangkatkan dua kemudian  hasilnya disimpan dalam variabel
						$xsum += pow($w_round,2);
						$data['idf']		= $rIdf;
						$data['weight'] 	= round($w_round, 4);
						$data['jumTermDoc']	= 0;
					}else {
						//sebaliknya, term yang sudah ada dalam db dipangkatkan dua dan kemudian hasilnya disimpan dalam variabel
						$this->CosimModel->update_idf_query($all->id,$setIdf->idf);
						$w = $tf * $setIdf->idf;
						$w_round = round($w, 4);
						$xsum += pow($w_round,2);
						$data['idf']		= $setIdf->idf;
						$data['weight'] 	= $w_round;
						$data['jumTermDoc']	= $all->jumTerm;
					}
					// data-data pengolahan disimpan dalam array untuk ditampilkain hasilnya kepada pengguna;
					$data['idTerm']		= $all->id;
					$data['term']		= $term;
					$data['jumTermQuery'] 	= $tf;
					
					$data['jumDoc']		= $all->jumDoc;


					$qTermArr[] = $data;
					//array_push($qTermArr, $d);
				}
				//setelah didapat nilai akhir kemudian diakarkan untuk mendapatkan nilai panjang vector query;
				$xvector 	= sqrt($xsum);
				$xVectorR3 	= round($xvector,4);

				$_SESSION['xVector']	= $xVectorR3;

				if(isset($_SESSION['xVector'])){
					$d['outputTerm']	= $qTermArr;
				}else{
					$d['title_check'] = "Terjadi Kesalahan Selama Pemrosesan Data, Mohon Ulangi Kembali";
				}
			}
			//	redirect(base_url('simcheck/titleCosimProcS2'));
		}

		//tampilkan hasil perhitungan TF-IDF dalam Website
		$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/cosimprocs1.js" type="text/javascript"></script>';
		$d['body'] = 'dashboard/sim/_similarity-title-procfirst.php'; 
		$this->load->view('dashboard/dtemplate.php',$d);

	}

	public function titleCosimProc(){
		$vecQuery 	= $_SESSION['xVector'];
		
		$this->CosimModel->tempTableCosimCreate();

		$vector = $this->CosimModel->titleVectorSelectA();

			foreach ($vector as $vec){
				$dotProduct = 0; //inisialisasi variabel untuk dot product
				$vecDoc = $vec->yvector;
				$qTerm	= $this->CosimModel->qTitleTermSelectA();
				foreach ($qTerm as $qt ){
					$bobotQ = $qt->jumlah * $qt->idf;
					$wDoc = $this->CosimModel->titleTermSelectByDoc($vec->docid, $qt->term); //memanggil term per tiap-tiap dokumen atau judul di dalam db
					if ($wDoc == FALSE){

						$bobotDoc = 0; //jika tidak ada maka nilai bobot ditetapkan 0
					}else {
						$bobotDoc = $wDoc->jumlah * $wDoc->idf;
					}
					//menghitung nilai dot product query dengan tiap-tiap dokumen
					$dotProduct += ($bobotDoc * $bobotQ);

				}
				//setelah didapatkan nilai dot product, hitung nilai cosine similarity dengan rumus dot product dibagi perkalian panjang vektor query dengan vektor tiap dokumen
				$cosim = $dotProduct/($vecDoc*$vecQuery);

				$data['cosim'] = round($cosim,4);
				$data['docid']= $vec->docid;
				
				$qCosimArr[] = $data;
			}
			$cosimIns = $this->CosimModel->tempTableCosimInsert($qCosimArr);
			$resultCosim = $this->CosimModel->tempTableCosimSelect();
			if($resultCosim == 0){

			}else {
				$d['resultCosim'] = $resultCosim; 
			}

			//tampilkan hasil Cosine Similarity dalam Website
			$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/cosimprocs2.js" type="text/javascript"></script>';
			$d['body'] = 'dashboard/sim/_similarity-title-procsecond.php'; 
			$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function theoryTermProc(){
		header('Content-Type: text/html; charset=utf-8');
		$pdf = $this->CosimModel->theoryFileSelect();
		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time1: {$time}";
		$this->db->query("TRUNCATE table sc_theory_tfidf");

		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time12: {$time}";
		set_time_limit(300);
		foreach($pdf as $pdf){

			$title 	= $pdf->id_title;
			$docid 	= $pdf->id_theory;
			$theoryFile = $pdf->theory_file;
			$parser = new \Smalot\PdfParser\Parser();
			$cPdf   = $parser->parseFile($theoryFile);
			$rPdf 	= $cPdf->getText();
		//	$Cpdf 	= $this->pdf2text->startConvert();
			$token	= $this->preprocess->Text($rPdf);
			$stop_word = array();
			foreach ($token as $t){
				$term 	= $this->porter->Stem($t);
				if (in_array($term,array_column($stop_word, 'term'))) {
					foreach($stop_word as $k => $v){
						if ($v['term'] == $term) {
							$stop_word[$k]['jumlah'] ++;
						}
					}
					/*$this->CosimModel->update_term($docid,$term,$s['jumlah']);*/
				} else {
					$s['term'] 		= $term;
					$s['id_theory']	= $docid;
					$s['jumlah'] 	= 1;
					/*$this->CosimModel->insert_term($s);*/

					array_push($stop_word,$s);
				}
				echo $term." ";
				
			}
			echo "<pre>";print_r($stop_word);echo "</pre>";
			$this->CosimModel->theoryTermInsertB($stop_word);
		//	echo $this->db->last_query();
		
		}

		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time2: {$time}";
		$N = $this->CosimModel->theoryTotalFile();
		$all = $this->CosimModel->theoryTermSelectD();
	//	echo $this->db->last_query();
		$idfUpdate = array();
		foreach ($all as $all) {
			$term 	= $all->term;
			$setdf 	= $all->df;
			$idf =  (log(round($N/ (1 + $setdf),4),10)) + 1;
			$d['term'] = $term;
			$d['idf'] = round($idf,4);
			
			array_push($idfUpdate,$d);
			/*echo "$term ".round($idf_round,3,PHP_ROUND_HALF_DOWN)."<br>";*/
		}
		echo $this->CosimModel->theoryIdfUpdateB($idfUpdate);

		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time3: {$time}";
	}

	public function theoryVectorProc(){
		$this->db->query("TRUNCATE table sc_theory_vector");
		$j1 = $this->CosimModel->theoryFileSelect();

		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time1: {$time}";
		foreach ($j1 as $j1) {
			$docid = $j1->id_theory;

			$wterm = $this->CosimModel->theoryWeightSelect($docid);

			$ysum = 0;
			foreach ($wterm as $w){
				echo $docid." ".$w->bobot;
				$ysum = $ysum + pow($w->bobot,2);
				echo "=".round($ysum,4)."+";
				/*echo $ysum."+";*/
			}
			$yvector 	= sqrt($ysum);
			$yVectorR3 	= round($yvector,4);

			$v['id_theory'] 	= $docid;
			$v['yvector'] 	= $yVectorR3;
			$this->CosimModel->theoryVectorInsert($v);
			echo round($yvector,4)."<br>";
		}

		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time2: {$time}";
	}

	public function theoryCosimProc(){
		$this->db->query("TRUNCATE table sc_q_tfidf");
		$theoryLink = $this->input->get('title');
		$Cpdf 	= $this->pdf2text->startConvert($theoryLink);
		set_time_limit(300);
		if (empty($theoryLink)){
			echo "Data yang diinputkan kosong";
		}else {
			$token	= $this->preprocess->Text($Cpdf);
			
			foreach ($token as $t){
				$term 	= $this->porter->Stem($t);
				$term 	= utf8_encode($term);
				$hitung_term = $this->CosimModel->qTheoryTermSelectS($term);
				if (count($hitung_term) > 0) {

					$jumlah = $hitung_term->jumlah;
					$jumlah++;
					$s['jumlah'] = $jumlah;

					$this->CosimModel->qTheoryTermUpdate($term,$s['jumlah']);
				} else {
					$s['term'] 	  	= $term;
					$s['jumlah']  	= 1;
					$this->CosimModel->qTheoryTermInsert($s);
				}

				$terma[] = $term;
			}
			print_r($terma);
			$all 	= $this->CosimModel->qTheoryTermSelect();
			$xsum 	= 0; 
			$N = $this->CosimModel->theoryTotalFile();
			foreach ($all as $all) {

				$term 	= $all->term;
				$tf  	= $all->jumlah;
				$setIdf 	= $this->CosimModel->theoryTermSelectS($term);
				if ($setIdf == FALSE){
					/*echo "gagal";
					echo $idf;*/
					$rIdf	= round((log(round($N / (1 + 0),4),10)), 4) + 1;
					$this->CosimModel->qTheoryIdfUpdate($all->id, $rIdf);
					$w_round = $tf * $rIdf;
					$xsum = $xsum + pow(round($w_round, 4),2);
					echo $xsum."<br>";
				}else {
					$this->CosimModel->qTheoryIdfUpdate($all->id,$setIdf->idf);
					$w = $tf * $setIdf->idf;
					$w_round = round($w,4);
					/*$this->CosimModel->update_bobot($all->id,$w_round);*/
					$xsum = $xsum + pow($w_round,2);
					echo $xsum."<br>";
				}
			}

			$xvector 	= sqrt($xsum);
			$xVectorR3 	= round($xvector,4);
			echo $xVectorR3."<br>";
			
			$all_vector = $this->CosimModel->theoryVectorSelect();
			foreach ($all_vector as $vall){
				$dot_product = 0;
				$vector_d = $vall->yvector;
				$all_2	= $this->CosimModel->qTheoryTermSelect();
				foreach ($all_2 as $all_2 ){
					$bobot_q = $all_2->jumlah * $all_2->idf;
					$tfidf_d = $this->CosimModel->theoryTermSelectByDoc($vall->id_theory, $all_2->term);
					if ($tfidf_d == FALSE){
						$bobot_d = 0;
					}else {
						$bobot_d = $tfidf_d->jumlah * $tfidf_d->idf;
					}
					$dot_product = $dot_product + ($bobot_d * $bobot_q);

				}

				$cosim = $dot_product/($vector_d*$xVectorR3);

				echo round($cosim,4)."+";

			}
		}

		$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
    	echo "Process Time2: {$time}";
	}

	public function tempTable(){
		$all= $this->CosimModel->tempTable_create();
		$all = $this->CosimModel->tempTable_show();
		foreach($all as $all){
			echo $all->term;

		}
		redirect('simcheck/show');
	}

	public function show(){
		/*print_r($d);
		$all = $this->CosimModel->tempTable_show();
		foreach($all as $all){
			echo $all->term;
		}*/
		$test =0.2;
		if($test >0 and $test<0.1){
			echo "nice";
		}
	}

	public function pdf2text(){

		$Cpdf = $this->pdf2text->startConvert('document2.pdf');
		
		echo $Cpdf;
	}

	public function ttext(){
		$string = "reflects";
		
		$string = $this->preprocess->Text($string);
		 print_r($string);
	}
	/*public function pdf2texts(){
		 
		$parser = new \Smalot\PdfParser\Parser();
		$pdf    = $parser->parseFile('document6.pdf');
		 
		$pages  = $pdf->getPages();
		
		foreach ($pages as $page) {
		    echo "<pre>".$page->getText()."</pre>";
		}
	}
*/}