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
							<table id="tabel_permintaan" class="table table-striped table-bordered">
					        	<thead>
					          	<tr>
					            	<th style="width: 5%;">No</th>
					            	<th style="width: 30%;">Judul</th>
					            	<th style="width: 25%;">Deskripsi singkat</th>
					            	<th style="width: 10%;">Deadline Pengerjaan</th>
					            	<th style="width: 15%;">Aksi</th>
					          	</tr>
					        	</thead>
								<tbody>
	                        <?php
	                          	if($pengerjaan->num_rows() == 0){
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
	                          	foreach ($pengerjaan->result() as $row) :
	                        		?>
	                        		<tr>
			                          	<td style="text-align: center;"><?php echo $no ?></td>
			                          	<td><?php echo $row->pengerjaan_judul;?></td>
			                          	<td style="text-align: center;"><?php echo $row->pengerjaan_deskripsi;?></td>
			                          	<td style="text-align: center;"><?php echo $row->pengerjaan_deadline;?></td>
                                          <td align="center">
                                            <a href="javascript:void(0)" class="btn btn-sm btn-success" id="konfirmasi_selesai" konfirmasiId="<?php echo $row->pengerjaan_id ?>" onclick="konfirmasi_selesai(this);">Selesai</a>
                                        </td>
                                          
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
    function konfirmasi_selesai(e) {
      var url = '<?php echo base_url(); ?>';
      var id_konfirmasi = $(e).attr("konfirmasiId");
      $.ajax({
        url: url + 'Produsen/konfirmasi_pengerjaan_selesai',
        type:'post',
        data:'id='+id_konfirmasi,
        success:function (data) {
          var dataKonf = jQuery.parseJSON(data);
          if (dataKonf.isSuccess) {
            $("#tabel_permintaan").load(document.URL + ' #tabel_permintaan');
          }
          else{
            alert('gagal update db');
          }
        }
      });
    }
    </script>

		