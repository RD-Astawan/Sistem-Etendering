<!DOCTYPE html>
<html>
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-col-lg-6">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Login Pengguna</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              
              <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#login">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#register">Register</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="login" class="container tab-pane active"><br>
                    <!-- Tab panes -->
                            <div id="login_responseDiv" class="alert text-center" style=" display:none;">
                                <button type="button" class="close" id="login_clearMsg"><span aria-hidden="true">&times;</span></button>
                                <span id="login_pesan"></span>
                              </div> 
                              <form id="loginForm">
                                <div class="form-group">
                                  <input type="text" id="login_username" name="login_username" placeholder="username" class="form-control textbox">
                                  <i class="form-control-feedback"></i>
                                  <span class="text-warning" ></span>
                                </div>
                                  
                                <div class="form-group">
                                  <input type="password"  id="login_password" name="login_password" placeholder="password" class="form-control textbox">
                                  <i class="form-control-feedback"></i>
                                  <span class="text-warning" ></span>
                                </div>
                                  
                                  <a href="" ><p class="text-center">Lupa password? </p></a>
                                <p class="text-center">
                                  <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i><span id="loginText"></span></button>
                                </p>
                              </form>
                  </div>
                  <div id="register" class="container tab-pane fade"><br>
                     <!-- Tab panes -->
                              <div id="responseDiv" class="alert text-center" style=" display:none;">
                                <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
                                <span id="pesan"></span>
                              </div> 
                              <form id="registerForm">
                                <div class="form-group">
                                  <input type="text" name="nama" id="nama" placeholder="nama" class="form-control textbox" >
                                    <i class="form-control-feedback"></i>
                                    <span class="text-warning" ></span>
                                </div>
                                <div class="form-group">
                                  <input type="text" name="alamat" id="alamat" placeholder="alamat" class="form-control textbox" >
                                    <i class="form-control-feedback"></i>
                                    <span class="text-warning" ></span>
                                </div>
                                <div class="form-group">
                                  <input type="text" name="no_tlp" id="no_tlp" placeholder="no telepon" class="form-control textbox">
                                  <i class="form-control-feedback"></i>
                                    <span class="text-warning" ></span>
                                </div>
                                <div class="form-group">
                                  <input name="kota" id="kota" type="text" placeholder="kota" class="form-control textbox">
                                  <i class="form-control-feedback"></i>
                                    <span class="text-warning" ></span>
                                </div>
                                <div class="form-group">
                                  <input type="email" name="email" id="email" placeholder="email" class="form-control textbox">
                                  <i class="form-control-feedback"></i>
                                    <span class="text-warning" ></span>
                                </div>
                                <div class="form-group">
                                  <input type="text" name="username" id="username" placeholder="username" class="form-control textbox">
                                  <i class="form-control-feedback"></i>
                                    <span class="text-warning" ></span>
                                </div>
                                <div class="form-group">
                                  <input type="password" name="password" id="password" placeholder="password" class="form-control textbox">
                                  <i class="form-control-feedback"></i>
                                    <span class="text-warning" ></span>
                                </div>
                                <div class="form-group">
                                  <input type="password" name="conf_password" id="conf_password" placeholder="ulangi password" class="form-control textbox">
                                  <i class="form-control-feedback"></i>
                                    <span class="text-warning" ></span>
                                </div>
                                <p class="text-center">Dengan mendaftar anda telah setuju dengan ketentuan dan kebijakan E-tendring</p>
                                <p class="text-center" style="margin-top: -10px;">Ingin menjadi produsen? <a href="#" class="text-center">Daftar disini</a></p>
                                <p class="text-center">
                                  <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in"></i><span id="registerText"></span></button>
                                </p>
                              </form>
                  </div>
                </div>
                </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->


    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <?php 
                  foreach($slider as $i):
                ?>
                <div class="item"><img src="<?php echo base_url().'assets/Gambar/slider/'.$i->gambar;?>" alt="" class="img-fluid"></div>
              <?php endforeach; ?>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">We love our customers</a></h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Best prices</a></h3>
                  <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% satisfaction guaranteed</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Hot this week</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">White Blouse Armani</a></h3>
                    <p class="price"> 
                      <del>$280</del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Black Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Black Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">White Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="img/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="img/product1_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Fur coat</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">White Blouse Armani</a></h3>
                    <p class="price"> 
                      <del>$280</del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="img/product3.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="img/product3_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product3.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">Black Blouse Versace</a></h3>
                    <p class="price"> 
                      <del></del>$143.00
                    </p>
                  </div>
                  <!-- /.text-->
                </div>
                <!-- /.product-->
              </div>
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        <div class="container">
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>Get Inspired</h3>
              <p class="lead">Get the inspiration from our world class designers</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="img/getinspired1.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="img/getinspired2.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="img/getinspired3.jpg" alt="Get inspired" class="img-fluid"></a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
        -->
        <div class="box text-center">
          <div class="container">
            <div class="col-md-12">
              <h3 class="text-uppercase">From our blog</h3>
              <p class="lead mb-0">What's new in the world of fashion? <a href="blog.html">Check our blog!</a></p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="col-md-12">
            <div id="blog-homepage" class="row">
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Fashion now</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Who is who - example blog post</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
      </div>
    </div>
    






    
    <!-- JavaScript files-->
    <script src="<?= base_url('assets/Home/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/Home/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/Home/vendor/jquery.cookie/jquery.cookie.js'); ?>"> </script>
    <script src="<?= base_url('assets/Home/vendor/owl.carousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('assets/Home/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js'); ?>"></script>
    <script src="<?= base_url('assets/Home/js/front.js'); ?>"></script>

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
        //mengecek textbox Nama Valid Atau Tidak
        $('#nama').blur(function(){
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

        //mengecek textbox Kota Valid Atau Tidak
        $('#kota').blur(function(){
            var kota= $(this).val();
            var len= kota.length;
            if(len>0){ //jika ada isinya
                if(!valid_kota(kota)){ //jika nama tidak valid
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("nama kota tidak valid");
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

        //mengecek textbox Alamat Valid Atau Tidak
        $('#alamat').blur(function(){
            var alamat= $(this).val();
            var len= alamat.length;
            if(len>0){ //jika ada isinya
                    if (len>30){ //jika karakter >30
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("maximal karakter 30");
                        $(this).parent().find('.form-control').removeClass('is-valid');
                        $(this).parent().find('.form-control').addClass('is-invalid');
                        return apply_feedback_error(this);
                    }
            } 
        });
        //Mengecek textbox tanggal lahir
        //$('#tgl_lahir').blur(function(){
            //var tgl= $(this).val();
            //var len= tgl.length;
            //if(len>0){
                //if(!valid_tanggal(tgl)){
                    //$(this).parent().find('.text-warning').text("");
                    //$(this).parent().find('.text-warning').text("Format Tanggal yang diperbolehkan mm-dd-yyy, mm/dd/yyyy atau dd/mm/yyyy, dd-mm-yyyy");
                    //return apply_feedback_error(this);
                //}
            //}
        //});
        //mengecek text box email
        $('#email').blur(function(){
            
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
                         url: "Auth/checkemail",
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

        //mengecek text box username
        $('#username').blur(function(){
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
                         url: "Auth/checkusername",
                         type: "POST",
                         data: "username="+username,
                         dataType: "text",
                         success: function(data){
                                  if (data==0){ //pada controler auth fungsi check username, apabila email sudah ada di database makan akan mengembalikan nilai 0
                                  $('#username').parent().find('.text-warning').text("");
                                  $('#username').parent().find('.text-warning').text("username sudah ada");
                                  return apply_feedback_error('#username');
                                   }
                                     }
                            });
                        }
                }
            } 
        });

        //mengecek password
        $('#password').blur(function(){
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
        $('#conf_password').blur(function(){
            var pass = $("#password").val();
            var conf=$(this).val();
            var len=conf.length;
            if (len>0 && pass!==conf) {
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("konfirmasi password tidak sama dengan password!");
                return apply_feedback_error(this);
            }
        });

        //mengecek nomer hp
        $('#no_tlp').blur(function(){
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
        //submit form validasi
        $('#registerForm').submit(function(e){
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
                $('#registerText').html('Proses...');
                var url = '<?php echo base_url(); ?>';
                var user = $('#registerForm').serialize();
                var register = function(){
                  $.ajax({
                    type: 'POST',
                    url: url + 'Auth/register',
                    dataType: 'json',
                    data: user,
                    success:function(response){
                      $('#pesan').html(response.message);
                      $('#registerText').html('simpan');
                      if(response.error){
                        $('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
                      }
                      else{
                        $('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
                        $('#registerForm')[0].reset();
                      }
                    }
                  });
                };
              }
              setTimeout(register, 1000);
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
                            window.location = "Produsen/index";
                          }
                          else if(response.konsumen){
                            window.location = "Konsumen/index";
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
        $(textbox).parent().find('.text-warning').text("text box ini tidak boleh kosong");
        $(this).parent().find('.form-control').removeClass('is-valid');
        $(this).parent().find('.form-control').addClass('is-invalid');
        return apply_feedback_error(textbox);
    }


    
        </script>
  </body>
</html>