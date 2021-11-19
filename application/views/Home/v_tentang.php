<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <!-- TITLE -->
   <title>Tentang Perusahaan</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <meta name="format-detection" content="telephone=no">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <link rel="shortcut icon" href="<?php echo base_url().'theme/images/favicon.png'?>"/>
	<meta name="description" content="OpenSource SOURCE CODE company profile hotel yang di develop oleh M Fikri Setiadi">
    
	<!-- META FOR IOS & HANDHELD -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="HandheldFriendly" content="true" />
	<meta name="apple-mobile-web-app-capable" content="YES" />
	<!-- //META FOR IOS & HANDHELD -->

   <!-- GOOGLE FONT -->
   <link href='http://fonts.googleapis.com/css?family=Hind:400,300,500,600%7cMontserrat:400,700' rel='stylesheet' type='text/css'>
   <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/lib/font-awesome.min.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/lib/font-lotusicon.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/lib/bootstrap.min.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/lib/owl.carousel.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/lib/jquery-ui.min.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/lib/magnific-popup.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/lib/settings.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/lib/bootstrap-select.min.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/helper.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/custom.css'?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/responsive.css'?>">
   <link href="<?= base_url('assets/Toastr/build/toastr.min.css') ?>" rel="stylesheet">
    <!-- MAIN STYLE -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/Home/theme/css/style.css'?>">
   <!-- Aos -->
  <link href="<?= base_url('assets/Aos/aos.css') ?>" rel="stylesheet">
</head>
<body>
   <div id="preloader">
      <span class="preloader-dot"></span>
   </div>
   	<div id="page-wrap">
        	<header id="header" class="header-v2">
            <?php $this->load->view('Home/inc/headertop');?>
            <?php $this->load->view('Home/inc/header');?>
         </header>
        		<section class="section-sub-banner bg-9">
            	<div class="sub-banner">
                	<div class="container">
                    	<div class="text text-center">
                    	</div>
                	</div>
            	</div>
        		</section>
        		<section class="section-about">
            	<div class="container">
                	<div class="about">
                    	<div class="about-item about-right">
                        <?php
									$sqf=$this->db->query("SELECT * from tb_gambaran");
										foreach($sqf->result() as $row):
								?>
                        <div class="img">
                           <img src="<?php echo base_url().'assets/Gambar/gambaran/'.$row->gambaran_gambar;?>" alt="" data-aos="fade-down" data-aos-delay="250">
                        </div>
                        <div class="text">
                           <h2 class="heading"> <?php echo $row->gambaran_head;?></h2>
                           <div class="desc">
                              <p class="text-justify"> <?php echo $row->gambaran_des?></p>
                           </div>
								<?php endforeach; ?>
                        </div>
                    	</div>
                	</div>
            	</div>
        		</section>
         	<?php $this->load->view('Home/inc/footer');?>
    	</div>

   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery-1.11.0.min.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery-ui.min.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/bootstrap.min.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/bootstrap-select.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/isotope.pkgd.min.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery.themepunch.revolution.min.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery.themepunch.tools.min.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/owl.carousel.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery.appear.min.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery.countTo.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery.countdown.min.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery.parallax-1.1.3.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery.magnific-popup.min.js'?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/scripts.js'?>"></script>
   <script src="<?= base_url('assets/Toastr/build/toastr.min.js') ?>"></script>
   <script src="<?= base_url('assets/Aos/aos.js') ?>"></script>
</body>
</html>