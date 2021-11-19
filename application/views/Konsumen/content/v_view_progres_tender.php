<style type="text/css">
body {
   font-family: 'Raleway', sans-serif;
   /*background-color: #8186a3;*/
}
.contenedor {
   height: 100%;
   padding: 0 0 5% 0;
}
h1 {
   color: #FCFBFA;
}
.container_foto {
   background-color: rgba(57, 62, 93, 0.7);
   padding: 0;
   overflow: hidden;
   max-width: 350px;
   margin: 5px;
   margin-top: -5px;
   margin-bottom: 15px;
}
.container_foto article {
   padding: 10%;
   position: absolute;
   bottom: 0;
   z-index: 1;
   -webkit-transition: all 0.5s ease;
   -moz-transition: all 0.5s ease;
   -o-transition: all 0.5s ease;
   -ms-transition: all 0.5s ease;
   transition: all 0.5s ease;
}
.container_foto h4 {
   color: #fff;
   font-weight: 700;
   font-size: 15px;
   border-bottom: #fff solid 1px;
}
.container_foto h5 {
   font-weight: 300;
   color: #fff;
   font-size: 10px;
}
.container_foto img {
   width: 100%;
   top: 0;
   left: 0;
   opacity: 0.6;
   -webkit-transition: all 4s ease;
   -moz-transition: all 4s ease;
   -o-transition: all 4s ease;
   -ms-transition: all 4s ease;
   transition: all 4s ease;
}
.ver_mas {
   background-color: #FEB66C;
   position: absolute;
   width: 100%;
   height: 70px;
   bottom: 0;
   z-index: 1;
   opacity: 0;
   transform: translate(0px, 70px);
   -webkit-transform: translate(0px, 70px);
   -moz-transform: translate(0px, 70px);
   -o-transform: translate(0px, 70px);
   -ms-transform: translate(0px, 70px);
   -webkit-transition: all 0.2s ease-in-out;
   -moz-transition: all 0.2s ease-in-out;
   -o-transition: all 0.2s ease-in-out;
   -ms-transition: all 0.2s ease-in-out;
   transition: all 0.2s ease-in-out;
}
.ver_mas span {
   font-size: 40px;
   position: relative;
   margin: 0 auto;
   width: 100%;
   top: 13px;
}
/*hovers*/
.container_foto:hover {
   cursor: pointer;
}
.container_foto:hover img {
   opacity: 0.1;
   transform: scale(1.5);
}
.container_foto:hover article {
   transform: translate(2px, -69px);
   -webkit-transform: translate(2px, -69px);
   -moz-transform: translate(2px, -69px);
   -o-transform: translate(2px, -69px);
   -ms-transform: translate(2px, -69px);
}
.container_foto:hover .ver_mas {
   transform: translate(0px, 0px);
   -webkit-transform: translate(0px, 0px);
   -moz-transform: translate(0px, 0px);
   -o-transform: translate(0px, 0px);
   -ms-transform: translate(0px, 0px);
   opacity: 1;
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
               <h3 class="panel-title">Foto - Foto Progres Tender</h3>
            <hr/>
            </div>
               <div class="panel-body">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="">Pilih Tender yg Dikerjakan</label>
                           <select id="sel_progres" class="form-control">
                                 <option value="semua">Semua Data</option>
                                 <?php
                                    foreach($sel_progres as $progres){
                                       echo "<option value='".$progres['pengerjaan_id']."'>".$progres['pengerjaan_judul']."</option>";
                                    }
                                 ?>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row" id="select_data">
                     <div class="container-fluid contenedor text-center">
                        <div class=" container text-center">
                        <?php
                           if($progres_pengerjaan->num_rows() == 0){
                        ?>
                           <i class="ml-3" style="color: red;">Belum Terdapat Foto Progres Tender yang Dibuat *</i>
                        <?php
                           }
                           else{
                              foreach ($progres_pengerjaan->result() as $key): 
                                 $originalDate  = $key->progres_tanggal;
                                 $newDate       = date("d-m-Y", strtotime($originalDate));
                                 $limited_word  = word_limiter($key->progres_keterangan, 10);
                              ?>
                                 <div class="<?php echo $key->pengerjaan_id; ?> data">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto ">
                                       <div class="ver_mas text-center">
                                          <span  class="lnr lnr-eye"></span>
                                       </div>
                                       <article class="text-left">
                                          <h4><?php echo $newDate ?></h4>
                                          <h5><?php echo $limited_word; ?></h5>
                                       </article>
                                       <img src="<?= base_url('assets/Gambar/progres_pengerjaan/400x400/'.$key->progres_gambar1); ?>" alt="">
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
                                       <div class="ver_mas text-center">
                                          <span id="click" class="lnr lnr-eye"></span>
                                       </div>
                                       <article class="text-left">
                                          <h4><?php echo $newDate ?></h4>
                                          <h5><?php echo $limited_word; ?></h5>
                                       </article>
                                       <img src="<?= base_url('assets/Gambar/progres_pengerjaan/400x400/'.$key->progres_gambar2); ?>" alt="">
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
                                       <div class="ver_mas text-center">
                                          <span class="lnr lnr-eye"></span>
                                       </div>
                                       <article class="text-left">
                                          <h4><?php echo $newDate ?></h4>
                                          <h5><?php echo $limited_word; ?></h5>
                                       </article>
                                       <img src="<?= base_url('assets/Gambar/progres_pengerjaan/400x400/'.$key->progres_gambar1); ?>" alt="">
                                    </div>
                                 </div>
                                 <div class="semua">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto ">
                                       <div class="ver_mas text-center">
                                          <span  class="lnr lnr-eye"></span>
                                       </div>
                                       <article class="text-left">
                                          <h4><?php echo $key->pengerjaan_id; ?></h4>  
                                          <h4><?php echo $newDate ?></h4>
                                          <h5><?php echo $limited_word; ?></h5>
                                       </article>
                                       <img src="<?= base_url('assets/Gambar/progres_pengerjaan/400x400/'.$key->progres_gambar1); ?>" alt="">
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
                                       <div class="ver_mas text-center">
                                          <span id="click" class="lnr lnr-eye"></span>
                                       </div>
                                       <article class="text-left">
                                          <h4><?php echo $newDate ?></h4>
                                          <h5><?php echo $limited_word; ?></h5>
                                       </article>
                                       <img src="<?= base_url('assets/Gambar/progres_pengerjaan/400x400/'.$key->progres_gambar2); ?>" alt="">
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 container_foto">
                                       <div class="ver_mas text-center">
                                          <span class="lnr lnr-eye"></span>
                                       </div>
                                       <article class="text-left">
                                          <h4><?php echo $newDate ?></h4>
                                          <h5><?php echo $limited_word; ?></h5>
                                       </article>
                                       <img src="<?= base_url('assets/Gambar/progres_pengerjaan/400x400/'.$key->progres_gambar1); ?>" alt="">
                                    </div>
                                 </div>
                              <?php endforeach; } ?>
                        </div>
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

      $('#sel_progres').on('change', function(){
         $(".data").hide();
         $(".semua").hide();
         $("." + $(this).val()).fadeIn(700);
         // var city = $(this).val();
         // AJAX request
         // $.ajax({
         //   url:'<?= base_url()?>kon_page/get_selected_progres',
         //   method: 'post',
         //   data: {city: city},
         //   dataType: 'json',
         //   success: function(response){
         //      $('#select_data').hide();
         //      Remove options 
         //      $('#sel_user').find('option').not(':first').remove();
         //      $('#sel_depart').find('option').not(':first').remove();
         //      onSuccess(response);
         //      Add options
         //   }
         // });
         // function base_url() {
         //    let protocol = window.location.protocol+"//";
         //    let host     = protocol+window.location.host+"/";
         //       host     = host+"TenderV2/assets/Gambar/progres_pengerjaan/400x400/";
         //    return host;
         // }

         // function onSuccess(response) {
         //   let html = "";
         //   $.each(response,function(index,data){
         //     html += '<div class="ver_mas text-center"><span  class="lnr lnr-eye"></span></div><article class="text-left"><h4>'+data['pengerjaan_id']+'</h4><h5>'+data['id_konsumen']+'</h5></article>'+document.getElementsByTagName("img")[0].setAttribute("src", base_url()+"e4beeb8895d8196ee0859f5a58f4e6cd.JPG");'<br>'
         // });
         //   $('.editview-radio-box').html(html);
         // }
      }).change();
   });
</script>

    



























