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
			});
			return false;

		}); 





$("#form_data").submit(function(){

                $.ajax({
                url : '<?php echo site_url("$this->controller/simpan") ?>',
                data : $(this).serialize(),
                type : 'post',
                dataType : 'json',
                success  : function(ret){
                    console.log(ret);


                if(ret.error == false) { 
                    BootstrapDialog.alert({
                            type: BootstrapDialog.TYPE_PRIMARY,
                            title: 'Informasi',
                            message: ret.message // ,

                            // callback: function(result) {
                            //         location.href='<?php echo site_url("user"); ?>';
                            // }
                             
                             
                            } 
                        ); 
                }
                else {
                    BootstrapDialog.alert({
                                                type: BootstrapDialog.TYPE_DANGER,
                                                title: 'Error',
                                                message: ret.message
                                                 
                                            }); 
                    }
                }
            });

    return false;
});




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
                    nomor_rangka: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong' 
                            }
                        }
                    },
                    tanggal: {
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
                    nomor_polisi: {
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
                    nomor_mesin: {
                        validators: {
                            notEmpty: {
                                message : 'Data tidak boleh kosong'
                            }
                        }
                    },
                    nomor_identitas: {
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
                    nomor_ponsel: {
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
                    }


                    


                    
                }
                
            } );


}); 

/*

            
        $('#reset').click(function() {
        $('#form_data').data('bootstrapValidator').resetForm(true);
        });
*/

/* $(.select2).select2();
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholde": "dd/mm/yyyy"}); 

	});
    
    */

       

</script>
 