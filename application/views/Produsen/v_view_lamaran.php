
            <div class="col-md-9">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('Produsen/index') ?>">Tender</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Daftar Lamaran</li>
                  </ol>
                </nav>
                <div class="table-responsive">
                    <table class="table table-striped">
                      <thead class="thead-dark">
                        <tr>
                          <th colspan="2">Tender</th>
                          <th>Tanggal Tutup</th>
                          <th>Deadline Pengerjaan</th>
                          <th>Tawaran Harga</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $no=0;
                          foreach ($lamaran as $row) :
                        ?>
                        <tr>
                          <td colspan="2"><?php echo $row->tittle;?></td>
                          <td><?php echo $row->tanggal_tutup;?></td>
                          <td><?php echo $row->deadline;?></td>
                          <td><?php echo $row->tawaran_harga;?></td>
                          <?php
                            $tanggal_sekarang = date("Y-m-d");
                            $tanggal_tutup    = $row->tanggal_tutup;
                            $disabled = $tanggal_sekarang > $tanggal_tutup? 'disabled' : ''; //tanda tanya diartikan if dan setelahnya berupa jawaban ynag kiri benar dan setelah : salah
                          ?> 
                          <td><a href="<?php echo base_url() ?>Produsen/view_edit_lamaran/<?php echo $row->id_lamaran ?>"><button type="button" class="btn btn-sm btn-template-main" <?= $disabled ?>>PENAWARAN ULANG</button></a></td>
                        </tr>
                        <?php endforeach;?>
                      </tbody>
                      
                    </table>
                  </div>
            </div>

            

          </div>
        </div>
      </div>


      <!--Footer-->
    </div>
    <!--/.Content-->
  </div>
</div>


     
      <!-- FOOTER -->
      <footer class="main-footer" style="background-color: #fff !important;">
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2020. E-tendering Kerajinan Bali</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Website by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">I Wayan Rudi Eri Astawan</a></p>
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
  </body>
</html>