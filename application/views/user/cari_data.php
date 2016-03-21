      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Cari Data
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Cari Data</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              	<form id="cekbbn" action="<?php echo site_url('user/form_data'); ?>" method="post">
  					<div class="col-lg-12">
						<div class="input-group">
      						<input type="text" name="no_bpkb" id="no_bpkb" class="form-control" placeholder="Masukkan Nomor BPKB">
      						<span class="input-group-btn">
        						<input type="submit" class="btn btn-primary"  value="Periksa" /> 
							</span>
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
				</form>
            </div><!-- /.box-body -->
            <div class="box-footer">
            	footer
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<script>
	$(document).ready(function(){
		$('.no_bpkb').focus();
	});
</script>