<!-- MAIN -->
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Daftar Tender</h3>
					<hr/>
				</div>
				<div class="panel-body">
					<p>percobaan halaman depan</p>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

<!--MODAL HAPUS-->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Data Admin</h4>
         </div>
         <form class="form-horizontal">
            <div class="modal-body">             
               <input type="hidden" name="kode" id="textkode" value="">
               <div class="alert alert-success"><p>Apakah Anda yakin mau memhapus Data ini?</p></div>              
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
               <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!--END MODAL HAPUS-->

<script type="text/javascript">
      $(document).ready(function() {

         $('#example').DataTable( {
            "paging":   true,
            "ordering": false,
            "searching": true,
            "bLengthChange": false,
            "info":     false

         });
      });

   function item_hapus(e){
      var id=$(e).attr('data');
      $('#ModalHapus').modal('show');
      $('[name="kode"]').val(id);
   };

   $('#btn_hapus').on('click',function(){
      var kode=$('#textkode').val();
      $.ajax({
      	type : "POST",
      	// processing: true,
      	// serverSide: true,
      	url  : "<?php echo base_url('kon_page/delete_tender_1')?>",
      	dataType : "JSON",
      	data : {kode: kode},
      	dataSrc: "",
         success: function(data){
            $('#ModalHapus').modal('hide');
            toastr.options.onHidden = function() { 
            $("#example").load(document.URL +' #example'); }
            toastr.success('Data admin berhasil dihapus.', 'Berhasil!');             
         }
      });
      return false;
   });
</script>

		