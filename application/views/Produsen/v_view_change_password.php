
            <div class="col-md-9">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url('Konsumen/index')  ?>">Tender</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Password</li>
                </ol>
              </nav>

                <form id="change_password">
                   <div class="form-group row">
                  <div class="col-sm-8">
                    <input type="hidden" class="form-control" name="password_database" value="<?= $pass_produsen->password ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-8">
                    <input type="hidden" class="form-control" name="id_produsen" value="<?= $pass_produsen->id_produsen ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Old password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control textbox" name="password_lama">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Current password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control textbox" name="password_baru" id="password_baru">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Confirm password</label>
                  <div class="col-sm-6">
                    <input type="password" class="form-control textbox" name="password_confirm" id="password_confirm">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
               </div>
               <div class="form-group row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary mt-3" style="float: left;">Simpan Pass Baru</button>
                  </div>
               </div>
             </form>
              </div>
              <div class="row">
               
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <footer class="main-footer" style="background-color: #fff !important;">
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
    <script src="<?= base_url('assets/Toastr/build/toastr.min.js') ?>"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        //submit form validasi login
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

      //mengecek password
        $('#password_baru').blur(function(){
            var password=$(this).val();
            var len=password.length;
            if (len>0 && len<8) {
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("password minimal 8 karakter");
                return apply_feedback_error(this);
            } else {
                if(len>35) {
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("password maximal 35 karakter");
                    return apply_feedback_error(this);
                }
            }
        });
        //mengecek konfirmasi password
        $('#password_confirm').blur(function(){
            var pass = $("#password_baru").val();
            var conf=$(this).val();
            var len=conf.length;
            if (len>0 && pass!==conf) {
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("konfirmasi password tidak sama dengan password!");
                return apply_feedback_error(this);
            }
        });


       $('#change_password').submit(function(e){
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
               var formData = new FormData($("#change_password")[0]);
                 $.ajax({
                   type: 'POST',
                   url: url + 'Produsen/save_new_pass',
                   dataType: 'json',
                   data: formData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,

                   success: function(response){
                    if(response.warning){
                      $('#change_password')[0].reset();
                      $('#change_password').parent().find('.form-control').removeClass('is-valid');
                      toastr.options.onHidden = function() { window.location.href = 'change_password_produsen'; }
                      toastr.warning('Data password tidak sama dengan di database.', 'Gagal!');
                    }
                    else if(response.error){
                      $('#change_password')[0].reset();
                      $('#change_password').parent().find('.form-control').removeClass('is-valid');
                      toastr.options.onHidden = function() { window.location.href = 'change_password_produsen'; }
                      toastr.error('Password baru tidak boleh sama dengan password lama.', 'Gagal!');
                    }
                    else{
                      $('#change_password')[0].reset();
                      $('#change_password').parent().find('.form-control').removeClass('is-valid');
                      toastr.options.onHidden = function() { window.location.href = 'change_password_produsen'; }
                      toastr.success('Sukses mengubah data password.', 'Sukses!');
                    }
                   }
                 }); 
               
            }
       });
      });

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
        $(textbox).parent().find('.text-warning').text("Text box ini tidak boleh kosong");
        $(this).parent().find('.form-control').removeClass('is-valid');
        $(this).parent().find('.form-control').addClass('is-invalid');
        return apply_feedback_error(textbox);
      }
    </script>
    <script type="text/javascript">
         toastr.options = {
          "closeButton": false,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-bottom-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }
     </script>
  </body>
</html>