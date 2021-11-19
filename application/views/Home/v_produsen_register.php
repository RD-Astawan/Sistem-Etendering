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
               <div class="row">
                  <div class="text" style="margin-top: -30px;">
                                <h2>REGISTER PRODUSEN</h2>
                                <p>Masukkan data diri dengan benar dan lengkap serta valid</p><br />
                              </div>
               </div>
                <div class="contact">
                    <div class="row">
                     <div id="responseDiv" class="alert text-center" style=" display:none;">
                                <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
                                <strong><span id="pesan"></span></strong>
                              </div> 


                                <form id="Form_register_produsen">
                                    <div class="col-md-6 col-lg-5">
                                        
                                    <div class="contact-form">
                                    <div class="row">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" class="field-text textbox"  name="produsen_nama" id="produsen_nama" placeholder="Masukan Nama Lengkap" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Nama PT/UD</label>
                                            <input type="text" class="field-text textbox"  name="produsen_nama_pt" id="produsen_nama_pt" placeholder="Masukan Nama Perusahaan" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="text" class="field-text textbox"  name="produsen_email" id="produsen_email" placeholder="Masukan Nama Email" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">No Tlp</label>
                                            <input type="text" class="field-text textbox"  name="produsen_no_tlp" id="produsen_no_tlp" placeholder="Masukan No Tlp" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>
                                    </div>
                                
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-5 col-lg-offset-1">
                            <div class="contact-form">

                                    <div class="row">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Kode NPWP</label>
                                            <input type="text" class="field-text textbox"  name="produsen_kode_npwp" id="produsen_kode_npwp" placeholder="Masukan kode NPWP" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">username</label>
                                            <input type="text" class="field-text textbox"  name="produsen_username" id="produsen_username" placeholder="Masukan Username" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input type="password" class="field-text textbox"  name="produsen_password" id="produsen_password" placeholder="Masukan Password" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                            <label for="exampleInputEmail1">Konfirmasi Password</label>
                                            <input type="password" class="field-text textbox"  name="produsen_conf_password" id="produsen_conf_password" placeholder="Masukan Konfiamasi Password" style="margin-top: -2px !important;">
                                            <i class="form-control-feedback"></i>
                                            <span class="text-warning" ></span>
                                          </div>
                                       
                                        <div align="right">
                                            <button type="submit" class="awe-btn awe-btn-14">SEND</button>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                     </form>
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
        //mengecek textbox Nama Valid Atau Tidak
        $('#produsen_nama').blur(function(){
            var nama= $(this).val();
            var len= nama.length;
            if(len>0){ //jika ada isinya
                if(!valid_nama(nama)){ //jika nama tidak valid
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("nama tidak valid");
                    $(this).parent().find('.form-control').removeClass('is-valid');
                    $(this).parent().find('.form-control').addClass('is-invalid');
                    return apply_feedback_error(this);
                } else {
                    if (len>30){ //jika karakter >30
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("maximal karakter 30");
                        return apply_feedback_error(this);
                    }
                }
            } 
        });

        //mengecek textbox Register Nama PT/UD Valid Atau Tidak
        $('#produsen_nama_pt').blur(function(){
            var register_nama_pt = $(this).val();
            var len= register_nama_pt.length;
            if(len>30){ //jika ada isinya
                  $(this).parent().find('.text-warning').text("");
                  $(this).parent().find('.text-warning').text("Maximal karakter 30");
                  return apply_feedback_error(this);
                }
        });


        //mengecek text box email
        $('#produsen_email').blur(function(){
            
            var email=$(this).val();
            var len= email.length;
            if(len>0){ 
                if(!valid_email(email)){ 
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("E-mail Tidak Valid (ex: aaaa@yahoo.co.id)");
                    return apply_feedback_error(this);
                } else {
                    if (len>30){ 
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal Karakter 30");
                        return apply_feedback_error(this);
                    } else {
                        var valid = false;
                        $.ajax({
                         url: "<?php echo base_url('Auth/checkemail')?>",
                         type: "POST",
                         data: "email="+email,
                         dataType: "text",
                         success: function(data){
                                   if (data==0){ //pada file check email.php, apabila email sudah ada di database makan akan mengembalikan nilai 0
                                  $('#email').parent().find('.text-warning').text("");
                                  $('#email').parent().find('.text-warning').text("email sudah ada");
                                  return apply_feedback_error('#email');
                                   }
                                     }
                            });
                        }
                }
            } 
        });

        //mengecek nomer hp
        $('#produsen_no_tlp').blur(function(){
            var no_tlp=$(this).val();
            var len=no_tlp.length;
            if (len>0 && len<=10 && valid_no_tlp(no_tlp)){
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("nomer HP terlalu pendek");
                $(this).parent().find('.form-control').removeClass('is-valid');
                $(this).parent().find('.form-control').addClass('is-invalid');
                return apply_feedback_error(this);
            } else {
                if(len>0 && !valid_no_tlp(no_tlp)){
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("format nomer hp tidak sah.(ex: +6285736262623)");
                    $(this).parent().find('.form-control').removeClass('is-valid');
                    $(this).parent().find('.form-control').addClass('is-invalid');
                    return apply_feedback_error(this);
                } else {
                    if (len >13){
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Nomer HP terlalu Panjang");
                        return apply_feedback_error(this);
                    }
                }
            }
        });

        //Mengecek Kode NPWP
        $('#produsen_kode_npwp').blur(function(){
            var register_kode_npwp = $(this).val();
            var len=register_kode_npwp.length;
            if (len>0 && len<=14 && valid_register_kode_npwp(register_kode_npwp)){
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("Kode NPWP terlalu pendek");
                $(this).parent().find('.form-control').removeClass('is-valid');
                $(this).parent().find('.form-control').addClass('is-invalid');
                return apply_feedback_error(this);
            } else {
                if(len>0 && !valid_register_kode_npwp(register_kode_npwp)){
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Format kode NPWP tidak sah.(ex: 118573626262348)");
                    $(this).parent().find('.form-control').removeClass('is-valid');
                    $(this).parent().find('.form-control').addClass('is-invalid');
                    return apply_feedback_error(this);
                } else {
                    if (len >15){
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Kode NPWP terlalu Panjang");
                        return apply_feedback_error(this);
                    }
                }
            }
        });

        //mengecek text box username
        $('#produsen_username').blur(function(){
            var username= $(this).val();
            var len= username.length;
            if(len>0){ 
                if(!valid_username(username)){ 
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("username Tidak Valid (gunakan hurup!)");
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
                    } else {
                        var valid = false;
                        $.ajax({
                         url: "<?php echo base_url('Auth/check_username_produsen')?>",
                         type: "POST",
                         data: "username="+username,
                         dataType: "text",
                         success: function(data){
                                  if (data==0){ //pada controler auth fungsi check username, apabila email sudah ada di database makan akan mengembalikan nilai 0
                                  $('#produsen_username').parent().find('.text-warning').text("");
                                  $('#produsen_username').parent().find('.text-warning').text("username sudah ada");
                                  return apply_feedback_error('#produsen_username');
                                   }
                                     }
                            });
                        }
                }
            } 
        });

        //mengecek password
        $('#produsen_password').blur(function(){
            var password=$(this).val();
            var len=password.length;
            if (len>0 && len<8) {
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
        //mengecek konfirmasi password
        $('#produsen_conf_password').blur(function(){
            var pass = $("#produsen_password").val();
            var conf=$(this).val();
            var len=conf.length;
            if (len>0 && pass!==conf) {
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("konfirmasi password tidak sama dengan password!");
                return apply_feedback_error(this);
            }
        });

        

        
        
        //submit form validasi
        $('#Form_register_produsen').submit(function(e){
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
                var url = '<?php echo base_url(); ?>';
                var user = $('#Form_register_produsen').serialize();
                var register = function(){
                  $.ajax({
                    type: 'POST',
                    url: url + 'Auth/register_produsen',
                    dataType: 'json',
                    data: user,
                    success:function(response){
                      $('#pesan').html(response.message);
                      if(response.error){
                        $('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
                      }
                      else{
                        $('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
                        $('#Form_register_produsen')[0].reset();
                      }
                    }
                  });
                };
              }
              setTimeout(register, 1000);

              setTimeout(function(){
                  $('#responseDiv').hide();
              }, 4000);
        });


        $(document).on('click', '#clearMsg', function(){
        $('#responseDiv').hide();
        });
    });

    //fungsi cek nama
    function valid_nama(nama) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(nama);
    }

    function valid_kota(kota) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(kota);
    }
    //fungsi cek tanggal lahir
    //function valid_tanggal(tanggal){
        //var pola= new RegExp(/\b\d{1,2}[\/-]\d{1,2}[\/-]\d{4}\b/);
        //return pola.test(tanggal);
    //}
    //fungsi cek email
    function valid_email(email){
        var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
        return pola.test(email);
    }
    //fungsi cek phone 
    function valid_no_tlp(no_tlp){
        var pola = new RegExp(/^[0-9-+]+$/);
        return pola.test(no_tlp);
    }

    //fungsi cek username
    function valid_username(username) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(username);
    }
    //fungsi cek username
    function valid_login_username(login_username) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(login_username);
    }
    //fungsi cek kode npwp
    function valid_register_kode_npwp(register_kode_npwp){
        var pola = new RegExp(/^[0-9-+]+$/);
        return pola.test(register_kode_npwp);
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