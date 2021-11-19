<style type="text/css">
   body {
    background-color: #f3f6f8;
    margin-top: 20px;
  }
  
  .thumb-lg {
    height: 100px;
    width: 100px;
  }
  
  .profile-user-box {
    position: relative;
    border-radius: 5px;
  }
  
  .bg-custom {
    /*background-color: #02c0ce !important; */
    background-image: url(<?php echo base_url('assets/Gambar/gambaran/profile-bg.jpg'); ?>);
  }
  
  .profile-user-box {
    position: relative;
    border-radius: 5px;
  }
  
  .card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
  }
  
  .inbox-widget .inbox-item img {
    width: 40px;
  }
  
  .inbox-widget .inbox-item {
    border-bottom: 1px solid #f3f6f8;
    overflow: hidden;
    padding: 10px 0;
    position: relative;
  }
  
  .inbox-widget .inbox-item .inbox-item-img {
    display: block;
    float: left;
    margin-right: 15px;
    width: 40px;
  }
  
  .inbox-widget .inbox-item img {
    width: 40px;
  }
  
  .inbox-widget .inbox-item .inbox-item-author {
    color: #313a46;
    display: block;
    margin: 0;
  }
  
  .inbox-widget .inbox-item .inbox-item-text {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0;
  }
  
  .inbox-widget .inbox-item .inbox-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 12px;
  }
  
  .comment-list .comment-box-item {
    position: relative;
  }
  
  .comment-list .comment-box-item .commnet-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 2px;
  }
  
  .comment-list .comment-box-item .commnet-item-msg {
    color: #313a46;
    display: block;
    margin: 10px 0;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
  }
  
  .comment-list .comment-box-item .commnet-item-user {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0;
  }
  
  .comment-list a + a {
    margin-top: 15px;
    display: block;
  }
  
  .ribbon-box .ribbon-primary {
    background: #2d7bf4;
  }
  
  .ribbon-box .ribbon {
    position: relative;
    float: left;
    clear: both;
    padding: 5px 12px 5px 12px;
    margin-left: -30px;
    margin-bottom: 15px;
    font-family: Rubik, sans-serif;
    -webkit-box-shadow: 2px 5px 10px rgba(49, 58, 70, 0.15);
    -o-box-shadow: 2px 5px 10px rgba(49, 58, 70, 0.15);
    box-shadow: 2px 5px 10px rgba(49, 58, 70, 0.15);
    color: #fff;
    font-size: 13px;
  }
  
  .text-custom {
    color: #02c0ce !important;
  }
  
  .badge-custom {
    background: #02c0ce;
    color: #fff;
  }
  
  .badge {
    font-family: Rubik, sans-serif;
    -webkit-box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0 0 rgba(0, 0, 0, 0.02);
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0 0 rgba(0, 0, 0, 0.02);
    padding: 0.35em 0.5em;
    font-weight: 500;
  }
  
  .text-muted {
    color: #98a6ad !important;
  }
  
  .font-13 {
    font-size: 13px !important;
  }











  
  /*basic settings */

a:focus {
  outline: none !important;
  outline-offset: none !important;
}

body {
  background: #f5f6f5;
  color: #333;
}

/* helper classses */

.margin-top-20 {
  margin-top: 20px;
}

.margin-bottom-20 {
  margin-top: 20px;
}

.no-margin {
  margin: 0px;
}

/* box component */

.box {
  border-color: #e6e6e6;
  background: #FFF;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
  padding: 10px;
  margin-bottom: 40px;
}

.box-center {
  margin: 20px auto;
}

/* input [type = file]
----------------------------------------------- */

