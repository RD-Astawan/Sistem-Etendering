 


            <div class="col-md-9">
                        <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?php echo base_url().'assets/image/tender/'.$edit_lamaran->gambar; ?>" class="card-img">
    </div>
    <div class="col-md-8">
      <div class="card-body" style="">
                <h4>Produk detail</h4>
                <p><?php echo $edit_lamaran->tittle;?></p>
                <h4>Waktu & Deadline</h4>
                <ul>
                  <li>Deadline         : <?php echo $edit_lamaran->deadline;?></li>
                  <li>Tanggal Tutup    : <?php echo $edit_lamaran->tanggal_tutup;?></li>
                </ul>
                <h4>Deskripsi Produk</h4>
                <p><?php echo $edit_lamaran->deskripsi;?></p>
                <blockquote class="blockquote">
                  <p class="mb-0"><em>catatan-catatan penting ang diperlukan oleh konsumen terhadap produknya</em></p>
                </blockquote>

                <div class="" id="tempat_formulir">
                <form id="penawaran">
                <div class="halaman_form">
                  <input type="hidden" id="id_lamaran" name="id_lamaran" value="<?php echo $edit_lamaran->id_lamaran;?>">
                  <div class="custom-file">
                    <label class="custom-file-label" for="customFile">File RAB (Opsional)</label>
                    <input type="file" name="file_penawaran" class="custom-file-input" id="customFile">
                    
                  </div>
                  <div class="form-group">
                    <label for="tawaran_harga">Tawaran Harga (Rp)</label>
                    <input type="number" name="tawaran_harga" class="form-control textbox" id="tawaran_harga">
                    <i class="form-control-feedback"></i>
                                    <span class="text-warning" ></span>
                  </div>
                
                  <div class="form-group">
                    <button id="btn_gas" type="submit" class="btn  btn-outline-primary submit"><i class="fa fa-plane" style="margin-right:5px"></i>Simpan Penawaran!</button>
                  </div>
                </div>
                </form>
                <div class="form-group bottom_tampil">
                    <button id="btn_gas" class="btn  btn-outline-primary tampil"><i class="fa fa-plane" style="margin-right:5px"></i>Ajukan Penawaran!</button>
              </div>
    </div>
  </div>
</div>
              </div>
            </div>

            

          </div>
        </div>
      </div>


      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>


      <!-- GET IT-->
      <div class="get-it">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 text-center p-3">
              <h3>Do you want cool website like this one?</h3>
            </div>
            <div class="col-lg-4 text-center p-3">   <a href="#" class="btn btn-template-outlined-white">Buy this template now</a></div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">About Us</h4>
              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              <hr>
              <h4 class="h6">Join Our Monthly Newsletter</h4>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                  </div>
                </div>
              </form>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Blog</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                  <div class="image"><img src="<?= base_url('assets/Produsen/img/detailsquare.jpg') ?>" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="<?= base_url('assets/Produsen/img/detailsquare.jpg') ?>" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="<?= base_url('assets/Produsen/img/detailsquare.jpg') ?>" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Very very long blog post name</a></h5>
                  </div>
                </li>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong>Universal Ltd.</strong><br>13/25 New Avenue <br>Newtown upon River <br>45Y 73J <br>England <br><strong>Great Britain</strong></p><a href="contact.html" class="btn btn-template-main">Go to contact page</a>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <ul class="list-inline photo-stream">
                <li class="list-inline-item"><a href="#"><img src="<?= base_url('assets/Produsen/img/detailsquare.jpg') ?>" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?= base_url('assets/Produsen/img/detailsquare2.jpg') ?>" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?= base_url('assets/Produsen/img/detailsquare3.jpg') ?>" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?= base_url('assets/Produsen/img/detailsquare3.jpg') ?>" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?= base_url('assets/Produsen/img/detailsquare2.jpg') ?>" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?= base_url('assets/Produsen/img/detailsquare.jpg') ?>" alt="..." class="img-fluid"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2019. Your company / name goes here</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">Bootstrapious </a>& <a href="https://fity.cz/ostrava">Fity</a></p>
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
        $('.halaman_form').hide();

        $('.tampil').click(function(){
          $('.halaman_form').show(500);
          $('.bottom_tampil').hide();
        });
      });

      //validasi
      $('input').each(function(){ 
            $(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
                if (! $(this).val()){ //this mengacu pada text box yang sedang fokus
                  $(this).parent().find('.form-control').removeClass('is-valid');
                  $(this).parent().find('.form-control').addClass('is-invalid');
                    return get_error_text(this); //function get_error_text ada di bawah
                } else {
                    $(this).removeClass('no-valid'); 
                    $(this).parent().find('.text-warning').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
                    $(this).closest('div').removeClass('has-warning');
                    $(this).closest('div').addClass('has-success');
                    $(this).parent().find('.form-control').removeClass('is-invalid');
                    $(this).parent().find('.form-control').addClass('is-valid');
                }
            });
        });

       //submit form validasi login
       $('#penawaran').submit(function(e){
           e.preventDefault();
               var valid=true;     
               $(this).find('.textbox').each(function(){
                   if (! $(this).val()){
                       get_error_text(this);
                       valid = false;
                   } 
                   if ($(this).hasClass('no-valid')){
                       valid = false;
                   }
               });

               if(valid){
               var url = '<?php echo base_url(); ?>';
               var formData = new FormData($("#penawaran")[0]);
                 $.ajax({
                   type: 'POST',
                   url: url + 'Produsen/edit_lamar_tender',
                   data: formData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                   success: function(data){
                     
                   }
                 }); 
             }
       });

      //menerapkan gaya validasi form bootstrap saat terjadi eror
    function apply_feedback_error(textbox){
        $(textbox).addClass('no-valid'); //menambah class no valid
        $(textbox).parent().find('.text-warning').show();
        $(textbox).closest('div').removeClass('has-success');
        $(textbox).closest('div').addClass('has-warning');
        $(textbox).parent().find('.form-control').removeClass('is-valid');
        $(textbox).parent().find('.form-control').addClass('is-invalid');
    }

    //untuk mendapat eror teks saat textbox kosong, digunakan saat submit form dan blur fungsi
    function get_error_text(textbox){
        $(textbox).parent().find('.text-warning').text("");
        $(textbox).parent().find('.text-warning').text("text box ini tidak boleh kosong");
        $(this).parent().find('.form-control').removeClass('is-valid');
        $(this).parent().find('.form-control').addClass('is-invalid');
        return apply_feedback_error(textbox);
    }


    </script>
  </body>
</html>