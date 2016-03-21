<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ie10-viewport-bug-workaround.css">
    

    <!-- Custom styles for this template -->
        <link rel="stylesheet" hre	f="<?php echo base_url(); ?>assets/css/navbar-fixed-top.css">
     <form id="form_data" class="form-horizontal" method="post" action="#" role="form">
									<div class="panel panel-default">
			<div class="panel-heading">
			<strong><h3 class="panel-title">Data Umum</h3></strong>
		</div>
		<div class="panel-body">
		<div class="form-group">
			<label class="col-sm-3 control-label">Tanggal BBN2</label>
			<div class="col-sm-9">
				<input type="text" name="tgl_bbn2" class="form-control input-style" placeholder="Tanggal BBN2">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Warna</label>
			<div class="col-sm-9">
				<input type="text" name="warna" class="form-control input-style" placeholder="Tanggal BBN2">
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
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong><h3 class="panel-title">Pemilik</h3></strong>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-3 control-label">No. Mesin</label>
				<div class="col-sm-9">
					<input type="text" name="no_mesin" class="form-control input-style" placeholder="No. Mesin. . . ">
				</div>
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			<button style="border-radius: 0;" type="submit" class="btn btn-primary btn-default">Sign Up</button>
			<button style="border-radius: 0;" id="reset" type="reset" class="btn btn-primary btn-default">Cancel</button>
		</div>
	</div>
</form><form id="form_data" class="form-horizontal" method="post" action="#" role="form">
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong><h3 class="panel-title">Data Umum</h3></strong>
		</div>
		<div class="panel-body">
		<div class="form-group">
			<label class="col-sm-3 control-label">Tanggal BBN2</label>
			<div class="col-sm-9">
				<input type="text" name="tgl_bbn2" class="form-control input-style" placeholder="Tanggal BBN2">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Warna</label>
			<div class="col-sm-9">
				<input type="text" name="warna" class="form-control input-style" placeholder="Tanggal BBN2">
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
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong><h3 class="panel-title">Pemilik</h3></strong>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-3 control-label">No. Mesin</label>
				<div class="col-sm-9">
					<input type="text" name="no_mesin" class="form-control input-style" placeholder="No. Mesin. . . ">
				</div>
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			<button style="border-radius: 0;" type="submit" class="btn btn-primary btn-default">Sign Up</button>
			<button style="border-radius: 0;" id="reset" type="reset" class="btn btn-primary btn-default">Cancel</button>
		</div>
	</div>
</form>ixed-top.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url(); ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">


      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
 
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Sisfo BBN</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="<?php echo site_url("cek_bbn") ?>">Cek Data Nomor BPKB</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action  
      <div class="jumbotron">
        <h1>Sistem Informasi Biaya Balik Nama</h1>
        
      </div>-->
      
    <div class="row">
    	<div class="col-md-12">
        		<div class="panel panel-default">
                <div class="panel-heading"><strong><?php echo $subtitle; ?></strong></div>            

                  <div id="homepage" class="panel-body" style="min-height:400px;">
                          <?php echo $content; ?>
                  </div>
                  <!--<div class="panel-footer">Panel footer</div>-->
                </div>
        </div>
    </div> 
 
      
      

</div> <!-- /container -->



    <footer class="footer">
      <div class="container">
        <p class="text-muted">Sistem Informasi Biaya Balik Nama &copy 2016. Tiga Pilar Maju Mandiri</p>
      </div>
    </footer>


  
  </body>
</html>
