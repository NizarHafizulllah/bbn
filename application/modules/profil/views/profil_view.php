   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Profil
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h1 class="box-title">Detail</h1>
            </div>
            <div class="box-body">
              	<p><span class="subtitle"><pre>Nama   :<?php echo $this->session->userdata('nama') ?> </pre></span></p>
				<p><span class="subtitle"><pre>Email  :<?php echo $this->session->userdata('email') ?></pre></span></p>
<!--
				<p><span class="subtitle"><pre>Alamat :<?php echo $alamat; ?></pre></span></p>
				<p><span class="subtitle"><pre>No. Hp :<?php echo $no_hp; ?></pre></span></p>
-->
				
<!--
				<p><span class="subtitle">Email  :</span></p>
				<p><span class="subtitle">Alamat :</span></p>
				<p><span class="subtitle">No. Hp :</span></p>
-->
            </div><!-- /.box-body -->
            <div class="box-footer">
            	<strong>BBN</strong> <small>Biaya Balik Nama</small>
            </div><!-- /.box-footer-->
          </div>
			
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	