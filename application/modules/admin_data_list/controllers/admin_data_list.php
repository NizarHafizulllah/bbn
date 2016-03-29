<?php 
session_start();
class admin_data_list extends admin_controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->controller = get_class($this);
		//$this->load->helper("serviceurl");
		
	}
	



function index(){
		$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Data List");
		$this->set_title("Data List");
		$this->set_content($content);
		$this->cetak();
}
	

}

?>