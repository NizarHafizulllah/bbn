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
              </div>
            </div>
            <div class="box-body">
              	<form id="cekbbn" action="#" method="post">
  					<div class="col-lg-12">
						<div class="input-group">
      						<input type="text" name="no_bpkb" id="no_bpkb" class="form-control" placeholder="Masukkan Nomor BPKB">
      						<span class="input-group-btn">
        						<input type="submit" class="btn btn-primary"  value="Periksa" id="show_form"/> 
							</span>
						</div><!-- /input-group -->
					</div><!-- /.col-lg-6 -->
				</form>
            </div><!-- /.box-body -->
            <div class="box-footer">
            	footer
            </div><!-- /.box-footer-->
          </div><!-- /.box -->
		
			<!--form-->
			<div class="box box-primary" id="bagian_form">
            <div class="box-header with-border">
              <h3 class="box-title">Data</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Jenis Perubahan</div>
					</div>
					<div class="panel-body">
						<!-- Jenis Perubahan Dropdown -->
					<div class="form-group">
                    <select class="form-control select2" style="width: 100%;" id="jenis_perubahan" name="jenis_perubahan">
						<option selected="selected" value="0">==Pilih Satu==</option>
                      <option value="1">Ubah Data Umum</option>
                      <option value="2">Balik Nama Pemilik</option>
                    </select>
                  </div>
					</div>
				</div>
            <form id="form_data" class="form-horizontal" method="post" action="#" role="form">
				
		<!-- Data Pemilik -->

				
		<div class="panel panel-primary">
			<div class="panel-heading">
			<strong><h3 class="panel-title">Data Umum</h3></strong>
		</div>
		<div class="panel-body" id="data_umum">
		<div class="form-group">
			<label class="col-sm-3 control-label">Tanggal BBN2</label>
			<div class="col-sm-9">
				<input type="text" name="tgl_bbn2" class="form-control input-style" id="tgl_bbn2" placeholder="Tanggal BBN2">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Warna</label>
			<div class="col-sm-9">
				<input type="text" name="warna" class="form-control input-style" placeholder="Warna">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Jenis</label>
			<div class="col-sm-9">
				<input type="text" name="jenis" class="form-control input-style" placeholder="Jenis">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Bentuk</label>
			<div class="col-sm-9">
				<input type="text" name="bentuk" class="form-control input-style" placeholder="Bentuk">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">No. Polisi / Warna TNKB</label>
			<div class="col-sm-4">
				<input type="text" name="no_pol" class="form-control input-style" placeholder="No. Polisi. . .">
			</div>
			<div class="col-sm-5">
				<input type="text" name="warna_tnkb" class="form-control input-style" placeholder="Warna TNKB. . .">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">No. Mesin</label>
			<div class="col-sm-9">
				<input type="text" name="no_mesin" class="form-control input-style" placeholder="No. Mesin. . . ">
			</div>
		</div>
	</div>
	</div>
				<!-- Data Pemilik -->
				
	<div class="panel panel-primary">
		<div class="panel-heading">
			<strong><h3 class="panel-title">Pemilik</h3></strong>
		</div>
		<div class="panel-body" id="pemilik">
			<div class="form-group">
				<label class="col-sm-3 control-label">No. Identitas</label>
				<div class="col-sm-9">
					<input type="text" name="no_identitas" class="form-control input-style" placeholder="No. Identitas. . . ">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Nama</label>
				<div class="col-sm-9">
					<input type="text" name="nama" class="form-control input-style" placeholder="Nama ">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Pekerjaan</label>
				<div class="col-sm-9">
					<input type="text" name="pekerjaan" class="form-control input-style" placeholder="Pekerjaan">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Alamat</label>
				<div class="col-sm-9">
					<textarea type="text" name="alamat" class="form-control input-style" placeholder="Alamat"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Kode Pos</label>
				<div class="col-sm-9">
					<input type="text" name="kode_pos" class="form-control input-style" placeholder="Kode Pos">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">No. Ponsel</label>
				<div class="col-sm-9">
					<input type="text" name="no_ponsel" class="form-control input-style" placeholder="No. Ponsel">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Wilayah</label>
				<div class="col-sm-9">
					<input type="text" name="Wilayah" class="form-control input-style" placeholder="Wilayah">
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<strong><h3 class="panel-title">Yang Lain</h3></strong>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-3 control-label">Dasar</label>
				<div class="col-sm-9">
					<input type="text" name="dasar" class="form-control input-style" placeholder="Dasar">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">Pemohon</label>
				<div class="col-sm-9">
					<input type="text" name="pemohon" class="form-control input-style" placeholder="Pemohon">
				</div>
			</div>
			<div class="form-group pull-center">
				<div class="col-sm-offset-3 col-sm-9">
					<button style="border-radius: 0;" type="submit" class="btn btn-lg btn-primary">Simpan</button>
					<button style="border-radius: 0;" id="reset" type="reset" class="btn btn-lg btn-danger">Cancel</button>
				</div>
			</div>
		</div>
	</div>
</form>				
            </div><!-- /.box-body -->
            <div class="box-footer">
            	footer
            </div><!-- /.box-footer-->
          </div>
			
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	