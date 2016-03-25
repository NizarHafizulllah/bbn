<script type="text/javascript">
	$(document).ready(function(){

		$("#cekbbn").submit(function(){

			$.ajax({
				url : '<?php echo site_url("$this->controller/get_data_bbn") ?>',
				data : $(this).serialize(),
				type : 'post',
				dataType : 'json',
				success  : function(ret){
					console.log(ret);
				}
			})
			return false;

		})

	});

</script>