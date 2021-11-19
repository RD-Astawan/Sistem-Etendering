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
               <h3 class="panel-title">Daftar Tender</h3>
               <hr/>
            </div>
               <div class="panel-body">
                  <div class="row">
                     <div class="col-md-7">
                        <form id="add_tender" style="margin-left: 30px;">
                           <div class="form-group">
                              <label style="font-size: 15px !important;">Judul</label>
                              <input type="text" class="form-control textbox" name="tender_judul" id="tender_judul" placeholder="Masukan judul tender">
                              <span class="text-warning" ></span>
                           </div>
                           <div class="form-group">
                              <label style="font-size: 15px !important;">Deskripsi Tender</label>
                              <textarea class="form-control textbox" name="tender_deskripsi" id="tender_deskripsi" rows="4"></textarea>
                              <span class="text-warning" ></span>
                           </div>
                           <div class="form-group">
                              <label style="font-size: 15px !important;">Tanggal Tutup</label>
                              <input type="date" class="form-control textbox cek_tanggal" name="tender_tanggal_tutup" id="tender_tanggal_tutup">
                              <span class="text-warning" ></span>
                           </div>
                           <div class="form-group">
                              <label style="font-size: 15px !important;">Deadline Pengerjaan</label>
                              <input type="date" class="form-control textbox cek_tanggal" name="tender_deadline" id="tender_deadline">
                              <span class="text-warning" ></span>
                           </div>
                           <div class="custom-file mt-2" style="width: 433px;">
                              <label class="custom-file-label" for="customFile" style="font-size: 15px !important;">Masukan Gambar</label>
                              <input type="file" name="tender_gambar" class="form-control-file">
                           </div>

                           <br /><hr />
                           <button type="reset" class="btn btn-danger ml-5 mt-5" style="width: 140px; color: #fff;">Reset</button>
                           <button type="submit" class="btn btn-primary ml-1 mt-5">Simpan Tender</button>
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
      $('#tender_deadline').attr('disabled', true);
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

      $('#tender_judul').blur(function(){
         var judul = $(this).val();
         var len = judul.length;
         if(len>150){ 
            $(this).parent().find('.text-warning').text("");
            $(this).parent().find('.text-warning').text("Maximal karakter 150");
            $(this).parent().find('.form-control').removeClass('is-valid');
            $(this).parent().find('.form-control').addClass('is-invalid');
            return apply_feedback_error(this);
         } 
      });

      $('#tender_deskripsi').blur(function(){
         var deskripsi = $(this).val();
         var len = deskripsi.length;
         if(len>500){ 
            $(this).parent().find('.text-warning').text("");
            $(this).parent().find('.text-warning').text("Maximal karakter 500");
            $(this).parent().find('.form-control').removeClass('is-valid');
            $(this).parent().find('.form-control').addClass('is-invalid');
            return apply_feedback_error(this);
         } 
      });

      $('.cek_tanggal').blur(function(){
         var date_deadline = document.getElementById('tender_deadline').value;
         var date_tutup = document.getElementById('tender_tanggal_tutup').value;
         var deadlineDate = new Date(date_deadline);
         var sekarangDate = new Date();
         var tutupDate = new Date(date_tutup);
         if(tutupDate.setHours(0,0,0,0) <= sekarangDate.setHours(0,0,0,0)){
            $('#tender_tanggal_tutup').parent().find('.text-warning').text("");
            $('#tender_tanggal_tutup').parent().find('.text-warning').text("Tanggal tutup tidak valid (tgl tutup > tgl sekarang!)");
            $('#tender_deadline').attr('disabled', true);
               document.getElementById("tender_deadline").value = "";
               $('#tender_deadline').closest('div').removeClass('has-success');
               $('#tender_deadline').closest('div').removeClass('has-warning');
               $('#tender_deadline').parent().find('.text-warning').hide();
               return apply_feedback_error('#tender_tanggal_tutup');
            }
            else if(deadlineDate.setHours(0,0,0,0) <= tutupDate.setHours(0,0,0,0)){ 
               $('#tender_deadline').parent().find('.text-warning').text("");
               $('#tender_deadline').parent().find('.text-warning').text("Deadline tidak valid (deadline > tanggal tutup!)");
               return apply_feedback_error('#tender_deadline');
            }
            else{
               $('#tender_deadline').attr('disabled', false);
            }
      });

      //submit form validasi login
      $('#add_tender').submit(function(e){
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
         var formData = new FormData($("#add_tender")[0]);
            $.ajax({
               type: 'POST',
               url: url + 'kon_page/save_tender',
               data: formData,
               dataType: 'json',
               processData:false,
               contentType:false,
               cache:false,
               async:false,
               success: function(response){
                  toastr.options.onHidden = function() { window.location.href = 'list_tenderx'; }
                  toastr.success('Data tender berhasil diupload!.', 'Sukses!');
               }
            }); 
         }
      });
   });

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
</body>
</html>
