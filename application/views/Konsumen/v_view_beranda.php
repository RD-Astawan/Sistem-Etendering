  <div class="loader_bg">
    <div class="loader"></div>
  </div>

    <main id="main">
      <div class="hero-section">
        <div class="wave">

          <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                <path
                  d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                  id="Path"></path>
              </g>
            </g>
          </svg>

        </div>

        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 hero-text-image">
              <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                  <h1 data-aos="fade-right">Permudah mendapatkan kerajinan khas bali dengan E-tendering</h1>
                  <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Patung, Kain, Gamelan, Anyaman, Soupenir, dll</p>
                  <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="<?php echo base_url('kon_page/add_tender') ?>"
                      class="btn btn-outline-white">Buat Tender</a></p>
                </div>
                <div class="col-lg-5 iphone-wrap">
                  <img src="<?= base_url('assets/Gambar/konten/2.png') ?>" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="site-section">
        <div class="container">

          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
              <h2 class="section-heading">Projek Sedang Dikerjakan</h2>
            </div>
          </div>

          <div class="row">
            <?php
              foreach($tender_dikerjakan as $data):
                ?>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                  <div class="feature-1 text-center">
                    <div class="">
                      <img src="<?= base_url('assets/Gambar/tender/konten/'.$data->pengerjaan_gambar); ?>" alt="">
                    </div>
                    <h3 class="mb-3"><?php echo $data->pengerjaan_judul; ?></h3>
                    <h6 class=""><?php echo $data->pengerjaan_status; ?></h6>
                    <p><?php echo $data->pengerjaan_deskripsi; ?></p>
                  </div>
                </div>
                <?php
              endforeach;
            ?>
            
          </div>

        </div>
      </div> <!-- .site-section -->

      <div class="site-section border-top border-bottom">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5">
              <h4 class="section-heading">Review Dari Konsumen Lain</h4>
            </div>
          </div>
          <div class="row justify-content-center text-center">
            <div class="col-md-7">
              <div class="owl-carousel testimonial-carousel">
                <?php
                  foreach($review as $review):
                ?>
                <div class="review text-center">
                  <?php
                    echo '<p class="stars">';
                    for($n=1; $n<=5; $n++){
                      echo '<span class="icofont-star';
                      if($n > $review->rating){
                        echo ' muted';
                      };
                      echo '"></span>';
                    };
                    echo '</p>';
                  ?>
                  <h3>Excellent App!</h3>
                  <blockquote>
                    <p><?php echo $review->ulasan; ?></p>
                  </blockquote>

                  <p class="review-user">
                    <img src="<?= base_url('assets/Gambar/users/'.$review->foto); ?>" class="img-fluid rounded-circle mb-3" alt="Foto Konsumen">
                    <span class="d-block">
                      <span class="text-black"><?php echo $review->nama; ?></span>, &mdash; Konsumen
                    </span>
                  </p>

                </div>
                <?php
                  endforeach;
                ?>


              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="site-section cta-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 mr-auto text-center text-md-left mb-5 mb-md-0">
              <h2>E-Tendering Kerajinan Khas Bali</h2>
            </div>
            <div class="col-md-5 text-center text-md-right">
              <p><a href="#" class="btn"><span class="icofont-brand-apple mr-3"></span>App store</a> <a href="#"
                  class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a></p>
            </div>
          </div>
        </div>
      </div>


    </main>
  </div> <!-- .site-wrap -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/Konsumen/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/Konsumen/vendor/jquery/jquery-migrate.min.js') ?>"></script>
  <script src="<?= base_url('assets/Konsumen/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/Konsumen/vendor/easing/easing.min.js') ?>"></script>
  <script src="<?= base_url('assets/Konsumen/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/Konsumen/vendor/sticky/sticky.js') ?>"></script>
  <script src="<?= base_url('assets/Konsumen/vendor/aos/aos.js') ?>"></script>
  <script src="<?= base_url('assets/Konsumen/vendor/owlcarousel/owl.carousel.min.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/Konsumen/js/main.js') ?>"></script>
  <script type="text/javascript">
    setTimeout(function(){
      $('.loader_bg').fadeToggle();
    }, 1000);
  </script>

</body>

</html>
