<!-- page content -->
   <div class="right_col" role="main">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_title">
                  <h2>User<small>Data Profil</small></h2>
                  <div class="clearfix"></div>
               </div>
                  <div class="x_content">
                     <div class="row">
                        <div class="card mb-3" style="max-width: 100%;">
                           <div class="row no-gutters">
                              <div class="col-md-6">
                                 <div class="card-body">
                                    <div class="x_content refresh">
                                       <form id="loginForm">
                                          <div class="form-group row" style="margin-left: 10px;">
                                             <label for="nama lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                             <div class="col-sm-9">
                                                <input type="text" class="form-control textbox" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="">
                                                   <div class="form-control-feedback"></div>
                                                   <span class="text-warning" ></span>
                                             </div>
                                          </div>
                                          <div class="form-group row" style="margin-left: 10px;">
                                             <label for="username" class="col-sm-3 col-form-label">Username</label>
                                             <div class="col-sm-9">
                                               <input type="text" class="form-control textbox" id="username" name="username" placeholder="Masukkan Username" value="">
                                               <span class="text-warning" ></span>
                                             </div>
                                          </div>
                                          <div class="form-group row" style="margin-left: 10px;">
                                             <label for="password" class="col-sm-3 col-form-label">Password</label>
                                             <div class="col-sm-9">
                                               <input type="password" class="form-control textboxp" id="password" name="password" placeholder="Masukkan Password">
                                               <span class="text-warning-password" ></span>
                                             </div>
                                          </div>
                                          <div class="form-group row" style="margin-left: 10px;">
                                             <label for="password" class="col-sm-3 col-form-label"> Konfirm Pas</label>
                                             <div class="col-sm-9">
                                               <input type="password" class="form-control textboxc" id="konfirm_password" name="konfirm_password" placeholder="Konfismasi Password">
                                               <span class="text-warning-cpassword" ></span>
                                             </div>
                                          </div>
                                          <div class="form-group row" style="margin-left: 10px;">
                                             <label for="jenis kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                             <div class="btn-group" data-toggle="buttons" style="margin-left: 10px; margin-bottom: 5px;">
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                   <input type="radio" name="jk" value="Laki-laki" data-parsley-multiple="gender"> &nbsp; Laki-laki &nbsp;
                                                </label>
                                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                   <input type="radio" name="jk" value="Perempuan" data-parsley-multiple="gender"> Perempuan
                                                </label>
                                                <span class="text-warning" ></span>
                                             </div>
                                          </div>
                                          <div class="form-group row" style="margin-left: 10px;">
                                             <label for="email" class="col-sm-3 col-form-label">E - mail</label>
                                             <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" value="">
                                             </div>
                                          </div>
                                          <div class="form-group row" style="margin-left: 10px;">
                                             <label for="email" class="col-sm-3 col-form-label">Foto</label>
                                             <div class="col-sm-9">
                                                <input type="file" class="form-control" id="foto" name="foto" value="">
                                             </div>
                                          </div>
                                          <div class="form-group row" style="margin-left: 10px;">
                                             <div class="col-sm-9">
                                               <input type="hidden" class="form-control" id="id_admin" name="id_admin" value="<?php echo $this->session->userdata('sess_id');?>">
                                             </div>
                                          </div> 
                                          <div class="ln_solid"></div>
                                          <div class="form-group">
                                             <div class="col-md-offset-8">
                                                <button class="btn btn-primary" type="button">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <?php 
                                    error_reporting(0);
                                    $id_admin=$this->session->userdata('sess_id');
                                    $query=$this->db->query("SELECT * FROM tb_admin WHERE id_admin='$id_admin'");
                                    $data=$query->row_array();
                                 ?>
                                 <img src="<?php echo base_url().'assets/Gambar/users/'.$data['foto']; ?>" class="card-img img-thumbnail" style="width: 230px; height: 260px; margin-left: 7px;">
                              </div>
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

   tampil_data_profil()

   function tampil_data_profil(){
   var id = document.getElementById("id_admin").value;
   
      $.ajax({
         type : "GET",
            url  : "<?php echo site_url('admin/Users/get_profil') ?>",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
               $.each(data,function(username, full_name, email, jenis_kelamin){
                  $('[name="username"]').val(data.username);
                  $('[name="nama_lengkap"]').val(data.full_name);
                  $('[name="email"]').val(data.email);
                  $('[name="jk"]').val(data.jenis_kelamin).prop('checked', true); 
               });
            }
      });
   }

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
      })
   })

   //mengecek text box username
   $('#username').blur(function(){
      var url = '<?php echo base_url(); ?>';
      var username = $(this).val();
      var id = document.getElementById("id_admin").value;
      var len = username.length;
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
              }else {
                  var valid = false;
                  var url = '<?php echo base_url(); ?>';
                  $.ajax({
                     url: url+"admin/Users/check_username",
                     type: "POST",
                     data : {id:id, username:username},
                     dataType: "text",
                     success: function(data){
                        if (data==0){ //pada controler auth fungsi check username, apabila email sudah ada di database makan akan mengembalikan nilai 0
                           $('#username').parent().find('.text-warning').text("");
                           $('#username').parent().find('.text-warning').text("Username sudah ada");
                           return apply_feedback_error('#username');
                        }
                     }
                  });
               }
            }
      } 
   });


   $('#password').blur(function(){
      var password = $(this).val();
      var len=password.length;
      if(! $(this).val()){
         $('.text-warning-password').hide();
         $(this).closest('div').removeClass('has-warning');
         $(this).closest('div').addClass('has-success');
      }
      else{
         if (len>0 && len<8) {
         $(this).parent().find('.text-warning-password').text("");
         $(this).parent().find('.text-warning-password').text("Password minimal 8 karakter");

         $(this).addClass('no-valid'); //menambah class no valid
         $(this).parent().find('.text-warning-password').show();
         $(this).closest('div').removeClass('has-success');
         $(this).closest('div').addClass('has-warning');
         } 
         else {
            if(len>35) {
               $(this).parent().find('.text-warning-password').text("");
               $(this).parent().find('.text-warning-password').text("Password maximal 35 karakter");
               $(this).addClass('no-valid'); //menambah class no valid
               $(this).parent().find('.text-warning-password').show();
               $(this).closest('div').removeClass('has-success');
               $(this).closest('div').addClass('has-warning');
            } 
         }  
      }
   });


   $('#konfirm_password').blur(function(){
      var pass = $("#password").val();
      var conf=$("#konfirm_password").val();
      var len=conf.length;

      if(pass === '' && conf === ''){
         $('.text-warning-cpassword').hide();
         $(this).closest('div').removeClass('has-warning');
         $(this).closest('div').addClass('has-success');
      }
      else if(pass === '' && conf !== ''){
         $(this).parent().find('.text-warning-cpassword').text("");
         $(this).parent().find('.text-warning-cpassword').text("Belum merubah password!");
         $(this).addClass('no-valid'); //menambah class no valid
         $(this).parent().find('.text-warning-cpassword').show();
         $(this).closest('div').removeClass('has-success');
         $(this).closest('div').addClass('has-warning');
      }
      else if (len>0 && pass!==conf) {
         $(this).parent().find('.text-warning-cpassword').text("");
         $(this).parent().find('.text-warning-cpassword').text("konfirmasi password tidak sama dengan password!");
         $(this).addClass('no-valid'); //menambah class no valid
         $(this).parent().find('.text-warning-cpassword').show();
         $(this).closest('div').removeClass('has-success');
         $(this).closest('div').addClass('has-warning');
      }
      else if (pass===conf) {
         $('.text-warning-cpassword').hide();
         $(this).closest('div').removeClass('has-warning');
         $(this).closest('div').addClass('has-success');
      }   
   });


   //submit form validasi login
   $('#loginForm').submit(function(e){
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
               url: url + 'admin/Users/update_data_profil',
               data: formData,
               processData:false,
               contentType:false,
               cache:false,
               async:false,
               success: function(data){
                  window.location = "profil";
               }
            });
         }
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
   function valid_username(register_username) {
      var pola= new RegExp(/^[a-z A-Z]+$/);
      return pola.test(register_username);
   }
</script>


