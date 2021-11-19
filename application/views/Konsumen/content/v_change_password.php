<div class="loader_bg">
   <div class="loader"></div>
</div>
 <!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <!-- OVERVIEW -->
      <div class="panel panel-headline">
        <div class="panel-heading">
          <h3 class="panel-title">Ganti Password</h3>
          <hr/>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <form id="change_password">
                   <div class="form-group row">
                  <div class="col-sm-8">
                    <input type="hidden" class="form-control" name="password_database" value="<?= $pass->password ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-8">
                    <input type="hidden" class="form-control" name="id_konsumen" value="<?= $pass->id_konsumen ?>">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Password Lama</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control textbox" name="password_lama">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Password Baru</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control textbox" name="password_baru" id="password_baru">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control textbox" name="password_confirm" id="password_confirm">
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

<script type="text/javascript">
      $(document).ready(function() {

         $('#example').DataTable( {
            "paging":   true,
            "ordering": false,
            "searching": true,
            "bLengthChange": false,
            "info":     false

         });
      });
   </script>

    



 <!-- <div class="loader_bg">
    <div class="loader"></div>
  </div> -->
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
                   url: url + 'Konsumen/save_new_pass',
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
                      toastr.options.onHidden = function() { window.location.href = 'change_passwrod'; }
                      toastr.warning('Data password tidak sama dengan di database.', 'Gagal!');
                    }
                    else if(response.error){
                      $('#change_password')[0].reset();
                      $('#change_password').parent().find('.form-control').removeClass('is-valid');
                      toastr.options.onHidden = function() { window.location.href = 'change_passwrod'; }
                      toastr.error('Password baru tidak boleh sama dengan password lama.', 'Gagal!');
                    }
                    else{
                      $('#change_password')[0].reset();
                      $('#change_password').parent().find('.form-control').removeClass('is-valid');
                      toastr.options.onHidden = function() { window.location.href = 'change_passwrod'; }
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
    

</body>

</html>
