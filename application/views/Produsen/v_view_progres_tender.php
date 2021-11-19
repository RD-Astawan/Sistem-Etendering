
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


      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>


     <!-- FOOTER -->
      <footer class="main-footer" style="background-color: #fff;">
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2020. E-tendering Kerajinan Bali</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">I Wayan Rudi Eri Astawan</a></p>
                <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
              </div>
            </div>
          </div>
        </div>
      </footer>

      


    </div>
    <!-- Javascript files-->
    <script src="<?= base_url('assets/Produsen/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/popper.js/umd/popper.min.js') ?>"> </script>
    <script src="<?= base_url('assets/Produsen/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/jquery.cookie/jquery.cookie.js') ?>"> </script>
    <script src="<?= base_url('assets/Produsen/vendor/waypoints/lib/jquery.waypoints.min.js') ?>"> </script>
    <script src="<?= base_url('assets/Produsen/vendor/jquery.counterup/jquery.counterup.min.js') ?>"> </script>
    <script src="<?= base_url('assets/Produsen/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/js/jquery.parallax-1.1.3.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/jquery.scrollto/jquery.scrollTo.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/js/front.js') ?>"></script>
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
                   url: url + 'Produsen/upload_progres_tender',
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