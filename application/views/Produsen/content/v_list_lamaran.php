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
					<div class="row">
						<div class="col-md-12">
							<table id="example" class="table table-striped table-bordered">
					        	<thead>
					          	<tr>
					            	<th style="width: 5%;">No</th>
					            	<th style="width: 40%;">Tender</th>
					            	<th style="width: 15%;">Tanggal Tutup</th>
					            	<th style="width: 15%;">Deadline Pengerjaan</th>
					            	<th style="width: 10%;">Tawaran Harga</th>
					            	<th style="width: 15%;">Aksi</th>
					          	</tr>
					        	</thead>
								<tbody>
	                        <?php
	                          	if($lamaran->num_rows() == 0){
	                            	?>
	                            	<tr style="text-align:center;">
	                            		<td colspan="6">Belum Ada Tender yang Dibuat</td>
	                            		<td style="display: none"></td>
	                            		<td style="display: none"></td>
	                            		<td style="display: none"></td>
	                            		<td style="display: none"></td>
	                            		<td style="display: none"></td>
	                            	</tr>
	                            	<?php
	                         	}
	                          	else{
	                          	$no=1;
	                          	foreach ($lamaran->result() as $row) :
	                        		?>
	                        		<tr>
			                          	<td style="text-align: center;"><?php echo $no ?></td>
			                          	<td><?php echo $row->tittle;?></td>
			                          	<td style="text-align: center;"><?php echo $row->tanggal_tutup;?></td>
			                          	<td style="text-align: center;"><?php echo $row->deadline;?></td>
			                          	<td style="text-align: center;"><?php echo $row->tawaran_harga;?></td>
                                          <?php
                                            $tanggal_sekarang = date("Y-m-d");
                                            $tanggal_tutup    = $row->tanggal_tutup;
                                            $disabled = $tanggal_sekarang > $tanggal_tutup? 'disabled' : ''; //tanda tanya diartikan if dan setelahnya berupa jawaban ynag kiri benar dan setelah : salah
                                        ?> 
			                          	<td><center>
                                          <a href="<?php echo base_url() ?>Produsen/view_edit_lamaran/<?php echo $row->id_lamaran ?>"><button type="button" class="btn btn-sm btn-template-main" <?= $disabled ?>>PENAWARAN ULANG</button></a>
                                          <a href="javascript:void(0);"><button type="button" class="btn btn-sm btn-danger" data="<?php echo $row->id_tender; ?>" onclick="item_hapus(this);"><span class="lnr lnr-trash"></span></button></a>
			                          	</center></td>
                                          
	                        		</tr>
	                        	<?php 
	                        		$no++;
	                        		endforeach;
	                        	}
	                        	?>
								</tbody>	        
							</table>			 
						</div>
					</div>
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

		