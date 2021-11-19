<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Kontak</title>
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
	

    <!-- CSS LIBRARY -->
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
    
</head>

<body>


    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header" class="header-v2">
            <!-- HEADER TOP -->
            <?php $this->load->view('Home/inc/headertop');?>
            <!-- END / HEADER TOP -->
            <!-- HEADER LOGO & MENU -->
            <?php $this->load->view('Home/inc/header');?>
            <!-- END / HEADER LOGO & MENU -->
         </header>
        <!-- END / HEADER -->
        
        <!--BANNER -->
        <section class="section-sub-banner bg-9">
            <div></div>
            <div class="sub-banner">
                <div class="container">
                    <div class="text text-center">
                    </div>
                </div>

            </div>

        </section>
        <!-- END BANNER -->

        <!-- CONTACT -->
        <section class="section-contact">
            <div class="container">
                <div class="contact">
                    <div class="row">
                        <div class="col-md-6 col-lg-5">

                            <div class="text">
							<?php
											
									
									$sql =$this->db->query("SELECT * from tb_kontak");
									$data = $sql->row_array();
											
													
							?>
							
                                <h2>Kontak</h2>
                                <p><?php echo $data['kontak_des']?> </p>
                                <ul>
                                    <li><i class="icon lotus-icon-location"></i> <?php echo $data['kontak_alamat']?></li>
                                    <li><i class="icon lotus-icon-phone"></i> <?php echo $data['kontak_tlp']?></li>
                                    <li><i class="icon fa fa-envelope-o"></i> <?php echo $data['kontak_email']?></li>
                                </ul>
							
									
								
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-lg-offset-1">
                            <div class="contact-form">
                                <form method="post" id="submit_inbox"> 
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="field-text textbox"  name="inbox_nama" id="inbox_nama" placeholder="Nama">
                                            <span class="text-warning" ></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="field-text textbox" name="inbox_email" id="inbox_email" placeholder="Email">
                                            <span class="text-warning" ></span>
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="text" class="field-text textbox" name="inbox_subjek" id="inbox_subjek" placeholder="Subjek">
                                            <span class="text-warning" ></span>
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="10" name="inbox_pesan"  class="field-textarea textbox" id="inbox_pesan" placeholder="Tulis pesan kamu"></textarea>
                                            <span class="text-warning" ></span>
                                        </div>
                                        <div class="col-sm-6">
                                            <button type="submit" class="awe-btn awe-btn-14">Kirim</button>
                                        </div>
                                    </div>
                                    <div id="contact-content"><?php echo $this->session->flashdata('msg');?></div>
                                </form>
                            </div>
                        </div>

                    </div>  
                </div>
            </div>
        </section>
        <!-- END / CONTACT -->

        <!-- FOOTER -->
            <?php $this->load->view('Home/inc/footer');?>
        <!-- END / FOOTER -->

    </div>
    <!-- END / PAGE WRAP -->

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

    <script type="text/javascript">
