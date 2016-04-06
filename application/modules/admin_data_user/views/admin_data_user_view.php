
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">

 <link href="<?php echo base_url(); ?>assets/css/datepicker.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css">

 <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>


<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            DATA USER BBN
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data User BBN</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">

            <form role="form" action="" id="btn-cari" >
            <div class="col-md-3">
              <div class="form-group">
                <label for="Nama">Nama</label>
                <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama"> </input>
              </div>

            </div>
             <div class="col-md-2">
              <div class="form-group">
                <label for="Nama">Status</label>
                <input name="status" id="status" type="text" class="form-control" placeholder="Satus"> </input>
              </div>
          
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label> </label>
                <button type="submit" class="btn btn-primary form-control" id="btn_submit">Cari</button>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label></label>
                <button type="reset" class="btn btn-danger form-control" id="btn_reset">Reset</i></button>
              </div>
            </div>
            </form>


<table width="100%" border="0" id="members" class="table table-striped 
             table-bordered table-hover dataTable no-footer" role="grid">
<thead>
  <tr  >

        
        <th width="10%">NAMA</th>
        <th width="15%">EMAIL</th>
        <th width="5%">NO_HP</th>  
       <th width="20%">ALAMAT</th>    
        <th width="5%">STATUS</th>
       
    </tr>
  
</thead>
</table>






            </div>
            </div>
        </section>
</div>

<?php 
$this->load->view("admin_data_user_view_js");
?>