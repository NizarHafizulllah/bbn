<?php 

class admin_data_list extends CI_Model {


	function admin_data_list(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"jenis_perubahan",

							"tanggal",
							"nomor_rangka",
							"nomor_mesin",
							"pemohon",
							"warna_tnkb",
							"approved"
		 	);

		 $this->db->select('*')->from("daftar_bbn");

		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		//$this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		// echo $this->db->last_query(); exit;
 		return $res;
	}


}

?>