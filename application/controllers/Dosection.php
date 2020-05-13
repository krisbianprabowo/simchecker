<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosection extends CI_Controller {

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

	public function list_penelitian_o(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$d['l'] = $this->CosimModel->listPenelitian();
			$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/row-details1.js" type="text/javascript"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/bootstrap-datepicker.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/input-mask.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/bootstrap-select.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/typeahead.js"></script><script src="'.asset_url().'/app/custom/general/components/extended/add-penelitian-toastr.js"></script>';
			if(isset($_SESSION['tips1']) and $_SESSION['tips1'] =='1'){
				$d['guidetips'] ='<script type="text/javascript">
						        $(document).ready(function(){
						            introJs().start();
						        });
						    </script>';
			}
			$d['body'] = 'dashboard/olah/_list-penelitian-olah.php';
			$this->load->view('dashboard/dtemplate.php',$d);
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}


	public function proc_add_penelitian(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$d['NIM']				= $this->input->post('NIM');
			$d['nama']				= $this->input->post('nama');
			$d['judul_sebelum']		= $this->input->post('judul_sebelum');
			$tanggal_mulai			= $this->input->post('tanggal_mulai');
			$d['tanggal_mulai']		= date('Y-m-d', strtotime($tanggal_mulai));
			$d['semester_mulai']	= $this->input->post('semester_mulai');
			$d['semester_selesai']	= $this->input->post('semester_selesai');
			$d['status_ta']			= $this->input->post('status_ta');
			$d['dosen_pembimbing']	= $this->input->post('dosen_pembimbing');
			$d['nilai']				= $this->input->post('nilai');
			$d['tanggal_ujian'] 	= $this->input->post('tanggal_ujian');

			$c_judul = str_replace("&nbsp;", " ", $d['judul_sebelum']);
			$c_judul 	= html_entity_decode($c_judul , ENT_QUOTES,"UTF-8");
			
			$d['judul'] = strip_tags($c_judul);

			if(isset($_POST['dosen_penguji2'])){
				$penguji1 = $this->input->post('dosen_penguji1');
				$penguji2 = $this->input->post('dosen_penguji2');
				$d['dosen_penguji'] = $penguji1.', '.$penguji2;
			}else {
				$d['dosen_penguji']		= $this->input->post('dosen_penguji1');
			}
			

			$status =$this->system_model->addTitle($d);

			if($status!=0){
				echo "success";
			}else{
				echo "failed";
			}
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function proc_edit_penelitian(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$id_pen	= $this->input->post('no');
			$d['NIM']				= $this->input->post('NIM');
			$d['nama']				= $this->input->post('nama');
			$d['judul_sebelum']		= $this->input->post('judul_sebelum');
			$d['tanggal_mulai']		= $this->input->post('tanggal_mulai');
			$d['semester_mulai']	= $this->input->post('semester_mulai');
			$d['semester_selesai']	= $this->input->post('semester_selesai');
			$d['status_ta']			= $this->input->post('status_ta');
			$d['dosen_pembimbing']	= $this->input->post('dosen_pembimbing');
			$d['nilai']				= $this->input->post('nilai');
			$d['tanggal_ujian'] 	= $this->input->post('tanggal_ujian');
			
			$c_judul = str_replace("&nbsp;", " ", $d['judul_sebelum']);
			$c_judul 	= html_entity_decode($c_judul , ENT_QUOTES,"UTF-8");
			
			$d['judul'] = strip_tags($c_judul);
			if(isset($_POST['dosen_penguji2'])){
				$penguji1 = $this->input->post('dosen_penguji1');
				$penguji2 = $this->input->post('dosen_penguji2');
				$d['dosen_penguji'] = $penguji1.', '.$penguji2;
			}else {
				$d['dosen_penguji']		= $this->input->post('dosen_penguji1');
			}

			$status = $this->system_model->editTitle($id_pen, $d);
			echo ($status>0)?'success' : 'failed';
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
		
	}
	public function proc_delete_penelitian(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$id_pen	= $this->input->post('no');

			$status = $this->system_model->deleteTitle($id_pen);
			echo ($status>0)?'success' : 'failed';
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function add_tawaran(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$id_dosen = $_SESSION['id_user'];
			$config	= array();
			$config['base_url']	= base_url('Dosection/add_tawaran');
			$trows = $this->system_model->countMyTawaran($id_dosen);
			foreach($trows as $trows){
				$trow = $trows->jumlah;
			}
			$config['total_rows'] = $trow;
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
			$d['data'] 	= $this->system_model->selectMyTawaranP($id_dosen, $config['per_page'],$d['page']);
			$d['pagination'] = $this->pagination->create_links();
			$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/row-details1.js" type="text/javascript"></script><script src="'.asset_url().'/app/custom/general/components/extended/add-tawaran-alert2.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/input-mask.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/bootstrap-select.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/typeahead.js"></script>';
			if(isset($_SESSION['tips3']) and $_SESSION['tips3'] =='1'){
				$d['guidetips'] ='<script type="text/javascript">
						        $(document).ready(function(){
						            introJs().start();
						        });
						    </script>';
			}
			$d['body'] = 'dashboard/olah/_add-tawaran.php';
			$this->load->view('dashboard/dtemplate.php',$d);
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function proc_add_tawaran(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$d['id_dosen'] 	= $this->input->post('id_dosen');
			$d['judul']		= $this->input->post('title');
			$d['interest']	= $this->input->post('interest');
			$d['notes']		= $this->input->post('notes');
			$status =$this->system_model->addTawaran($d);	

			if($status!=0){
				echo "success";
			}else{
				echo "failed";
			}
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function proc_edit_tawaran(){
		$id_tawaran = $this->input->post('id_tawaran');
		$d['judul'] = $this->input->post('title');
		$d['interest'] = $this->input->post('interest');
		$d['notes'] = $this->input->post('notes');

		$status = $this->system_model->editTawaran($id_tawaran, $d);

		echo ($status>0)?'success' : 'failed';

	}

	public function proc_delete_tawaran(){
		$id_tawaran = $this->input->post('id_tawaran');

		$status = $this->system_model->deleteTawaran($id_tawaran);

		echo ($status>0)?'success' : 'failed';
	}

	public function list_user(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$d['u'] = $this->system_model->selectUserAll();
			$d['l'] = $this->demo_model->list_penelitian_seluruh();
			$d['datatable'] ='<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/row-details-user.js" type="text/javascript"></script><script src="'.asset_url().'/app/custom/general/components/extended/modal-edit-user.js"></script>';
			$d['body'] = 'dashboard/olah/_list-user.php';
			$this->load->view('dashboard/dtemplate.php',$d);
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function proc_add_user(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			if(!empty($_POST['role']) and !empty($_POST['id_user']) and !empty($_POST['nama'])){
				$id_user = $this->input->post('id_user');
				$nama = $this->input->post('nama');
				$role = $this->input->post('role');
				if(!empty($_POST['password-dsn'])){
					$d['id_user']	= $id_user;
					$da['id_dosen']	= $id_user;
					$da['nama']		= $nama;
					$da['jabatan'] 	= $this->input->post('jabatan');
					$d['role']		= $role;
					$valid_ext= array('jpeg','jpg','png');
					$d['password'] 	= passwordHash($this->input->post('password-dsn'));
					
					if($_FILES['photo']['size'] != 0 and $_FILES['photo']['error'] ==0){

						$img_size	= $_FILES['photo']['size'];
						$ekstensi 	= strtolower(pathinfo($_FILES["photo"]["name"])['extension']);
						$target_file = "photo-".$id_user.time().'.'.$ekstensi;
			      		$target_dir = "./assets/media/users/";
			      		if ($img_size < 4194304 and in_array($ekstensi, $valid_ext)) {
			      			move_uploaded_file($_FILES["photo"]["tmp_name"], $target_dir.$target_file);
							$url_image = "/media/users/".$target_file;
							$d['photo'] = $url_image;
							$status = $this->system_model->addUserDsn($d, $da);
							echo (($status > 0)? "success" : "failed" );
			      		}else{
			      			echo "failed";
			      		}
					}else{
						$d['photo']	= "/media/users/default.jpg";
						$status = $this->system_model->addUserDsn($d, $da);
						echo (($status > 0)? "success" : "failed" );
					}
				}elseif(!empty($_POST['password-mhs'])){
					$d['id_user']	= $id_user;
					$da['NIM']	= $id_user;
					$da['nama']		= $nama;
					$da['dosenbim'] 	= $this->input->post('dosenbim');
					$d['role']		= $role;
					$valid_ext= array('jpeg','jpg','png');
					$d['password'] 	= passwordHash($this->input->post('password-mhs'));
					if($_FILES['photo-mhs']['size'] != 0 and $_FILES['photo-mhs']['error'] ==0){
						
						$img_size	= $_FILES['photo-mhs']['size'];
						$ekstensi 	= strtolower(pathinfo($_FILES["photo-mhs"]["name"])['extension']);
						$target_file = "photo-".$id_user.time().'.'.$ekstensi;
			      		$target_dir = "./assets/media/users/";
			      		if ($img_size < 4194304 and in_array($ekstensi, $valid_ext)) {
			      			move_uploaded_file($_FILES["photo-mhs"]["tmp_name"], $target_dir.$target_file);
							$url_image = "/media/users/".$target_file;
							$d['photo'] = $url_image;
							$status = $this->system_model->addUserMhs($id_user,$d);
							echo (($status > 0)? "success" : "failed" );
			      		}else{
			      			echo "failed";
			      		}
					}else{
						$d['photo']	= "/media/users/default.jpg";
						$status = $this->system_model->addUserMhs($d, $da);
						echo (($status > 0)? "success" : "failed" );
					}
				}else{
					echo "failed";
				}
			}else{
				echo "failed";
			}
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function proc_edit_user(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$tid_user = $this->input->post('tid_user');
			$id_user = $this->input->post('id_user');
			$nama	= $this->input->post('nama');
			$role 	= $this->input->post('role');
			$jabatan = $this->input->post('jabatan');
			if($role == '4'){
				$d['id_user'] = $id_user;
				$d['role'] = $role;
				$da['NIM'] = $id_user;
				$da['nama'] = $nama;

				$status = $this->system_model->updateUserMhs($tid_user, $d, $da);
			}else{
				$d['id_user'] = $id_user;
				$d['role']	= $role;
				$da['id_dosen'] = $id_user;
				$da['nama'] = $nama;
				$da['jabatan'] = $jabatan;

				$status = $this->system_model->updateUserDsn($tid_user, $d, $da);
			}

			if($status!=0){
				echo "success";
			}else{
				echo "failed";
			}
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function proc_change_password(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$id_user = $this->input->post('id_user');
			$new_password = $this->input->post('new-password');
			$rep_password = $this->input->post('repeat-password');

			if($new_password != $rep_password){
				echo "failed";
			}else{
				$d['password'] = passwordHash($new_password);

				$status = $this->system_model->updateNewPassword($id_user,$d);

				if ($status != 0){
					echo "success";
				}else{
					echo "failed";
				}
			}
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function proc_change_role(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$id_user = $this->input->post('id_user');
			$role 	= $this->input->post('role');

			if(isset($role)){
				$d['role'] = $role;

				$status  = $this->system_model->updateUser($id_user, $d);

				if ($status != 0){
					echo "success";
				}else{
					echo "failed";
				}
			}
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function proc_delete_user(){
		if(isset($_SESSION['logged_in']) && $_SESSION['role']!=4){
			$id_user = $this->input->post('id_user');
			$role 	 = $this->input->post('role');
			if(!empty($id_user)){
				if($role != '4'){
					$status  = $this->system_model->deleteUserDsn($id_user);

					if ($status != 0){
						echo "success";
					}else{
						echo "failed";
					}
				}else {
					$status  = $this->system_model->deleteUserMhs($id_user);

					if ($status != 0){
						echo "success";
					}else{
						echo "failed";
					}
				}
			}
		}else {
			$error ="You Must Login First To Access This Features";
			$this->session->set_flashdata('info',error_message($error));
			redirect(site_url('SimCheck/login'));
		}
	}

	public function graph_penelitian(){

		$status = $this->system_model->graphPenelitian(); //memilih semua kolom attribut dalam tabel transaksi

        if($status!=0){ //check apakah valid (untuk digunakan menampilkan grafik penjualan)
        	$jsonArray=array( //membuat array $jsonArray yang berguna untuk mendesain grafik penjualan
        		"chart" => array(
        			"caption" => "Completed Research Trends",
        			"baseFont" => "Roboto",
        			"captionFont" => "Poppins",
        			"showValues" => "1",
        			"YAxisName" => "Number of Research",
        			"yAxisNameFont"=> "Poppins", //Penamaan untuk garis Y atau vertical
        			//Penamaan untuk sub-garis Y atau vertical (sub)
        			"xAxisName" => "Years", // Penamaan untuk garis X atau horizontal
        			"xAxisNameFont"=> "Poppins",
        			"paletteColors" => "#FA0C52,#046c66,#FF3333", //menentukan warna yang digunakan
        			"valueFontColor" => "#000", //menentukan warna font
        			"divLineThickness" => "0",
        			"lineThickness" => "3",
        			"anchorRadius"=>"5",
        			"anchorBorderThickness"=>"2",
        			"yAxisLineThickness" => "50px",
        			"theme" => "ocean", //menentukan thema yang digunakan
        			"exportEnabled" => "1") //menentukan apakah grafik bisa di-export atau di-download
        		);

        	$jsonArray["categories"] 	= array();
        	$jsonArray["dataset"] 		= array();
	        $dataseries4 = array();
	        $result1 = $this->system_model->graphPenelitian();
	        foreach ($result1 as $result1){
					array_push($dataseries4,array("label" => $result1->tahun,"value" => $result1->jumlah));
			}		
			array_push($jsonArray["dataset"], array("data"=>$dataseries4));
					
			$update_transaksi = fopen('assets/graph_json/_record-penelitian.json', 'w');
			fwrite($update_transaksi, json_encode($jsonArray));
			fclose($update_transaksi);
		}
	}

	public function redirect1(){
		$this->session->set_flashdata('tips1','1');
		redirect('Dosection/list_penelitian_o');
	}

	public function redirect2(){
		$this->session->set_flashdata('tips2','1');
		redirect('SimCheck/generate_dataset');
	}

	public function redirect3(){
		$this->session->set_flashdata('tips3','1');
		redirect('Dosection/add_tawaran');
	}

}