$(document).ready(function(){
   //validation
   $('.text-warning').hide();
   $('input').each(function(){
      $(this).blur(function(){
         if(! $(this).val()){
            return get_error_text(this);
         }
         else{
            $(this).removeClass('no-valid'); 
            $(this).parent().find('.text-warning').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
            $(this).closest('div').removeClass('has-warning');
            $(this).closest('div').addClass('has-success');
            $(this).parent().find('.field-text').removeClass('is-invalid');
            $(this).parent().find('.field-text').addClass('is-valid');
         }
      });
   });

   $('textarea').each(function(){
      $(this).blur(function(){
         if(! $(this).val()){
            return get_error_text(this);
         }
         else{
            $(this).removeClass('no-valid'); 
            $(this).parent().find('.text-warning').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
            $(this).closest('div').removeClass('has-warning');
            $(this).closest('div').addClass('has-success');
            $(this).parent().find('.field-text').removeClass('is-invalid');
            $(this).parent().find('.field-text').addClass('is-valid');
         }
      });
   });

   //mengecek text box nama lengkap
   $('#inbox_nama').blur(function(){
      var nama_lengkap = $(this).val();
      var len = nama_lengkap.length;
         if(len>0){ 
            if(!valid_nama_lengkap(nama_lengkap)){ 
               $(this).parent().find('.text-warning').text("");
               $(this).parent().find('.text-warning').text("Nama Lengkap Tidak Valid (gunakan hurup!)");
               $(this).parent().find('.form-control').removeClass('is-valid');
               $(this).parent().find('.form-control').addClass('is-invalid');
               return apply_feedback_error(this);
            } else {
               if (len>30){ 
                  $(this).parent().find('.text-warning').text("");
                  $(this).parent().find('.text-warning').text("Maximal karakter 30");
                  $(this).parent().find('.form-control').removeClass('is-valid');
                  $(this).parent().find('.form-control').addClass('is-invalid');
                  return apply_feedback_error(this);
               } 
            }
         } 
   });

   //mengecek text box email
   $('#inbox_email').blur(function(){
       var email=$(this).val();
       var len= email.length;
       if(len>0){ 
           if(!valid_email(email)){ 
               $(this).parent().find('.text-warning').text("");
               $(this).parent().find('.text-warning').text("E-mail Tidak Valid (ex: aaaa@gmail.co.id)");
               return apply_feedback_error(this);
           } else {
               if (len>30){ 
                   $(this).parent().find('.text-warning').text("");
                   $(this).parent().find('.text-warning').text("Maximal Karakter 30");
                   return apply_feedback_error(this);
               }
           }
       } 
   });

   //mengecek text box subjek
   $('#inbox_subjek').blur(function(){
      var username = $(this).val();
      var len = username.length;
         if(len>0){ 
           if (len>40){ 
              $(this).parent().find('.text-warning').text("");
              $(this).parent().find('.text-warning').text("Maximal karakter 40");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error(this);
           } 
         }
   });

   //mengecek text box pesan
   $('#inbox_pesan').blur(function(){
      var username = $(this).val();
      var len = username.length;
         if(len>0){ 
           if (len>50){ 
              $(this).parent().find('.text-warning').text("");
              $(this).parent().find('.text-warning').text("Maximal karakter 50");
              $(this).parent().find('.form-control').removeClass('is-valid');
              $(this).parent().find('.form-control').addClass('is-invalid');
              return apply_feedback_error(this);
           } 
         }
   });

   //submit form validasi login
   $('#submit_inbox').submit(function(e){
      e.preventDefault();
         var valid=true;     
         $(this).find('.textbox').each(function(){
            if (! $(this).val()){
               get_error_text(this);
               valid = false;
               } 
               if ($(this).hasClass('no-valid')){
                  valid = false;
               }
         });

         if(valid){             
            var url = '<?php echo base_url(); ?>';
            var formData = new FormData($("#submit_inbox")[0]);
               $.ajax({
                  type: 'POST',
                  url: url + 'Home/add_inbox',
                  data: formData,
                  mimeType: "multipart/form-data",
                  processData:false,
                  contentType:false,
                  cache:false,
                  async:false,
                     success: function(data){
                    toastr.options.timeOut = 1500; // 1.5s
                    toastr.success('Data admin berhasil disimpan.', 'Berhasil!');
                    document.getElementById("submit_inbox").reset();
                     }
               });    
         }
                   
   });
});


function get_error_text(textbox){
   $(textbox).parent().find('.text-warning').text("");
   $(textbox).parent().find('.text-warning').text("Text box ini tidak boleh kosong");
   $(this).parent().find('.form-control').removeClass('is-valid');
   $(this).parent().find('.form-control').addClass('is-invalid');
   return apply_feedback_error(textbox);
}

function apply_feedback_error(textbox){
   $(textbox).addClass('no-valid'); //menambah class no valid
   $(textbox).parent().find('.text-warning').show();
   $(textbox).closest('div').removeClass('has-success');
   $(textbox).closest('div').addClass('has-warning');
   $(textbox).parent().find('.form-control').removeClass('is-valid');
   $(textbox).parent().find('.form-control').addClass('is-invalid');
}

//fungsi cek nama_lengkap
function valid_nama_lengkap(nama_lengkap) {
   var pola= new RegExp(/^[a-z A-Z]+$/);
   return pola.test(nama_lengkap);
}

//fungsi cek email
function valid_email(email){
   var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
   return pola.test(email);
}
</script>
</body>
</html>