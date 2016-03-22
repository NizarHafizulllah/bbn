<?php
class cari_data extends coba_contoller  {
	var $controller;
	function cari_data(){
		$this->controller = get_class($this);
		parent::__construct();
	}
	
	
	function index(){


		$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("CEK BIAYA BALIK NAMA");
		$this->set_title("CEK BIAYA BALIK NAMA");
		$this->set_content($content);
		$this->cetak();
	}