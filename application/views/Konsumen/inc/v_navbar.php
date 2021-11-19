<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SoftLand Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700|Roboto:300,400,700&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="<?= base_url('assets/Konsumen/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/Konsumen/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/Konsumen/vendor/line-awesome/css/line-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/Konsumen/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/Konsumen/vendor/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/Konsumen/css/style.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/Konsumen/css/magnum_custom.css') ?>" rel="stylesheet">

  <link href="<?= base_url('assets/Konsumen/datatable/DataTables/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/Konsumen/datatable/datatables.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/Toastr/build/toastr.min.css') ?>" rel="stylesheet">

<link href="<?= base_url('assets/Star_Rating/bootstrap/css/glyphicons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/Star_Rating/bootstrap-star-rating/css/star-rating.min.css') ?>" rel="stylesheet">
        <script type="text/javascript" src="<?= base_url('assets/Star_Rating/js/jquery-3.3.1.js') ?>"></script>
     <script type="text/javascript" src="<?= base_url('assets/Star_Rating/bootstrap-star-rating/js/star-rating.min.js') ?>"></script>




  <!-- =======================================================
    Template Name: SoftLand
    Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com/
  ======================================================= -->
  <style type="text/css">
    .loader_bg{
      position: fixed;
      z-index: 999999;
      background-color: #fff;
      width: 100%;
      height: 100%;
      opacity: 90%;
    }
    .loader{
      border: 0 solid transparent;
      border-radius: 50%;
      width: 150px;
      height: 150px;
      position: absolute;
      top: calc(50vh - 75px);
      left: calc(50vw - 75px);
    }
    .loader:before, .loader:after{
      content: '';
      border: 1em solid #ff5733;
      border-radius: 50%;
      width: inherit;
      height: inherit;
      position: absolute;
      top: 0;
      left: 0;
      animation: loader 2s linear infinite;
      opacity: 0;
    }
    .loader:before{
      animation-delay: .5s;
    }
    @keyframes loader{
      0%{
        transform: scale(0);
        opacity: 0;
      }
      50%{
        opacity: 1;
      }
      100%{
        transform: scale(1);
        opacity: 0;
      }
    }



    .menu ul{
      list-style: none;
      margin: 0;
      margin-left: -35px;
    }
    .menu ul li{
      padding: 15px;
      position: relative;
      width: 260px;
      background-color: #34495e;
      border-top: 1px solid #bdc3c7;
      border-right: 5px solid #f1c40f;
    }
    .menu ul li a{
      color: #fff;
      text-decoration: none;
    }
    .menu ul li:hover{
      background-color: #2ecc71;
    }
    .icon{
      margin-right: 10px;
    }
    
  </style>
</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="background: rgb(59, 70, 74) none repeat scroll 0% 0%;">
      <div class="bg-user-panel-header">
                <img src="<?php echo base_url('assets/Konsumen/img/hero-bg.jpg') ?>" alt="User Image" />
            </div>

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0"><center>E-Tendering Kerajinan</center></a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

             <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="<?php echo base_url('KonsumenMainPage/list_tenderx')  ?>" class="nav-link">Tender</a></li>
                <li><a href="<?php echo base_url('KonsumenMainPage/profile') ?>" class="nav-link">Profile</a></li>
                <li><a href="<?php echo base_url('KonsumenMainPage/logout')  ?>" class="nav-link">Logout</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
              data-target="#main-navbar">
              <span></span>
            </a>
          </div>

        </div>
      </div>

    </header>