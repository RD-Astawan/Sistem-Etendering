<header>
   <style type="text/css">
      .block-content {
         transition: opacity .2s ease-out;
         margin: 0 auto;
         padding: 18px 18px 1px;
         width: 100%;
         overflow-x: visible;
      }
      .block {
         margin-bottom: 24px;
         background-color: #F5F5F5;
         box-shadow: 0 1px rgba(0, 0, 0, 0.03);
      }
      .block-header {
         display: -ms-flexbox;
         display: flex;
         -ms-flex-direction: row;
         flex-direction: row;
         -ms-flex-pack: justify;
         justify-content: space-between;
         -ms-flex-align: center;
         align-items: center;
         padding: 14px 18px;
         transition: opacity .2s ease-out;
         height: 40px;
         color: #696969;
      }
      .block-header.block-header-rtl {
         -ms-flex-direction: row-reverse;
         flex-direction: row-reverse;
      }
      .block-header.block-header-rtl .block-title {
         text-align: right;
      }
      .block-header.block-header-rtl .block-options {
         padding-right: 10px;
         padding-left: 0;
      }
      .block-header-default {
         background-color: #E6E6FA;
      }

   </style>
</header>
<!-- page content -->
<div class="right_col" role="main">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <!-- Main Container -->
         <div class="x_panel">
            <div class="x_title">
               <h4><b>EDIT DATA POST</b></h4>
               <div class="clearfix"></div>
            </div>
               <div class="x_content">
                  <form id="edit_post_form" method="post" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-md-8">
                           <div class="block">
                              <div class="block-header block-header-default">
                                 <h5 class="block-title">Edit Data Post</h5>
                              </div>
                              <div class="block-content">
                                 <div class="form-group">
                                    <input type="text" name="post_judul" id="post_judul" class="form-control textbox" placeholder="Post Title" value="<?php echo $dataPost->post_judul ?>">
                                    <span class="text-warning" ></span>
                                 </div>
                                 <div class="form-group">
                                    <textarea name="post_isi" id="ckeditor"><?php echo $dataPost->post_isi ?></textarea>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="block">
                              <div class="block-header block-header-default">
                                 <h5 class="block-title">Publish</h5>
                              </div>
                              <div class="block-content">
                                 <div class="form-group">
                                    <div class="post_image-preview" id="post_image_preview">
                                       <div class="ha" id="ha">
                                          <span class="post_image-preview_default-text">Image Preview</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <input type="file" name="post_file" id="post_file" class="form-control">
                                 </div>
                                 <div class="form-group">
                                    <input type="hidden" name="post_author" class="form-control" value="<?php echo $this->session->userdata('ses_nama');?>">
                                 </div>
                                 <div class="form-group">
                                    <input type="hidden" name="post_id" class="form-control" value="<?php echo $dataPost->post_id ?>">
                                 </div>
                              </div>
                                 <div class="block-content block-content-full block-content-md bg-body-light">
                                    <button type="submit" class="btn btn-warning btn-square btn-block btn-sm">Kembali</button>
                                    <button type="reset" class="btn btn-success btn-square btn-block btn-sm">Reset</button>
                                    <button type="submit" class="btn btn-primary btn-square btn-block btn-sm">Terbitkan</button>
                                 </div>
                           </div> 
                        </div> 
                     </div>
                  </form>      
               </div>
                 
         </div>
         <!-- END Page Content -->
      </div>
   </div>
</div>
           
<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
   <script type="text/javascript">
      $(document).ready(function(){
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

            $('#post_judul').blur(function(){
               var caption = $(this).val();
               var len = caption.length;
                  if(len>0){ 
                     if(!valid_judul(caption)){ 
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Keterangan Tidak Valid (gunakan hurup!)");
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        return apply_feedback_error(this);
                     } else {
                        if (len>40){ 
                           $(this).parent().find('.text-warning').text("");
                           $(this).parent().find('.text-warning').text("Maximal karakter yang bisa digunakan 40");
                           $(this).parent().find('.form-control').removeClass('is-valid');
                           $(this).parent().find('.form-control').addClass('is-invalid');
                           return apply_feedback_error(this);
                        } 
                     }
                  } 
            });

            //Preview Gambar
            function filePreview(input) {
               const previewContainer = document.getElementById("post_image_preview");
               const preventDefaultText = previewContainer.querySelector(".post_image-preview_default-text");
                  if (input.files && input.files[0]) {
                     var reader = new FileReader();
                        reader.onload = function (e) {
                           $('#add_post_form + img').remove();
                           preventDefaultText.style.display = "none";
                           $('#ha').after('<img src="'+e.target.result+'" width="295" height="200"/>');
                        };
                        reader.readAsDataURL(input.files[0]);
                  }
            }
            $("#post_file").change(function () {
               filePreview(this);
            });

            //submit form validasi login
            $('#edit_post_form').submit(function(e){
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
                  var formData = new FormData($("#edit_post_form")[0]);
                  formData.append('post_isi', CKEDITOR.instances['ckeditor'].getData());
                     $.ajax({
                        type: 'POST',
                        url: url + 'admin/Post/edit_post',
                        data: formData,
                        mimeType: "multipart/form-data",
                        processData:false,
                        contentType:false,
                        cache:false,
                        async:false,
                           success: function(data){
                           toastr.options.onHidden = function() { window.location.href = 'http://localhost/TenderV2/page/view_post'; }
                             toastr.success('Data post berhasil dirubah.', 'Berhasil!');
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
      function valid_judul(caption) {
         var pola= new RegExp(/^[a-z A-Z]+$/);
         return pola.test(caption);
      }             
</script>
<script type="text/javascript">
   $(function () {
   CKEDITOR.replace( 'ckeditor' ,{
      height: '250px',
      extraPlugins : 'syntaxhighlight',        
      toolbar: [
         ['Source'] ,
         ['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','Image','-','Blockquote','-','Styles','-','Format','-','FontSize'] 
         ]              
   });
});
</script>

  
