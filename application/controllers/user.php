<?php 


class user extends CI_Controller {

	public function __contruct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('user/header');
		$this->load->view('user/dashboard');
		$this->load->view('user/side_bar');
		$this->load->view('user/footer');
	}
	
	public function cari_data(){
		$this->load->view('user/header');
		$this->load->view('user/cari_data');
		$this->load->view('user/side_bar');
		$this->load->view('user/footer');
	}
	
	public function form_data(){
		$this->load->view('user/header');
		$this->load->view('user/form_data');
		$this->load->view('user/side_bar');
		$this->load->view('user/footer');
	}
}
?>