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
    
    $(document).ready(function(){
       			$('#form_data').bootstrapValidator({
				message: 'This value is not valid', 
				feedbackIcons: { 
					valid: 'glyphicon glyphicon-ok', 
					invalid: 'glyphicon glyphicon-remove', 
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					warna: {
						validators: {
							notEmpty: {
								message : 'Data tidak boleh kosong'	
                            }
						}
					},
                    jenis: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    
                    pekerjaan: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    bentuk: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    no_pol: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    warna_tnkb: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    no_mesin: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    no_identitas: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    nama: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    alamat: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    kode_pos: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    no_ponsel: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    wilayah: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    dasar: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    pemohon: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },


                    


					
				}
				
			});
			
		$('#reset').click(function() {
        $('#form_data').data('bootstrapValidator').resetForm(true);
    	});
     
    });
    

       

</script>
<script>
    function(){
        
        $(.select2).select2();
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholde": "dd/mm/yyyy"}); 
       }); 
</script>   