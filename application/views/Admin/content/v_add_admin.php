<!-- page content -->
   <div class="right_col" role="main">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_title">
                  <h5><b>Tambah Data Admin</b></h5>
                     <div class="clearfix"></div>
               </div>
                  <div class="x_content">
                     <p class="text-muted font-13 m-b-30"></p>
              
                     <div class="row">
                        <div class="card mb-3" style="max-width: 100%;">
                           <div class="row no-gutters">
                              <div class="col-md-6">
                                 <div class="card-body">
                                    <div class="x_content">
                                       <form id="add_admin_form" enctype="multipart/form-data">                       
                                          <div class="form-group">
                                             <label>Nama Lengkap</label>
                                             <input type="text" name="nama_lengkap" class="form-control textbox" id="nama_lengkap" placeholder="Masukan Nama Lengkap">
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Email</label>
                                             <input type="text" name="email" class="form-control textbox" id="email" placeholder="Masukan Email">
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Username</label>
                                             <input type="text" name="username" class="form-control textbox" id="username" placeholder="Masukan Username">
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Password</label>
                                             <input type="password" name="password" class="form-control textbox" id="password" placeholder="Masukan Password">
                                             <span class="text-warning" ></span>
                                          </div>

                                          <fieldset class="form-group">
                                            <div class="row">
                                              <label class="col-form-label col-sm-2 pt-0">Kelamin</label>
                                              <div class="col-sm-10">
                                                <div class="form-check">
                                                  <input class="form-check-input textbox" type="radio" name="kelamin"  value="Laki-laki">
                                                  <label class="form-check-label" for="gridRadios1">
                                                    Laki - Laki
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input textbox" type="radio" name="kelamin" value="Perempuan">
                                                  <label class="form-check-label" for="gridRadios2">
                                                    Perempuan
                                                  </label>
                                                </div>
                                               
                                              </div>
                                            </div>
                                            <span class="text-warning" ></span>
                                          </fieldset>

                                          <div class="form-group">
                                             <label>Foto</label>
                                             <input type="file" class="form-control textbox" name="foto" id="foto">
                                             <span class="text-warning" ></span>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="image-preview" id="image_preview">
                                 <!-- <img src="" alt="Image Preview" class="image-preview_image">
                                 <span class="image-preview_default-text">Image Priview</span> -->
                                 <div class="ha" id="ha">
                               
                                 <span class="image-preview_default-text">Image Priview</span>
                                 </div>
                                 </div>
                              </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="ln_solid"></div>
                                 <div class="form-group" style="margin-left: 15px;">
                                    <button class="btn btn-primary" type="button" onclick="location.href='<?php echo base_url();?>page/view_admin'">Cancel</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                 </div>
                              </div>
                           </div>
                           </form>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>