input[type=file] {
  display: block !important;
  right: 1px;
  top: 1px;
  height: 34px;
  opacity: 0;
  width: 100%;
  background: none;
  position: absolute;
  overflow: hidden;
  z-index: 2;
}

 .control-fileupload::before {
    /* inherit from boostrap btn styles */
    padding: 4px 12px;
    margin-bottom: 0;
    font-size: 14px;
    line-height: 20px;
    color: #333333;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;
    cursor: pointer;
    background-color: #f5f5f5;
    background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
    background-repeat: repeat-x;
    border: 1px solid #cccccc;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    border-bottom-color: #b3b3b3;
    border-radius: 4px;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    transition: color 0.2s ease;

    /* add more custom styles*/
    content: 'Browse';
    display: block;
    position: absolute;
    z-index: 1;
    top: 2px;
    right: 2px;
    line-height: 20px;
    text-align: center;
  }

.control-fileupload {
  display: block;
  border: 1px solid #d6d7d6;
  background: #FFF;
  border-radius: 4px;
  width: 100%;
  height: 33px;
  line-height: 30px;
  padding: 0px 10px 2px 10px;
  overflow: hidden;
  position: relative;
  
  &:before, input, label {
    cursor: pointer !important;
  }
  /* File upload button */
  &:before {
    /* inherit from boostrap btn styles */
    padding: 4px 12px;
    margin-bottom: 0;
    font-size: 14px;
    line-height: 20px;
    color: #333333;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;
    cursor: pointer;
    background-color: #f5f5f5;
    background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
    background-repeat: repeat-x;
    border: 1px solid #cccccc;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    border-bottom-color: #b3b3b3;
    border-radius: 4px;
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    transition: color 0.2s ease;

    /* add more custom styles*/
    content: 'Browse';
    display: block;
    position: absolute;
    z-index: 1;
    top: 2px;
    right: 2px;
    line-height: 20px;
    text-align: center;
  }
  &:hover, &:focus {
    &:before {
      color: #333333;
      background-color: #e6e6e6;
      color: #333333;
      text-decoration: none;
      background-position: 0 -15px;
      transition: background-position 0.2s ease-out;
    }
  }
  
 
}
label {
    line-height: 30px;
    color: #9999;
    font-size: 13px;
    font-weight: normal;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    position: relative;
    z-index: 1;
    margin-right: 90px;
    margin-bottom: 0px;
    cursor: text;
  }
 
 .text-warning{
   font-size: 13px;
 }


</style>
<div class="loader_bg">
   <div class="loader"></div>
</div>
<!-- MAIN -->
<div class="main">
   <!-- MAIN CONTENT -->
   <div class="main-content">
      <div class="container-fluid">
         <!-- OVERVIEW -->
         <div class="panel panel-headline" style="background-color: #fff;">
          <form id="form_edit_profile">
          <div class="row">
            <div class="col-sm-12">
              
                <div class="panel-heading">
                  <h3 class="panel-title">Edit Data Profile</h3>
                </div>
                <div class="panel-body">
                  <div class="col-sm-6">
                  <div class="input-group" id="form_1">
                     <input class="form-control" name="id_konsumen" type="hidden" value="<?php echo $profile->id_konsumen; ?>">
                  </div>
                  <div class="input-group" id="form_1">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control textbox" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" type="text" value="<?php echo $profile->nama; ?>">
                     
                  </div>
                  <span id="nama_lengkap_" class="text-warning"></span>
                  <br>
                   <div class="input-group" id="form_2">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input class="form-control textbox" name="alamat" id="alamat" placeholder="Alamat" type="text" value="<?php echo $profile->alamat; ?>">
                  </div>
                  <span id="alamat_" class="text-warning"></span>
                  <br>
                   <div class="input-group" id="form_3">
                    <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                    <input class="form-control textbox" name="no_tlp" id="no_tlp" placeholder="No Telepon" type="text" value="<?php echo $profile->no_tlp; ?>">
                  </div><span id="no_tlp_" class="text-warning"></span>
                  <br>
                   <div class="input-group" id="form_4">
                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                    <input class="form-control textbox" name="kota" id="kota" placeholder="Kota" type="text" value="<?php echo $profile->kota; ?>">
                  </div>
                  <span id="kota_" class="text-warning"></span>
                  <br>
                   <div class="input-group" id="form_5">
                    <span class="input-group-addon"><i class="fa fa-envelope-square"></i></span>
                    <input class="form-control textbox" name="email" id="email" placeholder="Email" type="text" value="<?php echo $profile->email; ?>">
                  </div>
                  <span id="email_" class="text-warning"></span>
                  <br>
                   <div class="input-group" id="form_6">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input class="form-control textbox" name="username" id="username" placeholder="Username" type="text" value="<?php echo $profile->username; ?>">
                  </div>
                  <span id="username_" class="text-warning"></span>
                  <!--file input example -->
       
                  <br>
                </div>
                <div class="col-sm-6">
                
        <!--image file upoad sample-->
        <div class="box">
          <!-- fileuploader view component -->
          <div class="image-preview" id="image_preview">
              <!-- <img src="" alt="Image Preview" class="image-preview_image">
              <span class="image-preview_default-text">Image Priview</span> -->
                 <div class="ha" id="ha">
                    <span class="image-preview_default-text">Image Priview</span>
                 </div>
              </div>
          <!-- ./fileuploader view component -->
          <div class="row">
            <div class="col-sm-9">
              <span class="control-fileupload">
                <label for="file1" class="text-left">Klik untuk Memilih berkas</label>
                <input type="file" id="file" name="file_foto">
              </span>
            </div>
            <div class="col-sm-3">  
              <button type="submit" class="btn btn-primary btn-block">
                <i class="icon-upload icon-white"></i> Upload
              </button>
            </div>
          </div>
        </div>
       





            </div>
            </div>
          </div>
        </div>
        </form>
    </div>
    <!-- container -->
       </div>
   </div>
   <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

