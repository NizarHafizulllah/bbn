<?php 

class admin_data_user extends admin_controller{
  var $controller;
  function admin_data_user(){
    parent::__construct();

    $this->controller = get_class($this);
    $this->load->model("admin_user_model","dm");
    //$this->load->helper("serviceurl");
    
  }
  



function index(){
    $data_array=array();
    $content = $this->load->view($this->controller."_view",$data_array,true);

    $this->set_subtitle("Data User");
    $this->set_title("Data User");
    $this->set_content($content);
    $this->cetak();
}


    function get_data() {

      
      // show_array($userdata);

      $draw = $_REQUEST['draw']; // get the requested page 
      $start = $_REQUEST['start'];
        $limit = $_REQUEST['length']; // get how many rows we want to have into the grid 
        $sidx = isset($_REQUEST['order'][0]['column'])?$_REQUEST['order'][0]['column']:0; // get index row - i.e. user click to sort 
        $sord = isset($_REQUEST['order'][0]['dir'])?$_REQUEST['order'][0]['dir']:"asc"; // get the direction if(!$sidx) $sidx =1;  
        
        // $no_rangka = $_REQUEST['columns'][5]['search']['value'];
        // $tanggal_awal = $_REQUEST['columns'][4]['search']['value'];
        // $tanggal_akhir = $_REQUEST['columns'][6]['search']['value'];
        // $status = $_REQUEST['columns'][7]['search']['value'];


      //  order[0][column]
        $req_param = array (
        "sort_by" => $sidx,
        "sort_direction" => $sord,
        "limit" => null,
        
         
    );     
           
        $row = $this->dm->data($req_param)->result_array();
    
        $count = count($row); 
       
        
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
          
        
        $result = $this->dm->data($req_param)->result_array();
        

       
        $arr_data = array();
        foreach($result as $row) : 
    // $daft_id = $row['daft_id'];
           $aktif = ($row['aktif']=='0')?"<span class='pull-right badge bg-red'>Tidak Aktif</span>":"<span class='pull-right badge bg-green'>Aktif</span>";

           
          $arr_data[] = array(
            $row['nama'],
            $row['email'],
            $row['nomor_hp'],
            $row['alamat'],
            $aktif
               
                      );
        endforeach;

         $responce = array('draw' => $draw, // ($start==0)?1:$start,
                  'recordsTotal' => $count, 
                  'recordsFiltered' => $count,
                  'data'=>$arr_data
          );
         
        echo json_encode($responce); 
    }

  

}

?>