<script type="text/javascript">
$(document).ready(function(){
   //validation
   $('.text-warning').hide();
   $('input').each(function(){
      $(this).blur(function(){
         if(! $(this).val()){
            return get_error_text(this);
         }
         else{
            $(this).removeClass('no-valid'); 
            $(this).parent().find('.text-warning').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
            $(this).closest('div').removeClass('has-warning');
            $(this).closest('div').addClass('has-success');
            $(this).parent().find('.form-control').removeClass('is-invalid');
            $(this).parent().find('.form-control').addClass('is-valid');
         }
      });
   });

   //mengecek text box nama lengkap
   $('#nama_lengkap').blur(function(){
      var nama_lengkap = $(this).val();
      var len = nama_lengkap.length;
         if(len>0){ 
            if(!valid_nama_lengkap(nama_lengkap)){ 
               $(this).parent().find('.text-warning').text("");
               $(this).parent().find('.text-warning').text("Nama Lengkap Tidak Valid (gunakan hurup!)");
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
               } 
            }
         } 
   });

   //mengecek text box email
   $('#email').blur(function(){
       var email=$(this).val();
       var len= email.length;
       if(len>0){ 
           if(!valid_email(email)){ 
               $(this).parent().find('.text-warning').text("");
               $(this).parent().find('.text-warning').text("E-mail Tidak Valid (ex: aaaa@gmail.co.id)");
               return apply_feedback_error(this);
           } else {
               if (len>30){ 
                   $(this).parent().find('.text-warning').text("");
                   $(this).parent().find('.text-warning').text("Maximal Karakter 30");
                   return apply_feedback_error(this);
               } else {
                   var valid = false;
                   $.ajax({
                     url: "<?php echo base_url('admin/Users/checkemail_admin')?>",
                     type: "POST",
                     data: "email="+email,
                     dataType: "text",
                     success: function(data){
                       if (data==0){ //pada file check email.php, apabila email sudah ada di database makan akan mengembalikan nilai 0
                         $('#email').parent().find('.text-warning').text("");
                         $('#email').parent().find('.text-warning').text("Email Sudah Ada");
                         return apply_feedback_error('#email');
                       }
                     }
                   });
                 }
           }
       } 
   });

   //mengecek text box username
   $('#username').blur(function(){
      var username = $(this).val();
      var len = username.length;
         if(len>0){ 
           if (len>30){ 
              $(this).parent().find('.text-warning').text("");
              $(this).parent().find('.text-warning').text("Maximal karakter 30");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error(this);
           } 
         }
   });

   //mengecek text box username
   $('#password').blur(function(){
      var password = $(this).val();
      var len = password.length;
         if(len>0){ 
           if (len>30){ 
              $(this).parent().find('.text-warning').text("");
              $(this).parent().find('.text-warning').text("Maximal karakter 30");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error(this);
           } 
         }
   });

   //submit form validasi login
   $('#add_admin_form').submit(function(e){
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
            var formData = new FormData($("#add_admin_form")[0]);
               $.ajax({
                  type: 'POST',
                  url: url + 'admin/Users/add_admin',
                  data: formData,
                  mimeType: "multipart/form-data",
                  processData:false,
                  contentType:false,
                  cache:false,
                  async:false,
                     success: function(data){
                     toastr.options.onHidden = function() { window.location.href = 'view_admin'; }
                       toastr.success('Data admin berhasil disimpan.', 'Berhasil!');
                     }
               });    
         }
                   
   });


   //Preview Gambar
   function filePreview(input) {
      const previewContainer = document.getElementById("image_preview");
      const preventDefaultText = previewContainer.querySelector(".image-preview_default-text");
         if (input.files && input.files[0]) {
            var reader = new FileReader();
               reader.onload = function (e) {
                  $('#add_admin_form + img').remove();
                  preventDefaultText.style.display = "none";
                  $('#ha').after('<img src="'+e.target.result+'" width="320" height="372"/>');
               };
               reader.readAsDataURL(input.files[0]);
         }
   }
   $("#foto").change(function () {
       filePreview(this);
   });
});


function get_error_text(textbox){
   $(textbox).parent().find('.text-warning').text("");
   $(textbox).parent().find('.text-warning').text("Text box ini tidak boleh kosong");
   $(this).parent().find('.form-control').removeClass('is-valid');
   $(this).parent().find('.form-control').addClass('is-invalid');
   return apply_feedback_error(textbox);
}

function apply_feedback_error(textbox){
   $(textbox).addClass('no-valid'); //menambah class no valid
   $(textbox).parent().find('.text-warning').show();
   $(textbox).closest('div').removeClass('has-success');
   $(textbox).closest('div').addClass('has-warning');
   $(textbox).parent().find('.form-control').removeClass('is-valid');
   $(textbox).parent().find('.form-control').addClass('is-invalid');
}

//fungsi cek username
function valid_nama_lengkap(nama_lengkap) {
   var pola= new RegExp(/^[a-z A-Z]+$/);
   return pola.test(nama_lengkap);
}

//fungsi cek email
function valid_email(email){
   var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
   return pola.test(email);
}
</script>


