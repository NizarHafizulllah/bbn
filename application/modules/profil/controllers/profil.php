<?php
class profil extends user_controller{
	var $controller;
	function profil(){
		$this->controller = get_class($this);
		parent::__construct();
	}
	
	
	function index(){

		$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Cari Data");
		$this->set_title("Cari Data");
		$this->set_content($content);
		$this->cetak();
	}
	
}
?>