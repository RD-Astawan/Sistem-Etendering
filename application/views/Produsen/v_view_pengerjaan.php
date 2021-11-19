
            <div class="col-md-9">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tender</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Tender</li>
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
                          if($pengerjaan->num_rows() == 0){
                            ?>
                            <tr style="text-align:center;"><td colspan="7">Belum Ada Pengerjaan Tender yang Dilakukan</td></tr>;
                            <?php
                          }
                          else{
                          $no=1;
                          foreach ($pengerjaan->result() as $row) :
                        ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td colspan="2"><?php echo $row->pengerjaan_judul;?></td>
                          <td><?php echo $row->pengerjaan_deadline;?></td>
                          <td><?php echo $row->id_konsumen;?></td>
                          <td><?php echo $row->id_produsen;?></td>
                          
                          <td>
                             <a href="javascript:void(0)" class="btn btn-sm btn-success" id="konfirmasi_selesai" konfirmasiId="<?php echo $row->pengerjaan_id ?>" onclick="konfirmasi_selesai(this);">Selesai</a>
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
    function konfirmasi_selesai(e) {
      var url = '<?php echo base_url(); ?>';
      var id_konfirmasi = $(e).attr("konfirmasiId");
      $.ajax({
        url: url + 'Produsen/konfirmasi_pengerjaan_selesai',
        type:'post',
        data:'id='+id_konfirmasi,
        success:function (data) {
          var dataKonf = jQuery.parseJSON(data);
          if (dataKonf.isSuccess) {
            $("#tabel_permintaan").load(document.URL + ' #tabel_permintaan');
          }
          else{
            alert('gagal update db');
          }
        }
      });
    }
    </script>


  </body>
</html>