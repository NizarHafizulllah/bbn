<?php 


class user extends CI_Controller {

	public function __contruct(){
		parent::__construct();
	}
	
	public function tema($page){
		$this->load->view('user/header');
		$this->load->view('user/'.$page);
		$this->load->view('user/side_bar');
		$this->load->view('user/footer');
	}
	
	public function index(){
		$this->tema('index');
	}
	public function cari_data(){
		$this->tema('cari_data');
	}

}
?>