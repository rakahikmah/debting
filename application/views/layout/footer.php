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


<script>
	$(function () {
		$('#datadebitur').DataTable()
		$('#kalender').fullCalendar()
	})

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