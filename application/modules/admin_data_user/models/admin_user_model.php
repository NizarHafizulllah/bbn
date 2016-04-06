<?php 

class admin_user_model extends CI_Model {


	function admin_user_model(){
		parent::__construct();
	}




 function data($param)
	{		

		// show_array($param);
		// exit;

		 extract($param);

		 $kolom = array(0=>"nama",
							"email",
							"nomor_hp",
							"alamat",
							"aktif"				
		 	);


		

		 $this->db->select('*')->from("members");


		  if(!empty($nama)) {
		 	$this->db->like("nama",$nama);
		 }
		 if(!empty($aktif) and !empty($tidak_aktf) ) {
		 	$this->db->where("status between '$aktif' and '$tidak_aktf'",null,false);	 	
		 }


		($param['limit'] != null ? $this->db->limit($param['limit']['end'], $param['limit']['start']) : '');
		// $this->db->limit($param['limit']['end'], $param['limit']['start']) ;
       
       ($param['sort_by'] != null) ? $this->db->order_by($kolom[$param['sort_by']], $param['sort_direction']) :'';
        
		$res = $this->db->get();
		  // echo $this->db->last_query(); exit;
 		return $res;
	}


	

	


}

?>