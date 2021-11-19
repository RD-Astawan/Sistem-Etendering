<!-- page content -->
   <div class="right_col" role="main">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_title">
                  <h5><b>Edit Data Admin</b></h5>
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
                                      <form id="form_edit_admin" enctype="multipart/form-data">
                                          <input type="hidden" name="id_admin" value="<?php echo $data_admin->id_admin ?>" class="form-control">                     
                                          <div class="form-group">
                                             <label>Nama Lengkap</label>
                                             <input type="text" name="nama_lengkap" value="<?php echo $data_admin->full_name ?>" class="form-control textbox" id="nama_lengkap">
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Email</label>
                                             <input type="text" name="email" value="<?php echo $data_admin->email ?>" class="form-control textbox" id="email" placeholder="Masukan Email">
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Username</label>
                                             <input type="text" name="username" value="<?php echo $data_admin->username ?>" class="form-control textbox" id="username">
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Password <small style="color: #fb5c33;">(boleh dikosongkan)</small></label>
                                             <input type="password" name="password" class="form-control" id="password" placeholder="Password boleh dikosongkan">
                                             <span class="text-warning" ></span>
                                          </div>

                                          <fieldset class="form-group">
                                            <div class="row">
                                              <label class="col-form-label col-sm-2 pt-0">Kelamin</label>
                                              <div class="col-sm-10">
                                                <div class="form-check">
                                                  <input class="form-check-input textbox" type="radio" name="kelamin" value="Laki-laki" <?php if($data_admin->jenis_kelamin=='Laki-laki') echo 'checked' ?>>
                                                  <label class="form-check-label" for="gridRadios1">
                                                    Laki - Laki
                                                  </label>
                                                </div>
                                                <div class="form-check">
                                                  <input class="form-check-input textbox" type="radio" name="kelamin"  value="Perempuan" <?php if($data_admin->jenis_kelamin=='Perempuan') echo 'checked' ?>>
                                                  <label class="form-check-label" for="gridRadios2">
                                                    Perempuan
                                                  </label>
                                                </div>
                                               
                                              </div>
                                            </div>
                                            <span class="text-warning" ></span>
                                          </fieldset>

                                          <div class="form-group">
                                             <label>Foto <small style="color: #fb5c33;">(boleh dikosongkan)</small></label>
                                             <input type="file" class="form-control" name="foto" id="foto">
                                             <span class="text-warning" ></span>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                  <?php 
                                      error_reporting(0);
                                      $id_admin   = $data_admin->id_admin;
                                      $query      = $this->db->query("SELECT * FROM tb_admin WHERE id_admin='$id_admin'");
                                      $data       = $query->row_array();
                                  ?>
                                  <img src="<?php echo base_url().'assets/Gambar/users/'.$data['foto']; ?>" class="card-img img-thumbnail" style="width: 320px; height: 372px; margin-left: 7px; margin-top: 28px;">
                              </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="ln_solid"></div>
                                 <div class="form-group" style="margin-left: 15px;">
                                    <button class="btn btn-primary" type="button" onclick="location.href='<?php echo base_url();?>page/view_admin'">Batal</button>
                                    <button type="submit" id="btn_update" class="btn btn-success">Simpan</button>
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

      

      //submit form validasi login
      $('#form_edit_admin').submit(function(e){
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
                   url: url + 'admin/Users/edit_data_admin',
                   data: formData,
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                   success: function(data){
                     toastr.options.onHidden = function() { window.location.href = 'http://localhost/TenderV2/page/view_admin'; }
                    toastr.success('Data admin berhasil dirubah.', 'Berhasil!');
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


