<?php 
class user extends CI_Controller {

	public function user(){
		parent::__construct();
		
	}
	
	public function Tema($page){
		$this->load->view('user/header');
		$this->load->view('user/'.$page);
		$this->load->view('user/side_bar');
		$this->load->view('user/footer');
	}
	
	public function index(){
		$this->tema('dashboard');
	}
	
	public function cari_data(){
		$this->tema('cari_data');
	}
	
	public function form_data(){
		$this->tema('form_data');
	}
}
?>