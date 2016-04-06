<script src="<?php echo base_url("assets") ?>/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){


	 var dt = $("#members").DataTable(
		 	{
		 		// "order": [[ 0, "desc" ]],
		 		// "iDisplayLength": 50,
				"columnDefs": [ { "targets":0, "orderable": false } ],
				"processing": true,
		        "serverSide": true,
		        "ajax": '<?php echo site_url("admin_data_user/get_data") ?>'
		 	});

		 
		 $("#members_filter").css("display","none");  
	
	 
		 $("#btn_submit").click(function(){
		 	    // alert('hello');
		 	  

		 	  dt.columns(1).search($("#nama").val())
				 .draw();

				 return false;
				 $("#btn_submit").click();
		 });


		 $("#btn_reset").click(function(){
		 	$("#nama").val('');

			$("#btn_reset").click();
		 });


});
	




</script>