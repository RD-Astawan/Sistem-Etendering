
            <div class="col-md-9">
                 <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('Produsen/index') ?>">Tender</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Beranda</li>
                  </ol>
                </nav>
              <div class="row products products-big">

                 <?php $i=1 ?>
                <?php foreach ($tender as $key): ?>

                <div class="col-lg-4 col-md-6">
                  <div class="product">
                    <div class="image"><a href="shop-detail.html"><img src="<?= base_url('assets/Gambar/tender/'.$key->gambar) ?>" alt="" class="img-fluid image1"></a></div>
                    <div class="text">
                      <h3 class="h5"><a href="shop-detail.html"><?php echo $key->tittle ?></a></h3>
                      <p class="price" style="margin-top: -30px;"><?php echo $key->tanggal_tutup ?></p>
                    </div>
                    <p class="buttons"><a href="<?= base_url() ?>/produsen/detail_tender/<?php echo $key->id_tender ?>" class="btn btn-outline-secondary">Deadline</a>

                     <a onclick="detail_tender(<?php echo $key->id_tender ?>)" class="btn  btn-primary text-white"><i class="fa fa-search" style="margin-right:5px"></i>Detail</a></p>
                  </div>
                </div>

                <?php $i++ ?>
          <?php endforeach; ?>
                
              </div>
              
              <div class="pages">
                <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
                <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                  <ul class="pagination">
                    <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div id="modal_detail_tender" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
  <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
        

      <!--Body-->
      <div class="modal-body">
        <div class="row no-gutters">
          <aside class="col-sm-4 border-right">
              <div> <a id="href_gambar" href="" data-fancybox=""><img id="img_gambar" src="" style="width: 250px; min-height: 250px;"></a></div>
          </aside>
          <aside class="col-sm-5">
            <article class="p-3">
              <h3 id="tittle_tender" class="title mb-3"></h3>
              <div class="mb-3">
                <var class="price text-primary">
                  <span id="jumlah_pelamar"></span><span> orang pelamar</span>
                </var>
              </div> <!-- price-detail-wrap .// -->
              <dl>
                <dt>Deskripsi</dt>
                <dd id="deskripsi"></dd>
              </dl>
              <dl class="row">
                <dt class="col-sm-6">Pendaftaran Ditutup</dt>
                <dd class="col-sm-6" id="tanggal_tutup"></dd>

                <dt class="col-sm-6">Deadline Pengerjaan</dt>
                <dd class="col-sm-6" id="deadline"></dd>
              </dl>
              <hr>
              <div class="" id="tempat_formulir">
                <?php echo form_open_multipart(base_url('Produsen/lamar_tender/'));?>
                  <input type="hidden" id="id_tender" name="id_tender" value="">
                  <div class="form-group">
                    <label for="rab">File RAB (PDF)</label>
                    <input type="file" name="rab" class="form-control" id="rab" placeholder="" accept="application/pdf" required>
                  </div>
                  <div class="form-group">
                    <label for="tawaran_harga">Tawaran Harga (Rp)</label>
                    <input type="number" name="tawaran_harga" class="form-control" id="tawaran_harga" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <button id="btn_gas" type="submit" class="btn  btn-outline-primary"><i class="fa fa-plane" style="margin-right:5px"></i>Daftar Sekarang!</button>
                  </div>
                </form>
              </div>
              <button id="btn_daftar" class="btn  btn-outline-primary"><i class="fa fa-plane" style="margin-right:5px"></i>Daftar Sekarang!</button>
            </article>
          </aside>
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

    <script type="text/javascript">
  
    


  function detail_tender(id_tender){
    $.ajax({
      url: '<?php echo base_url('Tender/ajax_get_detail_tender') ?>',
      type: 'POST',
      dataType: 'JSON',
      data: {id_tender: id_tender, type:'produsen'}
    })
    .done(function(data) {
      console.log(data);
      $('#btn_daftar').attr('hidden',false);
      $('#tittle_tender').html(data.tittle);
      $('#jumlah_pelamar').html(data.jumlah_pelamar);
      $('#deskripsi').html(data.deskripsi);
      $('#tanggal_tutup').html(data.tanggal_tutup);
      $('#deadline').html(data.deadline);
      $('#img_gambar').attr('src','<?php echo base_url('assets/Gambar/tender/') ?>'+data.gambar);
      $('#href_gambar').attr('href','<?php echo base_url('assets/image/tender/') ?>'+data.gambar)
      if (data.terdaftar=='sudah') {
        $('#btn_daftar').attr('onClick','');
        $('#btn_daftar').addClass('disabled');
        $('#btn_daftar').html('<i class="fa fa-plane" style="margin-right:5px"></i>Sudah Terdaftar');
      }
      else if (data.id_status_tender!=1) {
        $('#btn_daftar').attr('onClick','');
        $('#btn_daftar').addClass('disabled');
        $('#btn_daftar').html('<i class="fa fa-plane" style="margin-right:5px"></i>Tender Telah Ditutup');
      }
      else {
        $('#btn_daftar').attr('onClick','isi_formulir('+data.id_tender+')');
        $('#btn_daftar').removeClass('disabled');
        $('#btn_daftar').html('<i class="fa fa-plane" style="margin-right:5px"></i>Daftar Sekarang!');
      }
      $('#tempat_formulir').attr('hidden',true);
      $('#modal_detail_tender').modal('show');
    })
    .fail(function() {
      alert("gagal mendapatkan detail tender");
    });
  }

  function isi_formulir(id_tender){
    $('#tempat_formulir').attr('hidden',false);
    $('#btn_daftar').attr('hidden',true);
    $('#id_tender').val(id_tender);
  }

</script>


  </body>
</html>