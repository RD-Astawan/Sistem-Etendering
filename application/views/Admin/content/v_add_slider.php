<!-- page content -->
<div class="right_col" role="main">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h5><b>Tambah Data Slider</b></h5>
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
                                    <form id="add_slider_form" enctype="multipart/form-data">                       
                                       <div class="form-group">
                                          <label>Keterangan 1</label>
                                          <input type="text" name="caption_1" class="form-control caption textbox" placeholder="Masukan Keterangan Slider 1">
                                          <span class="text-warning" ></span>
                                       </div>

                                       <div class="form-group">
                                          <label>Keterangan 2</label>
                                          <input type="text" name="caption_2" class="form-control caption textbox" placeholder="Masukan Keterangan Slider 2">
                                          <span class="text-warning" ></span>
                                       </div>

                                       <div class="form-group">
                                          <label>Keterangan 3</label>
                                          <input type="text" name="caption_3" class="form-control caption textbox" placeholder="Masukan Keterangan Slider 3">
                                          <span class="text-warning" ></span>
                                       </div>

                                       <div class="form-group">
                                          <label>Gambar</label>
                                          <input type="file" class="form-control textbox" name="file" id="file">
                                          <span class="text-warning" ></span>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="slider_image-preview" id="image_preview">
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
                                 <button class="btn btn-warning btn-sm" type="reset" onclick="location.href='<?php echo base_url();?>page/slider'" style="width: 70px;">Kembali</button>
                                 <button class="btn btn-primary btn-sm" type="reset" style="width: 70px;">Reset</button>
                                 <button type="submit" class="btn btn-success btn-sm" style="width: 70px;">Simpan</button>
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

   //mengecek text box username
   $('.caption').blur(function(){
      var caption = $(this).val();
      var len = caption.length;
         if(len>0){ 
            if(!valid_caption(caption)){ 
               $(this).parent().find('.text-warning').text("");
               $(this).parent().find('.text-warning').text("Keterangan Tidak Valid (gunakan hurup!)");
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

   

   //submit form validasi login
   $('#add_slider_form').submit(function(e){
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
            var formData = new FormData($("#add_slider_form")[0]);
               $.ajax({
                  type: 'POST',
                  url: url + 'admin/Slider/add_slider',
                  data: formData,
                  mimeType: "multipart/form-data",
                  processData:false,
                  contentType:false,
                  cache:false,
                  async:false,
                     success: function(data){
                       toastr.options.onHidden = function() { window.location.href = 'slider'; }
                       toastr.success('Data sliders berhasil disimpan.', 'Berhasil!');
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
                  $('#add_slider_form + img').remove();
                  preventDefaultText.style.display = "none";
                  $('#ha').after('<img src="'+e.target.result+'" width="350" height="200"/>');
               };
               reader.readAsDataURL(input.files[0]);
         }
   }
   $("#file").change(function () {
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
   function valid_caption(caption) {
      var pola= new RegExp(/^[a-z A-Z]+$/);
      return pola.test(caption);
   }
</script>


