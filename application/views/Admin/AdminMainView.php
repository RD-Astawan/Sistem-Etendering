<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="images/favicon.ico" type="image/ico" />

      <title>E-Tendering</title>

      <link href="<?= base_url('assets/Admin/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet"/>
      <link href="<?= base_url('assets/Admin/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css ') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Admin/docs/css/dropify.min.css') ?>" rel="stylesheet">
      <link href="<?= base_url('assets/Toastr/build/toastr.min.css') ?>" rel="stylesheet">
      <script src="<?php echo base_url()?>/assets/Chart/Chart.js"></script>
      <link href="<?= base_url('assets/Admin/build/css/custom.css') ?>" rel="stylesheet">

      <style type="text/css">
         .swal-wide{
            width:400px !important;
            height: 250px !important;
            margin-top: 100px !important;
         }
         .text-warning{
            color: #6e1f17 !important;
         }
        .text-warning-password{
            color: #6e1f17 !important;
         }
         .text-warning-cpassword{
            color: #6e1f17 !important;
         }
         .image-preview{
            width: 320px;
            min-height: 372px;
            border: 2px solid #dddddd;
            margin-top: 28px;

            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #cccccc;
         }
         .image-preview_image{
            display: none;
            width: 100%;
         }
         .post_image-preview{
            width: 295px;
            min-height: 200px;
            border: 2px solid #dddddd;

            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #cccccc;
         }
         .post_image-preview_image{
            display: none;
            width: 100%;
         }
         /*class di slider*/
         .slider_image-preview{
            width: 350px;
            min-height: 200px;
            border: 2px solid #dddddd;
            margin-top: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #cccccc;
         } 
      </style>
   </head>

   <script src="<?= base_url('assets/Admin/vendors/jquery/dist/jquery.min.js') ?>"></script>
   <script type="text/javascript">
      $(function(){
         var title   = '<?= $this->session->flashdata("title") ?>';
         var text    = '<?= $this->session->flashdata("text") ?>';
         var type    = '<?= $this->session->flashdata("type") ?>';
         if (title) {
            Swal.fire({
               title: title,
               text: text,
               type: type,
               customClass: 'swal-wide',
               button: true,
            });
         };
      });
   </script>
   <body class="nav-md">
      <div class="container body">
         <div class="main_container">
            <?php $this->load->view($sidebar); ?>
            <div class="content-inner-all">
               <?php $this->load->view($navbar); ?>
               <?php $this->load->view($content); ?>
               <footer>
                  <div class="pull-right">
                     E-tendering - by I Wayan Rudi Eri Astawan
                  </div>
                  <div class="clearfix"></div>
              </footer>
            </div>
         </div>
      </div>
    
      <script src="<?= base_url('assets/Admin/vendors/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/fastclick/lib/fastclick.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/nprogress/nprogress.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/Chart.js/dist/Chart.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/gauge.js/dist/gauge.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/iCheck/icheck.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/skycons/skycons.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/Flot/jquery.flot.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/Flot/jquery.flot.pie.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/Flot/jquery.flot.time.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/Flot/jquery.flot.stack.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/Flot/jquery.flot.resize.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/flot.curvedlines/curvedLines.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/DateJS/build/date.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/moment/min/moment.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/build/js/custom.min.js') ?>"></script>
      <script src="<?= base_url('assets/Sweetalert2/dist/sweetalert2.all.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-buttons/js/buttons.print.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') ?>"></script>
      <script src="<?= base_url('assets/Admin/docs/js/dropify.min.js') ?>"></script>
      <script src="<?= base_url('assets/Toastr/build/toastr.min.js') ?>"></script>
       
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