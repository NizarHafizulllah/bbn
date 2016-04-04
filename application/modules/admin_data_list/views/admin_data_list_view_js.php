<script src="<?php echo base_url("assets") ?>/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
	$(".tanggal_awal").datepicker().on('changeDate', function(ev){                 
   			 $('.tanggal_awal').datepicker('hide');
		});
	$(".tanggal_akhir").datepicker().on('changeDate', function(ev){                 
   			 $('.tanggal_akhir').datepicker('hide');
		});

	 var dt = $("#daftar_bbn").DataTable(
		 	{
		 		// "order": [[ 0, "desc" ]],
		 		// "iDisplayLength": 50,
				"columnDefs": [ { "targets": 0, "orderable": false } ],
				"processing": true,
		        "serverSide": true,
		        "ajax": '<?php echo site_url("admin_data_list/get_data") ?>'
		 	});

		 
		 $("#daftar_bbn_filter").css("display","none");  
	
	$('#btn_submit').submit(function(){
			 var dt = $("#daftar_bbn").DataTable(
		 	{
		 		// "order": [[ 0, "desc" ]],
		 		// "iDisplayLength": 50,
				"columnDefs": [ { "targets": 0, "orderable": false } ],
				"processing": true,
		        "serverSide": true,
		        "ajax": '<?php echo site_url("admin_data_list/cari_data") ?>'
		 	});

		 
		 $("#daftar_bbn_filter").css("display","none");  
		 
	});	
});
	




</script>