<script type="text/javascript">
   var nama_lengkap_e   = $('#nama_lengkap').val();
   var alamat_e         = $('#alamat').val();
   var no_tlp_e         = $('#no_tlp').val();
   var kota_e           = $('#kota').val();
   var email_e          = $('#email').val();
   // $(document).ready(function() {
   //    $('#example').DataTable( {
   //       "paging":   true,
   //       "ordering": false,
   //       "searching": true,
   //       "bLengthChange": false,
   //       "info":     false
   //    });
   // });
  $(function() {
  $('input[type=file]').change(function(){
    var t = $(this).val();
    var labelText = 'File : ' + t.substr(12, t.length);
    $(this).prev('label').text(labelText);
    $(".text-left").css("color","black");
  })
});

$(document).ready(function(){
 //Preview Gambar
   var nama_lengkap = $('#nama_lengkap').val();
   var alamat = $('#alamat').val();
   var no_tlp = $('#no_tlp').val();
   var kota = $('#kota').val();
   var email = $('#email').val();

   function filePreview(input) {
      const previewContainer = document.getElementById("image_preview");
      const preventDefaultText = previewContainer.querySelector(".image-preview_default-text");
         if (input.files && input.files[0]) {
            var reader = new FileReader();
               reader.onload = function (e) {
                  $('#ha + img').remove();
                  preventDefaultText.style.display = "none";
                  $('#ha').after('<img src="'+e.target.result+'" width="215" height="236"/>');
               };
               reader.readAsDataURL(input.files[0]);
         }
   }
   $("#file").change(function () {
       filePreview(this);
   });

   $('input').each(function(){ 
      $(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
          if (! $(this).val()){ //this mengacu pada text box yang sedang fokus
            $(this).parent().find('.text-warning').removeClass('is-valid');
            $(this).parent().find('.text-warning').addClass('is-invalid');
              //  if(! $('#nama_lengkap').val()){
              //     alert('nama');
              //  }
              //  if(! $('#alamat').val()){
              //     alert('alamat');
              //  }
              //  if(! $('#no_tlp').val()){
              //     alert('no tlp');
              //  }
              //  if(! $('#kota').val()){
              //     return get_error_text_kota(kota);
              //  }
              //  if(! $('#email').val()){
              //     return get_error_text_email(email);
              //  }
              // //return get_error_text(this); //function get_error_text ada di bawah
          } else {
              $(this).removeClass('no-valid'); 
              //$('#nama_lengkap_').hide();
              $(this).parent().find('.text-warning').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
              $(this).closest('div').removeClass('has-warning');
              $(this).closest('div').addClass('has-success');
              $(this).parent().find('.form-control').removeClass('is-invalid');
              $(this).parent().find('.form-control').addClass('is-valid');
          }
      });
  });

   $('#nama_lengkap').blur(function(){
      var nama= $(this).val();
      var len= nama.length;
      if(len>0){ //jika ada isinya
          if(!valid_nama(nama)){ //jika nama tidak valid
              $(this).parent().find('.text-warning').text("");
              $('#nama_lengkap_').text("Nama tidak valid! (Gunakan Hurup)");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error_nama(this);
          } else if(len>30){
              
                  $(this).parent().find('.text-warning').text("");
                  $(this).parent().find('.text-warning').text("Maximal karakter 30");
                  return apply_feedback_error_nama(this);
          }
          else{
            $('#nama_lengkap_').hide();
          }
      }else{
         $('#nama_lengkap_').text("");
        $('#nama_lengkap_').text("Text box ini tidak boleh kosong"); 
        $('#form_1').removeClass('is-valid');
        $('#form_1').addClass('has-warning');
        $('#nama_lengkap_').show();
      }
  });
   $('#alamat').blur(function(){
      var alamat= $(this).val();
      var len= alamat.length;
      if(len>0){ //jika ada isinya
        if (len>30){ //jika karakter >30
            $(this).parent().find('.text-warning').text("");
            $('#alamat_').text("Maximal karakter 30");
            $(this).parent().find('.form-control').removeClass('is-valid');
            $(this).parent().find('.form-control').addClass('is-invalid');
            return apply_feedback_error_alamat(this);
        }
        else{
         $('#alamat_').hide();
        }
      }
      else{
         $('#alamat_').text("");
        $('#alamat_').text("Text box ini tidak boleh kosong"); 
        $('#form_2').removeClass('is-valid');
        $('#form_2').addClass('has-warning');
        $('#alamat_').show();
      }
  });

  $('#no_tlp').blur(function(){
      var no_tlp=$(this).val();
      var len=no_tlp.length;
      if(len<=0){
         $('#no_tlp_').text("");
        $('#no_tlp_').text("Text box ini tidak boleh kosong"); 
        $('#form_3').removeClass('is-valid');
        $('#form_3').addClass('has-warning');
        $('#no_tlp_').show();
      }
      else if(len>0 && len<=10 && valid_no_tlp(no_tlp)){
          $(this).parent().find('.text-warning').text("");
          $('#no_tlp_').text("Nomer HP terlalu pendek");
          $(this).parent().find('.form-control').removeClass('is-valid');
          $(this).parent().find('.form-control').addClass('is-invalid');
          return apply_feedback_error_no_tlp(this);
      }
      else if(len>=11 && len<=13 && valid_no_tlp(no_tlp)){
         $('#no_tlp_').hide();
      }
       else {
          if(len>0 && !valid_no_tlp(no_tlp)){
              $(this).parent().find('.text-warning').text("");
              $('#no_tlp_').text("Format nomer hp tidak sah.(ex: +6285736262623)");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error_no_tlp(this);
          } else {
              if (len >13){
                  $(this).parent().find('.form-control').removeClass('is-valid');
                  $(this).parent().find('.form-control').addClass('is-invalid');
                  $(this).parent().find('.text-warning').text("");
                  $('#no_tlp_').text("Nomer HP terlalu Panjang");
                  return apply_feedback_error_no_tlp(this);
              }
          }
      }
  });

  $('#kota').blur(function(){
      var kota= $(this).val();
      var len= kota.length;
      if(len>0){ //jika ada isinya
          if(!valid_kota(kota)){ //jika nama tidak valid
              $(this).parent().find('.text-warning').text("");
              $('#kota_').text("Nama kota tidak valid");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error_kota(this);
          }else if(valid_kota(kota) && len<=30){
            $('#kota_').hide();
          }
           else {
              if (len>30){ //jika karakter >30
                  $(this).parent().find('.text-warning').text("");
                  $('#kota_').text("Maximal karakter 30");
                  return apply_feedback_error_kota(this);
              }
          }
      }
      else{
            $('#kota_').text("");
            $('#kota_').text("Text box ini tidak boleh kosong"); 
            $('#kota').removeClass('is-valid');
            $('#kota').addClass('is-invalid');
            $('#form_4').addClass('has-warning');
            $('#kota_').show();
      }
  });
  $('#email').blur(function(){  
      var email=$(this).val();
      var len= email.length;
      if(len>0){ 
          if(!valid_email(email)){ 
              $('#email_').text("");
              $('#email_').text("E-mail Tidak Valid (ex: aaaa@yahoo.co.id)");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error_email(this);
          } 
          else {
              if (len>30){ 
                  $('#email_').text("");
                  $('#email_').text("Maximal Karakter 30");
                  return apply_feedback_error_email(this);
              } else {
                  var valid = false;
                  $.ajax({
                   url: "<?php echo base_url('kon_page/checkemail_konsumen')?>",
                   type: "POST",
                   data: "email="+email,
                   dataType: "text",
                   success: function(data){
                     if (data==0){ //pada file check email.php, apabila email sudah ada di database makan akan mengembalikan nilai 0
                        $('#email_').text("");
                        $('#email_').text("Email sudah ada");
                        $('#email').removeClass('is-valid');
                        $('#email').addClass('is-invalid');
                        $('#form_5').removeClass('has-success');
                        $('#form_5').addClass('has-warning');
                        $('#email').addClass('no-valid');
                        return apply_feedback_error_email(this);
                     }
                     if(data == 1 && valid_email(email) && len<=30){
                        $('#email_').hide();
                     }
                      }
                      });
                  }
          }
      }else{
         $('#email_').text("");
         $('#email_').text("Text box ini tidak boleh kosong"); 
         $('#email').removeClass('is-valid');
         $('#email').addClass('is-invalid');
         $('#form_5').addClass('has-warning');
         $('#email_').show();
      }
  });
  $('#username').blur(function(){
      var username= $(this).val();
      var len= username.length;
      if(len>0){ 
          if(!valid_username(username)){ 
              $('#username_').text("");
              $('#username_').text("Username Tidak Valid (gunakan hurup!)");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error_username(this);
          } else {
              if (len>30){ 
                  $('#username_').text("");
                  $('#username_').text("Maximal karakter 30");
                  $(this).parent().find('.form-control').removeClass('is-valid');
                  $(this).parent().find('.form-control').addClass('is-invalid');
                  return apply_feedback_error_username(this);
              } else {
                  var valid = false;
                  $.ajax({
                  url: "<?php echo base_url('kon_page/checkusername_konsumen')?>",
                  type: "POST",
                  data: "username="+username,
                  dataType: "text",
                  success: function(data){
                      if (data==0){
                        $('#username_').text("");
                        $('#username_').text("Username sudah ada");
                        $('#username').removeClass('is-valid');
                        $('#username').addClass('is-invalid');
                        $('#form_6').removeClass('has-success');
                        $('#form_6').addClass('has-warning');
                        $('#username').addClass('no-valid');
                          return apply_feedback_error_username(this);
                      }
                      if(data==1 && valid_username(username) && len<=30){
                        $('#username_').hide();
                      }
                  }       
                      });
                  }
          }
      }else{
         $('#username_').text("");
         $('#username_').text("Text box ini tidak boleh kosong"); 
         $('#username').removeClass('is-valid');
         $('#username').addClass('is-invalid');
         $('#form_6').addClass('has-warning');
         $('#username_').show();
      }
  });
  $('#form_edit_profile').submit(function(e){
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
                url: url + 'kon_page/edit_profiles',
                data: formData,
                 processData:false,
                 contentType:false,
                 cache:false,
                 async:false,
                success: function(response){
                   if(response.warning){
                     toastr.options.onHidden = function() { window.location.href = '<?php echo base_url('kon_page/profile');  ?>'; }
                     toastr.warning('Data profile gagal diedit.', 'Gagal!');
                   }
                   else{
                     toastr.options.onHidden = function() { window.location.href = '<?php echo base_url('kon_page/profile');  ?>'; }
                     toastr.success('Data profile berhasil dirubah.', 'Sukses!');
                   }
                }

              });   
      }
                   
   });
});

