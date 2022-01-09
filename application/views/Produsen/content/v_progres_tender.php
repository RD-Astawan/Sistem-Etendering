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
                    <div class="col-md-9">
              <form class="upload_progres">
                 <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Pilih Pengerjaan</label>
                  <div class="col-sm-6">
                    <select class="form-control" name="pengerjaan_tender" id="category" required>
                      <option value="">No Selected</option>
                      <?php foreach($list_pengerjaan->result() as $row):?>
                      <option value="<?php echo $row->pengerjaan_id;?>"><?php echo $row->pengerjaan_judul;?></option>
                      <?php endforeach;?>
                    </select>
                </div>
              </div>

                  <?php
                    if($list_pengerjaan->num_rows() == 0){
                      //no activitas
                    }
                    else{
                      ?>
                        <div class="form-group row">
                          <div class="col-sm-2"></div>
                          <div class="col-sm-6">
                            <input type="hidden" class="form-control textbox" name="progres_gambar1" class="gambar" value="<?php echo $row->id_konsumen;?> ">
                          </div>
                       </div>
                      <?php
                    }
                  ?>
                 
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Gambar (1)</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control textbox" name="progres_gambar1" class="gambar">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Gambar (2)</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control textbox" name="progres_gambar2" class="gambar">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Gambar (3)</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control textbox" name="progres_gambar3" class="gambar">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control textbox" name="progres_keterangan" id="keterangan">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
               </div>

               <div class="form-group row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary mt-3">Upload</button>
                  </div>
               </div>
              </form>
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

    <script type="text/javascript">
      $(document).ready(function(){
        $('.upload_progres').submit(function(e){
           e.preventDefault();
               // var valid=true;     
               // $(this).find('.textbox').each(function(){
               //     if (! $(this).val()){
               //         get_error_text(this);
               //         valid = false;
               //     } 
               //     if ($(this).hasClass('no-valid')){
               //         valid = false;
               //     }
               // });

               // if(valid){
               var url = '<?php echo base_url(); ?>';
               var formData = new FormData($(".upload_progres")[0]);
                 $.ajax({
                   type: 'POST',
                   url: url + 'pro_page/upload_progres_tender',
                   dataType: 'json',
                   data: formData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,

                   success: function(response){
                    // if(response.warning){
                    //   $('#change_password')[0].reset();
                    //   $('#change_password').parent().find('.form-control').removeClass('is-valid');
                    //   toastr.options.onHidden = function() { window.location.href = 'change_passwrod'; }
                    //   toastr.warning('Data password tidak sama dengan di database.', 'Gagal!');
                    // }
                    // else if(response.error){
                    //   $('#change_password')[0].reset();
                    //   $('#change_password').parent().find('.form-control').removeClass('is-valid');
                    //   toastr.options.onHidden = function() { window.location.href = 'change_passwrod'; }
                    //   toastr.error('Password baru tidak boleh sama dengan password lama.', 'Gagal!');
                    // }
                    // else{
                    //   $('#change_password')[0].reset();
                    //   $('#change_password').parent().find('.form-control').removeClass('is-valid');
                    //   toastr.options.onHidden = function() { window.location.href = 'change_passwrod'; }
                    //   toastr.success('Sukses mengubah data password.', 'Sukses!');
                    // }
                   }
                 }); 
               
            // }
       });
      });
    </script>
  </body>
</html>