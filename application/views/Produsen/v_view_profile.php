
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
          
      		<form id="form_edit_profile_produsen">
      			<div class="form-group row">
			    <div class="col-sm-10">
			      	<input type="hidden" name="id_produsen" class="form-control" id="id_produsen" value="<?= $profile->id_produsen ?>" readonly>
			    </div>
			 </div>
      		<div class="form-group row">
			    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
			    <div class="col-sm-10">
			      	<input type="text" name="profile_nama" readonly class="form-control x textbox" id="profile_nama" value="<?= $profile->nama ?>" readonly>
			      	<i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
			    </div>
			 </div>
			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
			    <div class="col-sm-10">
			      	<input type="text" name="profile_alamat" class="form-control x textbox" id="profile_alamat" value="<?= $profile->alamat ?>" readonly>
			      	<i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">No Telepon</label>
			    <div class="col-sm-10">
			      	<input type="text" name="profile_no_tlp" class="form-control x textbox" id="profile_no_tlp" value="<?= $profile->no_tlp ?>" readonly>
			      	<i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Kota</label>
			    <div class="col-sm-10">
			      	<input type="text" name="profile_kota" class="form-control x textbox" id="profile_kota" value="<?= $profile->kota ?>" readonly>
			      	<i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
			    <div class="col-sm-10">
			      	<input type="email" name="profile_email" class="form-control x textbox" id="profile_email" value="<?= $profile->email ?>" readonly>
			      	<i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
			    </div>
			  </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Kode NPWP</label>
          <div class="col-sm-10">
              <input type="text" name="profile_kode_npwp" class="form-control x textbox" id="profile_kode_npwp" value="<?= $profile->kode_npwp ?>" readonly>
              <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Tdr selsai</label>
          <div class="col-sm-10">
              <input type="text" name="profile_proyek_selesai" class="form-control" id="profile_proyek_selesai" value="<?= $profile->proyek_selesai ?>" readonly>
          </div>
        </div>
			  <div class="form-group row">
			    <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
			    <div class="col-sm-10">
			      	<input type="text" name="profile_username" class="form-control x textbox" id="profile_username" value="<?= $profile->username ?>" readonly>
			      	<i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
			    </div>
			  </div>
			  <div class="form-group row form_foto">
			  	<label for="inputPassword" class="col-sm-2 col-form-label">Gambar</label>
			  	<div class="col-sm-10">
			    <input type="file" class="form-control" name="foto_produsen">
			    </div>
			  </div>

			  <div class="form-group row bottom_simpan">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
				<button type="submit" class="btn btn-info mt-5 edit_profile">SAVE PROFILE</button>
			    </div>
			  </div>
			 </form>
			   <div class="form-group row bottom_edit">
			    <div class="col-sm-2"></div>
			    <div class="col-sm-10">
				<button type="bottom" class="btn btn-info mt-5 edit_profile">EDIT PROFILE</button>
			    </div>
			  </div>
			  
  </div>

</div>
 <div class="col-md-4">
 	 <div class="image-preview" id="image_preview">
       <!-- <img src="" alt="Image Preview" class="image-preview_image">
       <span class="image-preview_default-text">Image Priview</span> -->
       <div class="ha" id="ha">
     		<img src="<?php echo base_url().'assets/Gambar/profile/'.$profile->foto; ?>" class="card-img">
       </div>
       </div>
