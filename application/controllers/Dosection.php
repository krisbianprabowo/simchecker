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
		$this->load->helper('form');
		$this->load->helper('utility');
		$this->load->helper('convertAlphabet');
		/*$this->load->helper('pdf2text');*/
	}

	public function proc_add_penelitian(){
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
	}

	public function add_tawaran(){
		$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/row-details1.js" type="text/javascript"></script><script src="'.asset_url().'/app/custom/general/components/extended/add-tawaran-alert2.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/input-mask.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/bootstrap-select.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/typeahead.js"></script>';
		$d['body'] = 'dashboard/olah/_add-tawaran.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}

	public function proc_add_tawaran(){
		$d['id_dosen'] 	= $this->input->post('lecturer');
		$d['judul']		= $this->input->post('title');
		$d['interest']	= $this->input->post('interest');
		$d['notes']		= $this->input->post('notes');
		$status =$this->system_model->addTawaran($d);	

		if($status!=0){
			echo "success";
		}else{
			echo "failed";
		}
	}


}