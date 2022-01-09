<!doctype html>
<html lang="en">

<head>
	<title><?php echo "$tittle" ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Konsumen/tambahan/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Konsumen/tambahan/vendor/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Konsumen/tambahan/vendor/linearicons/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/Konsumen/tambahan/vendor/chartist/css/chartist-custom.css') ?>">

	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/Konsumen/tambahan/css/main.css') ?>">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php echo base_url('assets//konsumen/tambahan/css/demo.css') ?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link href="<?= base_url('assets/Konsumen/datatable/DataTables/css/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">
  	<link href="<?= base_url('assets/Konsumen/datatable/datatables.css') ?>" rel="stylesheet">
  	<link href="<?= base_url('assets/Toastr/build/toastr.min.css') ?>" rel="stylesheet">
  	<script src="<?php echo base_url('assets/Konsumen/tambahan/vendor/jquery/jquery.min.js') ?>"></script>
    <link href="<?= base_url('assets/Star_Rating/bootstrap/css/glyphicons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/Star_Rating/bootstrap-star-rating/css/star-rating.min.css') ?>" rel="stylesheet">
        <script type="text/javascript" src="<?= base_url('assets/Star_Rating/js/jquery-3.3.1.js') ?>"></script>
     <script type="text/javascript" src="<?= base_url('assets/Star_Rating/bootstrap-star-rating/js/star-rating.min.js') ?>"></script>
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
  	hr{
		margin-top: 1rem;
		margin-bottom: 1rem;
		border: 0;
		border-top: 1px solid rgba(0, 0, 0, 0.1);
	}
	.table thead,
	.table th {
		text-align: center;
	}
	.profile-header .profile-main {
    position: relative;
    padding: 20px;
    background-image: url("<?php echo base_url().'assets/Gambar/profile/profile-bg.jpg' ?>");
    background-repeat: no-repeat;
    background-size: cover; }

    .image-preview{
            width: 215px;
            min-height: 236px;
            border: 2px solid #dddddd;
            /* margin-top: 28px; */
             margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #cccccc;
            margin-bottom: 30px;
         }
     .image-preview_image{
        display: none;
        width: 100%;
     }
     
  </style>
</head>

<body>
	<div id="wrapper">
	    <?php $this->load->view($navbar_pro); ?>
      <?php $this->load->view($sidebar_pro); ?>
      <?php $this->load->view($content_pro); ?>
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>

	<!-- Javascript -->
	
	<script src="<?php echo base_url('assets/Konsumen/tambahan/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/Konsumen/tambahan/vendor/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/konsumen/tambahan/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/Konsumen/tambahan/vendor/chartist/js/chartist.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/Konsumen/tambahan/scripts/klorofil-common.js') ?>"></script>
	<script src="<?= base_url('assets/Konsumen/datatable/datatables.min.js') ?>"></script>
  	<script src="<?= base_url('assets/Konsumen/datatable/DataTables/js/dataTables.bootstrap4.min.js') ?>"></script>
  	<script src="<?= base_url('assets/Toastr/build/toastr.min.js') ?>"></script>

  	<script type="text/javascript">
	   setTimeout(function(){
	      $('.loader_bg').fadeToggle();
	   }, 1000);
	</script>

  	<script type="text/javascript">
   	$(function(){
    var current = location.pathname;
    $('#coba li a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
        	$('.cobi').removeClass('active');
            $this.addClass('active');

        }
    })
})
</script>

  <script type="text/javascript">
         toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
         }
      </script> 


  	

</body>
</html>