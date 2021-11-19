
            <div class="col-md-9">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('Produsen/index') ?>">Tender</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Permintaan</li>
                  </ol>
                </nav>
             <div class="table-responsive">
                    <table class="table table-striped" id="tabel_permintaan">
                      <thead class="thead-dark">
                        <tr>
                          <th>No</th>
                          <th colspan="2">Judul</th>
                          <th>Tanggal Pembuatan</th>
                          <th>Tanggal Tutup</th>
                          <th>Deadline Pengerjaan</th>
                          <th><center>Aksi Lainnya</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          if($permintaan->num_rows() == 0){
                            ?>
                            <tr style="text-align:center;"><td colspan="7">Belum Ada Permintaan Pengerjaan Tender yang Masuk</td></tr>;
                            <?php
                          }
                          else{
                          $no=1;
                          foreach ($permintaan->result() as $row) :
                        ?>
                       

                        <tr>
                          <td><?php echo $no ?></td>
                          <td colspan="2"><?php echo $row->permintaan_judul;?></td>
                          <td><?php echo $row->permintaan_deadline;?></td>
                          <td><?php echo $row->id_konsumen;?></td>
                          <td><?php echo $row->id_produsen;?></td>
                          
                          <td>
                              <form class="form_permintaan">
                                <input type="hidden" name="id_tender" value="<?php echo $row->id_tender; ?>">
                                <input type="hidden" name="id_konsumen" value="<?php echo $row->id_konsumen; ?>">
                                <input type="hidden" name="id_produsen" value="<?php echo $row->id_produsen; ?>">
                                <input type="hidden" name="permintaan_judul" value="<?php echo $row->permintaan_judul; ?>">
                                <input type="hidden" name="permintaan_deskripsi" value="<?php echo $row->permintaan_deskripsi; ?>">
                                <input type="hidden" name="permintaan_deadline" value="<?php echo $row->permintaan_deadline; ?>">
                                <input type="hidden" name="permintaan_gambar" value="<?php echo $row->permintaan_gambar; ?>">
                             
                               <!--  <a href="javascript:void(0)" class="btn btn-sm btn-info" id="konfirmasi" konfirmasiId="<?php echo $row->id_permintaan ?>" onclick="konfirmasi(this);">Diminta</a> -->
                               <button type="submit" class="btn btn-primary btn-sm btn-deal">Diminta</button>
                              </form>
                          </td>

                        </tr>

                        <?php $no++; endforeach;
                      }
                        ?>
                      </tbody>
                      
                    </table>
                  </div>
              </div>
              <div class="row">
               
              </div>
              
            </div>
          </div>
        </div>
      </div>


      <!-- FOOTER -->
      <footer class="main-footer" style="background-color: #fff;">
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2020. E-tendering Kerajinan Bali</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">I Wayan Rudi Eri Astawan</a></p>
                <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
              </div>
            </div>
          </div>
        </div>
      </footer>

      


    </div>
    <!-- Javascript files-->
    <script src="<?= base_url('assets/Produsen/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/popper.js/umd/popper.min.js') ?>"> </script>
    <script src="<?= base_url('assets/Produsen/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/jquery.cookie/jquery.cookie.js') ?>"> </script>
    <script src="<?= base_url('assets/Produsen/vendor/waypoints/lib/jquery.waypoints.min.js') ?>"> </script>
    <script src="<?= base_url('assets/Produsen/vendor/jquery.counterup/jquery.counterup.min.js') ?>"> </script>
    <script src="<?= base_url('assets/Produsen/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/js/jquery.parallax-1.1.3.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/bootstrap-select/js/bootstrap-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/vendor/jquery.scrollto/jquery.scrollTo.min.js') ?>"></script>
    <script src="<?= base_url('assets/Produsen/js/front.js') ?>"></script>

    <script type="text/javascript">
$(document).ready(function() {
   $('.form_permintaan').submit(function(e){
      e.preventDefault();
         var url = '<?php echo base_url(); ?>';
         // $(this).parent().find('.btn-deal').addClass('change-p-btn');
         var formData = new FormData($(this)[0]);
            $.ajax({
               type: 'POST',
               url: url + 'Produsen/add_pengerjaan',
               data: formData,
               processData:false,
               contentType:false,
               cache:false,
               async:false,
               success: function(data){
                $("#tabel_permintaan").load(document.URL +' #tabel_permintaan');
                  // $('.change-p-btn').html("Diminta");
                  // $('.change-p-btn').attr('disabled', true);
               }
            }); 
   });
});
</script>


  </body>
</html>