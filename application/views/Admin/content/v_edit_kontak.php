<!-- page content -->
<div class="right_col" role="main">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h5><b>Edit Data Kontak</b></h5>
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
                                    <form id="form_edit_kontak" enctype="multipart/form-data" style="margin-left: 40px !important;">
                                       <input type="hidden" name="id" value="<?php echo $data_kontak->id_kontak ?>" class="form-control">                     
                                       <div class="form-group">
                                          <label>Email</label>
                                          <input type="text" name="email" value="<?php echo $data_kontak->kontak_email ?>" class="form-control textbox" id="email">
                                          <span class="text-warning" ></span>
                                       </div>

                                       <div class="form-group">
                                          <label>No Telepon</label>
                                          <input type="text" name="no_tlp" value="<?php echo $data_kontak->kontak_tlp ?>" class="form-control textbox" id="no_tlp">
                                          <span class="text-warning" ></span>
                                       </div>

                                       <div class="form-group">
                                          <label>Alamat</label>
                                          <input type="text" name="alamat" value="<?php echo $data_kontak->kontak_alamat ?>" class="form-control textbox" id="alamat">
                                          <span class="text-warning" ></span>
                                       </div>

                                       <div class="form-group">
                                         <label>Deskripsi</label>
                                         <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"><?php echo $data_kontak->kontak_des ?></textarea>
                                         <span class="text-warning" ></span>
                                       </div>

                                        <div class="row">
                                         <div class="col-md-12">
                                             <div class="ln_solid"></div>
                                             <div class="form-group">
                                                <button class="btn btn-primary btn-sm" type="button" onclick="location.href='<?php echo base_url();?>page/view_admin'" style="width: 60px !important;">Batal</button>
                                                <button type="submit" id="btn_update" class="btn btn-success btn-sm" style="width: 60px !important;">Simpan</button>
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

   $('textarea').each(function(){
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
               }
           }
       } 
   });

   //mengecek nomer hp
   $('#no_tlp').blur(function(){
      var no_tlp=$(this).val();
      var len=no_tlp.length;
      if (len>0 && len<=10 && valid_no_tlp(no_tlp)){
         $(this).parent().find('.text-warning').text("");
         $(this).parent().find('.text-warning').text("nomer HP terlalu pendek");
         $(this).parent().find('.form-control').removeClass('is-valid');
         $(this).parent().find('.form-control').addClass('is-invalid');
         return apply_feedback_error(this);
      } else {
         if(len>0 && !valid_no_tlp(no_tlp)){
            $(this).parent().find('.text-warning').text("");
            $(this).parent().find('.text-warning').text("format nomer hp tidak sah.(ex: +6285736262623)");
            $(this).parent().find('.form-control').removeClass('is-valid');
            $(this).parent().find('.form-control').addClass('is-invalid');
            return apply_feedback_error(this);
         }else {
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

   //mengecek text box alamat
   $('#alamat').blur(function(){
      var alamat = $(this).val();
      var len = alamat.length;
         if(len>0){ 
           if (len>50){ 
              $(this).parent().find('.text-warning').text("");
              $(this).parent().find('.text-warning').text("Maximal karakter 50");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error(this);
           } 
         }
   });

   //mengecek text box deskripsi
   $('#deskripsi').blur(function(){
      var deskripsi = $(this).val();
      var len = deskripsi.length;
         if(len>0){ 
           if (len>200){ 
              $(this).parent().find('.text-warning').text("");
              $(this).parent().find('.text-warning').text("Maximal karakter 200");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error(this);
           } 
         }
   });

   //submit form validasi login
   $('#form_edit_kontak').submit(function(e){
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
                url: url + 'admin/Inbox/edit_data_kontak',
                data: formData,
                 processData:false,
                 contentType:false,
                 cache:false,
                 async:false,
                success: function(data){
                  toastr.options.onHidden = function() { window.location.href = 'edit_kontak'; }
                 toastr.success('Data kontak berhasil dirubah.', 'Berhasil!');
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
   //fungsi cek email
   function valid_email(email){
      var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
      return pola.test(email);
   }
   function valid_no_tlp(no_tlp){
      var pola = new RegExp(/^[0-9-+]+$/);
      return pola.test(no_tlp);
   }

</script>


