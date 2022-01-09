<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Contact</title>
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
											
									
									//$sqf=$this->db->query("SELECT * from kontak");
									//$dataf=$sqf->row_array();
											
													
							?>
							
                                <h2>LOGIN</h2>
                                <p>Login menggunakan username dan password yang sudah ditaftarkan dan sudah diverifikasi, jika belum memiliki akun silahkan daftar dahulu disini <a>Link</a></p><br />

                                <h5>Alur Pendaftaran</h5>
                                <ul>
                                    <li><i class="icon fa fa-th-list" aria-hidden="true"></i> Mendaftar pada form pendaftaran</li>
                                    <li><i class="icon fa fa-pause" aria-hidden="true"></i> Menunggu verifikasi akun biar aktif dan bisa digunakan</li>
                                    <li><i class="icon fa fa-sign-in" aria-hidden="true"></i> Login pada form login</li>
                                </ul>
							
									
								
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-5 col-lg-offset-1">
                            <div id="login_responseDiv" class="alert alert-success text-center" style=" display:none;">
                                <button type="button" class="close" id="login_clearMsg"><span aria-hidden="true">&times;</span></button>
                                <strong><span id="login_pesan"></span></strong>
                              </div> 
                            <div class="contact-form">

                                <form id="loginForm"> 
                                    <div class="row">
                                         <div class="form-group" style="margin-top: 30px;">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="text" class="field-text textbox"  id="login_username" name="login_username" placeholder="Masukan Username" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input type="password" class="field-text textbox"  id="login_password" name="login_password" placeholder="Masukan Password" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>
                                       
                                        <div>
                                            <button type="submit" class="awe-btn awe-btn-14">SEND</button>
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
        <?php // $this->load->view('frontend/footer');?>
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

    <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery.form.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/lib/jquery.validate.min.js'?>"></script>

    <script type="text/javascript" src="<?php echo base_url().'assets/Home/theme/js/scripts.js'?>"></script>


     <script type="text/javascript">
    $(document).ready(function(){
      $('#registerText').html('simpan');
      $('#loginText').html('Login');  
      //semua element dengan class text-warning akan di sembunyikan saat load
        $('.text-warning').hide();
        //untuk mengecek bahwa semua textbox tidak boleh kosong
        $('input').each(function(){ 
            $(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
                if (! $(this).val()){ //this mengacu pada text box yang sedang fokus
                  $(this).parent().find('.form-control').removeClass('is-valid');
                  $(this).parent().find('.form-control').addClass('is-invalid');
                    return get_error_text(this); //function get_error_text ada di bawah
                } else {
                    $(this).removeClass('no-valid'); 
                    $(this).parent().find('.text-warning').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
                    $(this).closest('div').removeClass('has-warning');
                    $(this).closest('div').addClass('has-success');
                    $(this).parent().find('.form-control').removeClass('is-invalid');
                    $(this).parent().find('.form-control').addClass('is-valid');
                }
            });
        });
        
         //mengecek text box username login
        $('#login_username').blur(function(){
            var login_username= $(this).val();
            var len= login_username.length;
            if(len>0){ 
                if(!valid_login_username(login_username)){ 
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("username Tidak Valid");
                    $(this).parent().find('.form-control').removeClass('is-valid');
                    $(this).parent().find('.form-control').addClass('is-invalid');
                    return apply_feedback_error(this);
                } else if(len>30) {
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal karakter 30");
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        return apply_feedback_error(this);
                }
            } 
        });

        //mengecek password login
        $('#login_password').blur(function(){
            var login_password=$(this).val();
            var len=login_password.length;
            if (len>0 && len<3) {
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("password minimal 8 karakter");
                return apply_feedback_error(this);
            } else {
                if(len>35) {
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("password maximal 35 karakter");
                    return apply_feedback_error(this);
                }
            }
        });

        //submit form validasi login
        $('#loginForm').submit(function(e){
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
                if (valid){
                $('#loginText').html('Check..');
                var url = '<?php echo base_url(); ?>';
                var user = $('#loginForm').serialize();
                var login = function(){
                  $.ajax({
                    type: 'POST',
                    url: url + 'Auth/login',
                    dataType: 'json',
                    data: user,
                    success:function(response){
                      $('#login_pesan').html(response.message);
                      $('#loginText').html('Login');
                      if(response.error){
                        $('#login_responseDiv').removeClass('alert-success').addClass('alert-danger').show();
                      }
                      else{
                        $('#login_responseDiv').removeClass('alert-danger').addClass('alert-success').show();
                        $('#loginForm')[0].reset();
                        setTimeout(function(){
                          if(response.produsen){
                            window.location = "<?= base_url('ProdusenMainPage/index') ?>";
                          }
                          else if(response.konsumen){
                            window.location = "<?= base_url('KonsumenMainPage/index') ?>";
                          }
                          else if(response.admin){
                            window.location = "<?= base_url('admin/Home/index') ?>";
                          }
                        }, 1500);
                      }
                    }
                  });
                };
              }
              setTimeout(login, 1000);
        });

        $(document).on('click', '#clearMsg', function(){
        $('#responseDiv').hide();
        });
    });

   
    //fungsi cek username
    function valid_login_username(login_username) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(login_username);
    }
    //menerapkan gaya validasi form bootstrap saat terjadi eror
    function apply_feedback_error(textbox){
        $(textbox).addClass('no-valid'); //menambah class no valid
        $(textbox).parent().find('.text-warning').show();
        $(textbox).closest('div').removeClass('has-success');
        $(textbox).closest('div').addClass('has-warning');
        $(textbox).parent().find('.form-control').removeClass('is-valid');
        $(textbox).parent().find('.form-control').addClass('is-invalid');
    }

    //untuk mendapat eror teks saat textbox kosong, digunakan saat submit form dan blur fungsi
    function get_error_text(textbox){
        $(textbox).parent().find('.text-warning').text("");
        $(textbox).parent().find('.text-warning').text("Text box ini tidak boleh kosong");
        $(this).parent().find('.form-control').removeClass('is-valid');
        $(this).parent().find('.form-control').addClass('is-invalid');
        return apply_feedback_error(textbox);
    }


    
</script>
</body>
</html>