<?php 


class user extends coba_controller {
	
	var $controller;
	public function __contruct(){
		parent::__construct();
		$this->controller = get_class($this);
	}
	
		function index(){
		$data_array=array();
		$content = $this->load->view("index_view",$data_array,true);
			
		$this->set_subtitle("DASHBOARD");
		$this->set_title("DASHBOARD");
		$this->set_content($content);
		$this->cetak();
	}

}
?>