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

	public function add_tawaran(){
		$d['datatable'] = '<script src="'.asset_url().'/app/custom/general/crud/metronic-datatable/advanced/row-details1.js" type="text/javascript"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/bootstrap-datepicker.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/input-mask.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/bootstrap-select.js"></script><script src="'.asset_url().'/app/custom/general/crud/forms/widgets/typeahead.js"></script>';
		$d['body'] = 'dashboard/olah/_add-tawaran.php';
		$this->load->view('dashboard/dtemplate.php',$d);
	}
}