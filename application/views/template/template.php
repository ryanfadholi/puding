<?php  

	$this->load->view('template/header', ['title' => $title, 'css' => $css]);
	$this->load->view($content);
	$this->load->view('template/footer');
?>