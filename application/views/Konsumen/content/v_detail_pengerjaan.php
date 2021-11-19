<style type="text/css">
   table.table-bordered{
    border-bottom:1px solid #C4D1D3;
    margin-top:20px;
    border-top: none;
    border-left: none;
    border-right: none;
  }
table.table-bordered > thead > tr > th{
    border-bottom: 1px solid #C4D1D3;
    border-top: none;
    border-left: none;
    border-right: none;
}
table.table-bordered > tbody > tr > td{
    border-bottom:1px solid #C4D1D3;
    border-top: none;
    border-left: none;
    border-right: none;
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
         <div class="panel panel-headline">
            <div class="panel-heading">
               <h3 class="panel-title"><b>Daftar Tender</b></h3>
               <hr/>
            </div>
               <div class="panel-body">
                  <div class="row">
                     <div class="col-md-7" id="panel1">
                        <table class="table table-bordered">
                           <tbody>
                              <tr>
                                 <td style="width: 20%;"><b>Judul Tender</b></td>
                                 <td style="width: 5%">: </td>
                                 <td style="width: 50%;"><?php echo $detail_pengerjaan->pengerjaan_judul;?></td>
                              </tr>
                              <tr>
                                 <td><b>Waktu Tender</b></td>
                                 <td>:</td>
                                 <td><?php ?><?php echo $detail_pengerjaan->id_produsen;?></td>
                              </tr>
                              <tr>
                                 <td><b>Batas Pengerjaan</b></td>
                                 <td>:</td>
                                 <td><?php echo $detail_pengerjaan->pengerjaan_deadline;?></td>
                              </tr>
                              <tr>
                                 <td><b>Deskripsi</b></td>
                                 <td>:</td>
                                 <td style="text-align: justify; text-justify: inter-word;"><?php echo $detail_pengerjaan->pengerjaan_deskripsi;?></td>
                              </tr>
                              <tr><?php
                                 if($progress_pengerjaan == ''){
                                    $progres_bar = 0;
                                 }
                                 else{
                                    $progres_bar = $progress_pengerjaan->progres_pengerjaan;
                                 }
                               ?></tr>
                           </tbody>
                        </table>
                        <label for="exampleFormControlTextarea1">Progres Tender</label>
                        <div class="progress">
                           <div id="progressbar" class="progress-bar" role="progressbar" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><?php echo $progres_bar ?>%</div>
                        </div>

                        <div id="panel2">
                           <input type="hidden" name="pengerjaan_status" id="pengerjaan_status" value="<?php echo $detail_pengerjaan->pengerjaan_status;?>">
                           <input type="hidden" name="progres_pengerjaan" id="progres_pengerjaan" value="<?php echo $progres_bar;?>">
                           <input type="hidden" name="id_produsen" id="id_produsen" value="<?php echo $detail_pengerjaan->id_produsen;?>">
                           <input type="hidden" name="id_tender" id="id_tender" value="<?php echo $detail_pengerjaan->id_tender;?>">
                           <input type="hidden" name="id_konsumen" id="id_konsumen" value="<?php echo $detail_pengerjaan->id_konsumen;?>">
                           <div class="form-group">
                              <label for="exampleFormControlTextarea1">Tambahkan Review</label>
                              <textarea class="form-control textbox" id="review" rows="4"></textarea>
                              <span class="text-warning" ></span>
                           </div>
                           <div class="rating_judul_a">
                              <label for="exampleFormControlTextarea1">Tambahkan Rating</label>
                           </div>
                           <div class="post-action">
                              <!-- Rating Bar -->
                              <input id="coba" value="" class="rating-loading ratingbar" data-min="0" data-max="5" data-step="1">
                           </div>
                        </div>
                     </div>
                  
                     <div class="col-md-5">
                        <img src="<?php  echo base_url().'assets/Gambar/tender/'.$detail_pengerjaan->pengerjaan_gambar; ?>" class="card-img" style="max-width: 100%;">
                     </div>
                  </div>
                  <hr />
                  <div class="row" style="margin-top: 15px;">
                     <button type="reset" class="btn btn-danger ml-5 mt-5" style="width: 140px; color: #fff;" onclick="location.href='<?php echo base_url();?>kon_page/list_pengerjaan_tender'">Kembali</button>
                     <button type="button" class="btn btn-primary mt-5" id="tbl-rating" onclick="switch_btn()">Berikan Rating Penilaian</button>
                  </div>
               </div>
         </div>
      </div>
   </div>
</div>
<!-- END MAIN -->

<script type="text/javascript">
   function switch_btn() {
      $('#panel2').toggle(1000);
   }
</script>
<script type="text/javascript">
   $(document).ready(function(){
      $('#panel2').hide();

      $('.ratingbar').rating({
            showCaption:false,
            showClear: false,
            size: 'sm',
            disabled: false
         });
      
      var newprogress = $("#progres_pengerjaan").val();
      $('#progressbar').attr('aria-valuenow', newprogress).css('width', newprogress+'%');
     
      // Initialize
      var status_perngerjaan  = $("#pengerjaan_status").val();
      var id_produsen         = $("#id_produsen").val();
      var id_tender           = $("#id_tender").val();
      var id_konsumen         = $('#id_konsumen').val();

      cek_rating();
      function cek_rating(){
         $.ajax({
            url: '<?= base_url() ?>kon_page/cek_status_rating',
            type: 'post',
            data: {id_produsen: id_produsen, id_konsumen: id_konsumen, id_tender: id_tender},
               success: function(data){
                  if (data==1){ 
                     $('#tbl-rating').attr('disabled', true);
                     $('#tbl-rating').html('Rating Sudah Diberikan');
                  }
               // toastr.options.onHidden = function() { $('#panel2').hide(1000); }
               //    toastr.success('Rating Penilaian Berhasil Ditambahkan!.', 'Sukses!');
               //    $('#tbl-rating').attr('disabled', true);
               //    $('#tbl-rating').html('Rating Penilaian Diberikan');
            }
         });
      }

     //  if(status_perngerjaan != 1 && status_perngerjaan != 2){
     //     $('.ratingbar').rating({
     //        showCaption:false,
     //        showClear: false,
     //        size: 'sm',
     //        disabled: false
     //     });
     //     $('.rating_judul_a').hide();
     //     $('.rating_judul_b').show();
     // }
     //  else{
     //     $('.ratingbar').rating({
     //        showCaption:false,
     //        showClear: false,
     //        size: 'xm',
     //        disabled: true
     //     });
     //     $('.rating_judul_a').show();
     //     $('.rating_judul_b').hide();
     //  }

      // Rating change
      $('.ratingbar').on('rating:change', function(event, value, caption) {
         // var id = this.id;
         // var splitid = id.split('_');
         // var postid = splitid[1];
         var review = document.getElementById("review").value;
         var valid=true;  
         if(document.getElementById("review").value == '')
         {
            valid = false;
            toastr.warning('Belum Memberikan Review!.', 'Warning!');
            get_error_text("#review");
         }
         // var valid=false;     
         // $(this).find('.textbox');
         //    if (! $(this).val()){
         //       get_error_text(this);
         //       valid = false;
         //       alert('coba');
         //    } 
         //    if ($(this).hasClass('no-valid')){
         //       valid = false;
         //       alert('coba');
         //    }
         if(valid){
         // console.log(event);
         // console.log(value);
         // console.log(caption);
         $.ajax({
            url: '<?= base_url() ?>kon_page/userRating',
            type: 'post',
            data: {rating: value, id_produsen: id_produsen, review: review, id_tender: id_tender},
               success: function(response){
               toastr.options.onHidden = function() { $('#panel2').hide(1000); }
                  toastr.success('Rating Penilaian Berhasil Ditambahkan!.', 'Sukses!');
                  $('#tbl-rating').attr('disabled', true);
                  $('#tbl-rating').html('Rating Sudah Diberikan');


            }
         });
         }
      });

      //validasi
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


