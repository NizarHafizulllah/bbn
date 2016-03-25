<?php
class daftar extends user_controller{
	var $controller;
	function daftar(){
		$this->controller = get_class($this);

		parent::__construct();
		$this->load->helper("tanggal");
	}
	
	
	function index(){
		
//		$cek_session = $this->session->userdata('session');
//			if(!empty($cek)){
				$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Daftar BBN");
		$this->set_title("Daftar BBN");
		$this->set_content($content);
		$this->cetak();
//			}else{
//				redirect('login');
//			}
		
		
	}



	function get_data_bbn(){
		$data = $this->input->post();

		// show_array($data); exit;
		$url = 'http://poldametro.bpkb.net/Blokir-Online/browsj.dll';
			$this->user = 'testblokir';
			$this->salt = "335353535323";
			$this->pass = "123456";


			$data_service = array("LoginInfo"=>array(
							"LoginName" => $this->user,
							"Salt"		=> $this->salt,
							"AuthHash" 	=> md5($this->salt . md5($this->user.$this->pass))
							),
							"Criteria"=>array(
								"Param" => $data['no_rangka'],
								"ParamKind" => 1
							)
							 
							);

			$json_data = json_encode($data_service);	

			echo $json_data; 

			$ret_service = $this->execute_service($url,"ComplGetBerkasCheckPoint",$json_data);
			//show_array($ret_service);
			echo $ret_service;
	}
    
    


function cek_no_rangka($no_rangka) {


	if(empty($no_rangka)) {
		$this->form_validation->set_message('cek_no_rangka', '%s harus diisi   ');
		return false;
	}

	$this->db->where("nomor_rangka",$no_rangka); 
	$this->db->where("approved","0");
	$res = $this->db->get("daftar_bbn");

	// echo "fjdkfjd k" . $this->db->last_query(); 
	$jumlah = $res->num_rows();
	if($jumlah > 0 ) {
		$this->form_validation->set_message('cek_no_rangka', '%s sudah ada dan belum selesai diproses  ');
		return false;
	}
}




function cek_jenis_perubahan($jenis_perubahan) {


	if(empty($jenis_perubahan) or  $jenis_perubahan == "0"  ) {
		$this->form_validation->set_message('cek_jenis_perubahan', '%s harus dipilih   ');
		return false;
	}

	 
}




    function simpan(){
        $post = $this->input->post();

        $this->load->library('form_validation');
         $this->form_validation->set_rules('jenis_perubahan','Jenis Perubahan ','callback_cek_jenis_perubahan');

  		$this->form_validation->set_rules('nomor_rangka','Nomor Rangka','callback_cek_no_rangka');
  		$this->form_validation->set_rules('tanggal','Tanggal','required');
		
		 
		$this->form_validation->set_message('required', ' %s Harus diisi ');
		
 		$this->form_validation->set_error_delimiters('', '<br>');
		if($this->form_validation->run() == TRUE ) {  // validasi berhasil 

			$post['tanggal'] = flipdate($post['tanggal']);

			$res = $this->db->insert("daftar_bbn",$post);
			if(!$res){
				$ret = array("error"=>true,"message"=>"gagal " . $this->db->last_query(). " " . mysql_error() );
			}
			else {
				$ret = array("error"=>false,"message"=>"DATA BERHASIL DISIMPAN");
			}
		}
		else { // validasi gagal 
			$ret = array("error"=>true,"message"=>validation_errors());
		}


		echo json_encode($ret);
    
    }


}

?>