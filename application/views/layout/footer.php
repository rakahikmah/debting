<!-- Main Footer -->
  
  <div class="control-sidebar-bg"></div>
</div>



<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/moment/moment.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/fullcalendar/dist/fullcalendar.min.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/sweetalert.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/toast.js') ?>"></script>

<script>function notifikasi(){
	  toastr["info"]("Welcome Back, Admin!", "Welcome",{
	    "closeButton": true,
	  "debug": false,
	  "newestOnTop": false,
	  "progressBar": true,
	  "positionClass": "toast-bottom-right",
	  "preventDuplicates": true,
	  "onclick": null,
	  "showDuration": "300",
	  "hideDuration": "1000",
	  "timeOut": "4000",
	  "extendedTimeOut": "1000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
	  "hideMethod": "fadeOut"});

	}
</script>
    
<script>
<<<<<<< HEAD
	$('select[name=jumlah_angsuran]').change(function() {
		var jumlah_angsuran = parseInt($(this).val());
		var harga_barang = parseInt($('input[name=harga_barang]').val());
		var tipe_pembayaran = parseInt($('select[name=tipe_pembayaran]').val());
		var total_hargabarang;
		var dp;

		if (harga_barang <= 1000000){
			total_hargabarang = parseInt(harga_barang)+(parseInt(harga_barang) * 0.05);
				dp  		  = parseInt(total_hargabarang)*0.1;
		}else if( harga_barang >= 1000000 && harga_barang <= 3000000){
			total_hargabarang = parseInt(harga_barang)+(parseInt(harga_barang) * 0.07);
				dp  			  = (parseInt(total_hargabarang)*0.1);
		}else if(harga_barang >=3000000 && harga_barang <= 5000000){
			total_hargabarang = parseInt(harga_barang)+(parseInt(harga_barang) * 0.08);
				dp  			  = (parseInt(total_hargabarang)*0.1);
		}else if(harga_barang >= 5000000){
			total_hargabarang = parseInt(harga_barang)+(parseInt(harga_barang) * 0.09);
				dp  			  = (parseInt(total_hargabarang)*0.1);
		}

		$('input[name=total_hargabarang]').val(parseInt(total_hargabarang));
		$('input[name=bayar_perangsur]').val(parseInt((total_hargabarang-dp)/jumlah_angsuran));
		$('input[name=bayar_dp]').val(parseInt(dp));
		
		var myDate=$('input[name=tanggal_pendaftaran]').val();
		myDate=myDate.split("-");
		var newDate=myDate[1]+"/"+myDate[0]+"/"+myDate[2];
		var ubahtimestamp = new Date(newDate).getTime(); //will alert 1510592400000
		var jangkawaktubayar =(tipe_pembayaran*jumlah_angsuran)*86400000;
		var hitung = parseInt(ubahtimestamp)+jangkawaktubayar;
		var t = new Date(hitung);
		var format=t.toLocaleDateString();
		tanggal_selesai_bayar=format.split("/");
		var tgl_lunas=tanggal_selesai_bayar[0]+"-"+tanggal_selesai_bayar[1]+"-"+tanggal_selesai_bayar[2];
		$('input[name=tanggal_selesai_bayar]').val(tgl_lunas);

	});
</script>
=======
	$(function () {
                  $("#datepicker").datepicker({ 
                        autoclose: true, 
                                
                        }).datepicker('update', new Date());
                        });
                        </script>
>>>>>>> a406ed6efedd3517a4b96e69dc32f4aeebf47830

<script>
	$(function () {
		$('#datadebitur').DataTable()
		$('#kalender').fullCalendar()
<<<<<<< HEAD
	})
=======
	});
// function decision(){
// 	swal({
//   title: "Are you sure?",
//   text: "Once deleted, you will not be able to recover this imaginary file!",
//   icon: "warning",
//   buttons: true,
//   dangerMode: true,
// });
// .then((willDelete) => {
//   if (willDelete) {
//     swal("Poof! Your imaginary file has been deleted!", {
//       icon: "success",
//     });
//   } else {
//     swal("Your imaginary file is safe!");
//   }
// });
// }
>>>>>>> a406ed6efedd3517a4b96e69dc32f4aeebf47830
	// $('input[name=harga_barang]').on('input', function(e){        
	//     $(this).val(formatCurrency(this.value.replace(/[,Rp.]/g,'')));
	// }).on('keypress',function(e){
	//     if(!$.isNumeric(String.fromCharCode(e.which))) e.preventDefault();
	// }).on('paste', function(e){    
	//     var cb = e.originalEvent.clipboardData || window.clipboardData;      
	//     if(!$.isNumeric(cb.getData('text'))) e.preventDefault();
	// });


	// function formatCurrency(number){
	//     var n = number.split('').reverse().join("");
	//     var n2 = n.replace(/\d\d\d(?!$)/g, "$&,");    
	//     return 'Rp.' +n2.split('').reverse().join('');
	// }
</script>
</body>
</html>