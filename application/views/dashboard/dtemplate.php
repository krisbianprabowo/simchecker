<?php
$this->load->view('dashboard/template/_header-meta.php');
$this->load->view('dashboard/template/_header-menu.php'); 
$this->load->view('dashboard/template/_subheader.php');  
$this->load->view($body);
$this->load->view('dashboard/template/_footer-menu.php');
$this->load->view('dashboard/template/_footer-meta.php'); 
?>