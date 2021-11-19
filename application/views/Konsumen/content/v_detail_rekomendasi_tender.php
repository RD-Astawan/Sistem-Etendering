<!-- MAIN -->
<div class="main">
   <!-- MAIN CONTENT -->
   <div class="main-content">
      <div class="container-fluid">
      <!-- OVERVIEW -->
         <div class="panel panel-headline">
            <div class="panel-heading">
               <h3 class="panel-title">Detail Data Tender</h3>
               <hr/>
            </div>
            <div class="panel-body">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card mb-3 detail_tender_form" >
                        <div class="row no-gutters">
                           <div class="col-md-5">
                              <img src="<?php echo base_url().'assets/Gambar/tender/'.$detail_tender->gambar; ?>" class="card-img" style="width: 350px; height: 350px;">
                           </div>
                           <div class="col-md-6">
                              <div class="card-body">
                                 <h5>Produk detail</h5>
                                 <input class="form-control input-sm" value="<?php echo $detail_tender->tittle;?>" type="text">
                                 <p></p>
                                 <h5>Deadline</h5>
                                 <input class="form-control input-sm" value="<?php echo $detail_tender->deadline;?>" type="text">
                                 <h5>Tanggal Tutup</h5>
                                 <input class="form-control input-sm" value="<?php echo $detail_tender->tanggal_tutup;?>" type="text">
                                 <h5>Deskripsi Produk</h5>
                                 <textarea class="form-control" placeholder="textarea" rows="3"><?php echo $detail_tender->deskripsi;?></textarea>
                                 <blockquote class="blockquote" style="margin-top: 10px;">
                                    <small>Rekomedasi Tenpat Kerajinan bisa dilihat setelah batas waktu tender selesai</small>
                                 </blockquote>
                                 <div class="rekomendasi">
                                    <div class="li-rekomendasi">  
                                    </div>
                                 </div>
                                 <?php
                                    $tanggal_sekarang = date("Y-m-d");
                                    $tanggal_tutup    = $detail_tender->tanggal_tutup;
                                    $disabled = $tanggal_sekarang < $tanggal_tutup? 'disabled' : ''; //tanda tanya diartikan if dan setelahnya berupa jawaban ynag kiri benar dan setelah : salah
                                 ?> 
                              </div>
                           </div>
                        </div>
                        <hr />
                     </div>

                     <!-- bottom -->
                     <div class="form-group bottom_tampil">
                        <button type="button" class="btn btn-warning btn-sm btn_kembali" style="width: 130px;" onclick="location.href='<?php echo base_url();?>kon_page/list_tenderx/'">Kembali</button>
                        <a href="<?= base_url() ?>kon_page/detail_tender/<?php echo $detail_tender->id_tender ?>/rekomendasi"><button class="btn btn-primary btn-sm btn_rekomendasi" <?php echo $disabled; ?> style="width: 130px;">Lihat Rekomendasi</button></a>   
                     </div>
                     
                     <?php  if($hasil): ?>
                        <div class="card mb-3" >
                           <div class="container-fluid">
                              <div class="row no-gutters">
                                 <div class="card" style="margin-top: -20px !important;">
                                    <div class="card-header" style="background-color: #34495e; color: ##34495e !important; ">
                                       .
                                    </div>
                                    <div class="card-body">
                                       <div class="table-responsive">
                                          <table class="table table-striped">
                                             <thead class="">
                                                <tr>
                                                   <th style="text-align: center; width: 5%;">No</th>
                                                   <th style="width: 30%;">Nama Perusahaan</th>
                                                   <th style="text-align: center; width: 20%;">Urutan Rekomendasi</th>
                                                   <th style="text-align: center; width: 15%;">Kontak</th>
                                                   <th style="text-align: center; width: 15%;">Detail Perusahaan</th>
                                                   <th style="text-align: center; width: 15%;"><center>Aksi Lainnya</center></th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php 
                                                   $no = 1;
                                                   foreach($hasil as $li):          
                                                ?>
                                                   <tr>                                            
                                                      <td align="center"><?= $no ?></td>
                                                      <td><?= $li->nama_pt ?></td>
                                                      <td style="text-align: center;"><?= 'Rekomendasi ', $no ?></td>
                                                      <td style="text-align: center;"><?= $li->no_tlp ?></td>
                                                      <!-- <td><?= $li->score?></td> -->
                                                      <td style="text-align: center;">
                                                      <a href="<?= base_url() ?>kon_page/detail_perusahaan/<?= $li->id_produsen;?>/<?= $li->username;?>" class="btn btn-info btn-sm">Detail Perusahaan</a></td>
                                                      <td style="text-align: center;">
                                                         <form class="form_pengerjaan">
                                                            <input type="hidden" name="id_tender" id="id_tender" value="<?php echo $detail_tender->id_tender;?>">
                                                            <input type="hidden" name="pengerjaan_judul" value="<?php echo $detail_tender->tittle;?>">
                                                             <input type="hidden" name="pengerjaan_id_tender" value="<?php echo $detail_tender->id_tender;?>">
                                                            <input type="hidden" name="pengerjaan_deskripsi" value="<?php echo $detail_tender->deskripsi;?>">
                                                            <input type="hidden" name="pengerjaan_deadline" value="<?= $detail_tender->deadline ?>">
                                                            <input type="hidden" name="pengerjaan_gambar" value="<?php echo $detail_tender->gambar;?>">
                                                            <input type="hidden" name="id_produsen" id="<?php echo $li->id_produsen ?>" value="<?php echo $li->id_produsen ?>">
                                                            <button type="submit" class="btn btn-primary btn-sm btn-deal">Deal</button>
                                                         </form>
                                                      </td>
                                                   </tr>
                                                <?php 
                                                $no++; endforeach; ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr />
                           <button type="button" class="btn btn-warning btn-sm" style="width: 130px;" onclick="location.href='<?php echo base_url();?>kon_page/detail_tender/<?php echo $detail_tender->id_tender ?>'">Kembali
                           </button>
                           </div>
                        </div>
                     <?php
                        endif;                 
                     ?>
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
   var hasil = <?php echo json_encode($hasil); ?>;

   if(hasil){
      $('.detail_tender_form').hide();
      $('.btn_rekomendasi').hide();
      $('.btn_kembali').hide();
      $('.btn-diminta').hide();
      //$(".btn-deal").click(function(){
      //  $(this).next(".btn-diminta").toggle();
      // });
   }

   //submit form validasi login
   $('.form_pengerjaan').submit(function(e){
      e.preventDefault();
         var url = '<?php echo base_url(); ?>';
         $(this).parent().find('.btn-deal').addClass('change-p-btn');
         var formData = new FormData($(this)[0]);
            $.ajax({
               type: 'POST',
               url: url + 'kon_page/add_permintaan',
               data: formData,
               processData:false,
               contentType:false,
               cache:false,
               async:false,
               success: function(data){
                  $('.change-p-btn').html("Diminta");
                  $('.change-p-btn').attr('disabled', true);
               }
            }); 
   });
});
</script>
