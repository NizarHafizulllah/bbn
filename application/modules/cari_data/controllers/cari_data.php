<?php
class cari_data extends coba_controller{
	var $controller;
	function cari_data(){
		$this->controller = get_class($this);
		parent::__construct();
	}
	
	
	function index(){
		
//		$cek_session = $this->session->userdata('session');
//			if(!empty($cek)){
				$data_array=array();
		$content = $this->load->view($this->controller."_view",$data_array,true);

		$this->set_subtitle("Cari Data");
		$this->set_title("Cari Data");
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
    
    
    function simpan(){
        $post = $this->input->post();
     $data = array(
        'jenis_perubahan' => $post['jenis_perubahan'],
        'tanggal' => $post['tgl_bbn2'],
         'warna' => $post['warna'],
         'jenis' => $post['jenis'],
         'bentuk' => $post['bentuk'],
         'nomor_polisi' => $post['no_pol'],
         'warna_tnkb' => $post['warna_tnkb'],
         'nomor_mesin' => $post['no_mesin'],
         'nomor_identitas' => $post['no_identitas'],
         'nama' => $post['nama'],
         'pekerjaan' => $post['perkerjaan'],
         'alamat' => $post['alamat'],
         'nomor_ponsel' => $post['no_ponsel'],
         'kode_pos' => $post['kode_pos'],
         'wilayah' => $post['wilayah'],
         'dasar' => $post['dasar'],
         'pemohon' => $post['pemohon'],
         'nomor_rangka' => $post['no_rangka']
     );  
       $this->db->insert("daftar_bbn", $data);
        }
    }


	

?>