function valid_nama(nama) {
   var pola= new RegExp(/^[a-z A-Z]+$/);
   return pola.test(nama);
}
function valid_no_tlp(no_tlp){
     var pola = new RegExp(/^[0-9-+]+$/);
     return pola.test(no_tlp);
 }
 function valid_kota(kota) {
  var pola= new RegExp(/^[a-z A-Z]+$/);
  return pola.test(kota);
}
function valid_email(email){
  var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
  return pola.test(email);
}
function valid_username(username) {
  var pola= new RegExp(/^[a-z A-Z]+$/);
  return pola.test(username);
}
function apply_feedback_error_nama(textbox){
   $('#nama_lengkap_').show();
   $(textbox).addClass('no-valid'); //menambah class no valid
   $(textbox).closest('div').removeClass('has-success');
   $(textbox).closest('div').addClass('has-warning');
   $(textbox).parent().find('.form-control').removeClass('is-valid');
   $(textbox).parent().find('.form-control').addClass('is-invalid');
}
function apply_feedback_error_alamat(textbox){
   $('#alamat_').show();
   $(textbox).addClass('no-valid'); //menambah class no valid
   $(textbox).closest('div').removeClass('has-success');
   $(textbox).closest('div').addClass('has-warning');
   $(textbox).parent().find('.form-control').removeClass('is-valid');
   $(textbox).parent().find('.form-control').addClass('is-invalid');
}
function apply_feedback_error_no_tlp(textbox){
   $('#no_tlp_').show();
   $(textbox).addClass('no-valid'); //menambah class no valid
   $(textbox).closest('div').removeClass('has-success');
   $(textbox).closest('div').addClass('has-warning');
   $(textbox).parent().find('.form-control').removeClass('is-valid');
   $(textbox).parent().find('.form-control').addClass('is-invalid');
}
function apply_feedback_error_kota(textbox){
   $('#kota_').show();
   $(textbox).addClass('no-valid'); //menambah class no valid
   $(textbox).closest('div').removeClass('has-success');
   $(textbox).closest('div').addClass('has-warning');
   $(textbox).parent().find('.form-control').removeClass('is-valid');
   $(textbox).parent().find('.form-control').addClass('is-invalid');
}
function apply_feedback_error_email(textbox){
   $('#email_').show();
   $(textbox).addClass('no-valid'); //menambah class no valid
   $(textbox).closest('div').removeClass('has-success');
   $(textbox).closest('div').addClass('has-warning');
   $(textbox).parent().find('.form-control').removeClass('is-valid');
   $(textbox).parent().find('.form-control').addClass('is-invalid');
}
function apply_feedback_error_username(textbox){
   $('#username_').show();
   $(textbox).addClass('no-valid'); //menambah class no valid
   $(textbox).closest('div').removeClass('has-success');
   $(textbox).closest('div').addClass('has-warning');
   $(textbox).parent().find('.form-control').removeClass('is-valid');
   $(textbox).parent().find('.form-control').addClass('is-invalid');
}
function apply_feedback_error(textbox){
   $(textbox).addClass('no-valid'); //menambah class no valid
   $(textbox).closest('div').removeClass('has-success');
   $(textbox).closest('div').addClass('has-warning');
   $(textbox).parent().find('.form-control').removeClass('is-valid');
   $(textbox).parent().find('.form-control').addClass('is-invalid');
}
function get_error_text(textbox){
  $(textbox).parent().find('.text-warning').text("");
  $(textbox).parent().find('.text-warning').text("Text box ini tidak boleh kosong");
  $(this).parent().find('.form-control').removeClass('is-valid');
  $(this).parent().find('.form-control').addClass('is-invalid');
  return apply_feedback_error(textbox);
}
</script>