</div>
              </div>
            </div>
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
  		$('.bottom_simpan').hide();
  		$('.form_foto').hide();

        $('.edit_profile').click(function(){
          //$('.halaman_form').show(500);
          $('.bottom_edit').hide();
          $(".x").attr("readonly", false);
          $('.bottom_simpan').show();
          $('.form_foto').show();
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

          //mengecek text box email
        $('#profile_email').blur(function(){
            
            var email=$(this).val();
            var len= email.length;
            if(len>0){ 
                if(!valid_email(email)){ 
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("E-mail Tidak Valid (ex: aaaa@yahoo.co.id)");
                    return apply_feedback_error(this);
                } else {
                    if (len>30){ 
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal Karakter 30");
                        return apply_feedback_error(this);
                    } else {
                        var valid = false;
                        $.ajax({
                         url: "<?php echo base_url('Produsen/checkemail_produsen')?>",
                         type: "POST",
                         data: "email="+email,
                         dataType: "text",
                         success: function(data){
                                  if (data==0){ //pada file check email.php, apabila email sudah ada di database makan akan mengembalikan nilai 0
                                    $('#profile_email').parent().find('.text-warning').text("");
                                    $('#profile_email').parent().find('.text-warning').text("Email sudah ada");
                                    return apply_feedback_error('#profile_email');
                                   }
                            }
                            });
                        }
                }
            } 
        });

        //mengecek text box username
        $('#profile_username').blur(function(){
            var username= $(this).val();
            var len= username.length;
            if(len>0){ 
                if(!valid_username(username)){ 
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Username Tidak Valid (gunakan hurup!)");
                    $(this).parent().find('.form-control').removeClass('is-valid');
                    $(this).parent().find('.form-control').addClass('is-invalid');
                    return apply_feedback_error(this);
                } else {
                    if (len>30){ 
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal karakter 30");
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        return apply_feedback_error(this);
                    } else {
                        var valid = false;
                        $.ajax({
                        url: "<?php echo base_url('Produsen/checkusername_produsen')?>",
                        type: "POST",
                        data: "username="+username,
                        dataType: "text",
                        success: function(data){
                            if (data==0){ //pada controler auth fungsi check username, apabila email sudah ada di database makan akan mengembalikan nilai 0
                              $('#profile_username').parent().find('.text-warning').text("");
                              $('#profile_username').parent().find('.text-warning').text("Username sudah ada");
                                return apply_feedback_error('#profile_username');
                            }
                        }
                            });
                        }
                }
            } 
        });

        //mengecek textbox Nama Valid Atau Tidak
        $('#profile_nama').blur(function(){
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

        //mengecek textbox Kota Valid Atau Tidak
        $('#profile_kota').blur(function(){
            var kota= $(this).val();
            var len= kota.length;
            if(len>0){ //jika ada isinya
                if(!valid_kota(kota)){ //jika nama tidak valid
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Nama kota tidak valid");
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
        $('#profile_alamat').blur(function(){
            var alamat= $(this).val();
            var len= alamat.length;
            if(len>0){ //jika ada isinya
                    if (len>30){ //jika karakter >30
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal karakter 30");
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        return apply_feedback_error(this);
                    }
            } 
        });

        


        //mengecek nomer hp
        $('#profile_no_tlp').blur(function(){
            var no_tlp=$(this).val();
            var len=no_tlp.length;
            if (len>0 && len<=10 && valid_no_tlp(no_tlp)){
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("Nomer HP terlalu pendek");
                $(this).parent().find('.form-control').removeClass('is-valid');
                $(this).parent().find('.form-control').addClass('is-invalid');
                return apply_feedback_error(this);
            } else {
                if(len>0 && !valid_no_tlp(no_tlp)){
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Format nomer hp tidak sah.(ex: +6285736262623)");
                    $(this).parent().find('.form-control').removeClass('is-valid');
                    $(this).parent().find('.form-control').addClass('is-invalid');
                    return apply_feedback_error(this);
                } else {
                    if (len >13){
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Nomer HP terlalu Panjang");
                        return apply_feedback_error(this);
                    }
                }
            }
        });

        $('#profile_kode_npwp').blur(function(){
            var register_kode_npwp = $(this).val();
            var len=register_kode_npwp.length;
            if (len>0 && len<=14 && valid_register_kode_npwp(register_kode_npwp)){
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("Kode NPWP terlalu pendek");
                $(this).parent().find('.form-control').removeClass('is-valid');
                $(this).parent().find('.form-control').addClass('is-invalid');
                return apply_feedback_error(this);
            } else {
                if(len>0 && !valid_register_kode_npwp(register_kode_npwp)){
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Format kode NPWP tidak sah.(ex: 118573626262348)");
                    $(this).parent().find('.form-control').removeClass('is-valid');
                    $(this).parent().find('.form-control').addClass('is-invalid');
                    return apply_feedback_error(this);
                } else {
                    if (len >15){
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Kode NPWP terlalu Panjang");
                        return apply_feedback_error(this);
                    }
                }
            }
        });

        
        
      


        });

   //submit form validasi login
      $('#form_edit_profile_produsen').submit(function(e){
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
                   url: url + 'Produsen/edit_profile',
                   data: formData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                   success: function(response){
                      if(response.warning){
                        toastr.options.onHidden = function() { window.location.href = 'profile'; }
                        toastr.warning('Data profile gagal diedit.', 'Gagal!');
                      }
                      else{
                        toastr.options.onHidden = function() { window.location.href = 'profile'; }
                        toastr.success('Data profile berhasil dirubah.', 'Sukses!');
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

    function valid_kota(kota) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(kota);
    }
    //fungsi cek tanggal lahir
    //function valid_tanggal(tanggal){
        //var pola= new RegExp(/\b\d{1,2}[\/-]\d{1,2}[\/-]\d{4}\b/);
        //return pola.test(tanggal);
    //}
    //fungsi cek email
    function valid_email(email){
        var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
        return pola.test(email);
    }
    //fungsi cek phone 
    function valid_no_tlp(no_tlp){
        var pola = new RegExp(/^[0-9-+]+$/);
        return pola.test(no_tlp);
    }

    //fungsi cek username
    function valid_username(username) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(username);
    }
    //fungsi cek username
    function valid_login_username(login_username) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(login_username);
    }
     function valid_register_kode_npwp(register_kode_npwp){
        var pola = new RegExp(/^[0-9-+]+$/);
        return pola.test(register_kode_npwp);
    }
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