
            <div class="col-md-9">
              <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Konsumen/index')  ?>">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">My Profile</li>
          </ol>
        </nav>

                <div class="card mb-3">
  <div class="row no-gutters">
   
    <div class="col-md-8">
      <div class="card-body" style="">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <p><i style="color: red;">*</i> <i>Silahkan Lengkapi Data Profile yang Belum Terisi</i></p>
          </div>
          
        </div>
          
      		<form id="form_edit_profile_pt">
      			<div class="form-group row">
			    <div class="col-sm-10">
			      	<input type="hidden" name="id_produsen" class="form-control" id="id_produsen" value="<?= $profile_pt->id_produsen ?>" readonly>
			    </div>
			 </div>
      		<div class="form-group row">
			    <label for="staticEmail" class="col-sm-2 col-form-label">Nama PT</label>
			    <div class="col-sm-10">
			      	<input type="text" name="profile_nama_pt" readonly class="form-control x textbox" id="profile_nama_pt" value="<?= $profile_pt->nama_pt ?>" readonly>
			      	<i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
			    </div>
			 </div>
			  <div class="form-group row">
          <label for="exampleFormControlTextarea1" class="col-sm-2">Example textarea</label>
           <div class="col-sm-10">
            <textarea class="form-control x textbox" name="profile_deskripsi_pt" id="profile_deskripsi_pt" rows="3" readonly><?= $profile_pt->deskripsi_pt ?></textarea>
            <i class="form-control-feedback"></i>
            <span class="text-warning" ></span>
          </div>
        </div>

			  <div class="form-group row bottom_simpan">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
				<button type="submit" class="btn btn-info mt-5 edit_profile">SAVE PROFILE PT</button>
			    </div>
			  </div>
			 </form>
			   <div class="form-group row bottom_edit">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
				<button type="bottom" class="btn btn-info mt-5 edit_profile">EDIT PROFILE PT</button>
			    </div>
			  </div>
			  
  </div>

</div>
 <div class="col-md-4">
 	 
</div>
              </div>
            </div>
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
  		$('.bottom_simpan').hide();

        $('.edit_profile').click(function(){
          //$('.halaman_form').show(500);
          $('.bottom_edit').hide();
          $(".x").attr("readonly", false);
          $('.bottom_simpan').show();
           $('.text-warning').hide();

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

          $('textarea').each(function(){ 
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


        //mengecek textbox Nama Valid Atau Tidak
        $('#profile_nama_pt').blur(function(){
            var nama= $(this).val();
            var len= nama.length;
            if(len>0){ //jika ada isinya
                if(!valid_nama(nama)){ //jika nama tidak valid
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Nama tidak valid! (Gunakan Hurup)");
                    $(this).parent().find('.form-control').removeClass('is-valid');
                    $(this).parent().find('.form-control').addClass('is-invalid');
                    return apply_feedback_error(this);
                } else {
                    if (len>30){ //jika karakter >30
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal karakter 30");
                        return apply_feedback_error(this);
                    }
                }
            } 
        });

        //mengecek textbox Alamat Valid Atau Tidak
        $('#profile_deskripsi_pt').blur(function(){
            var alamat= $(this).val();
            var len= alamat.length;
            if(len>0){ //jika ada isinya
                    if (len>150){ //jika karakter >30
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal karakter 150");
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        return apply_feedback_error(this);
                    }
            } 
        });

        });

   //submit form validasi login
      $('#form_edit_profile_pt').submit(function(e){
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
                var formData = new FormData($(this)[0]);
                 $.ajax({
                   type: 'POST',
                   url: url + 'Produsen/edit_profile_pt',
                   data: formData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                   success: function(response){
                      if(response.warning){
                        toastr.options.onHidden = function() { window.location.href = 'pt_profile'; }
                        toastr.warning('Data profile PT/UD gagal diedit.', 'Gagal!');
                      }
                      else{
                        toastr.options.onHidden = function() { window.location.href = 'pt_profile'; }
                        toastr.success('Data profile PT/UD berhasil dirubah.', 'Sukses!');
                      }
                   }

                 });   
         }
                      
      });

    });

    //fungsi cek nama
    function valid_nama(nama) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(nama);
    }

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