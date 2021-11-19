<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Obaju : e-commerce template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/Home/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/Home/vendor/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?= base_url('assets/Home/vendor/owl.carousel/assets/owl.carousel.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/Home/vendor/owl.carousel/assets/owl.theme.default.css'); ?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url('assets/Home/css/style.default.css'); ?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url('assets/Home/css/custom.css'); ?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a href="#" class="ml-1">Get flat 35% off on orders over $50!</a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <li class="list-inline-item"><a href="register.html">Register</a></li>
                <li class="list-inline-item"><a href="contact.html">Contact</a></li>
                <li class="list-inline-item"><a href="#">Recently viewed</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
             
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.html" class="navbar-brand home"><img src="<?= base_url('assets/Home/img/logo.png'); ?>" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Men<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Clothing</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Shoes</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Accessories</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Featured</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Ladies<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Clothing</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Shoes</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Accessories</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="banner"><a href="#"><img src="img/banner.jpg" alt="" class="img img-fluid"></a></div>
                        <div class="banner"><a href="#"><img src="img/banner2.jpg" alt="" class="img img-fluid"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Template<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Shop</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="index.html" class="nav-link">Homepage</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Category - sidebar left</a></li>
                          <li class="nav-item"><a href="category-right.html" class="nav-link">Category - sidebar right</a></li>
                          <li class="nav-item"><a href="category-full.html" class="nav-link">Category - full width</a></li>
                          <li class="nav-item"><a href="detail.html" class="nav-link">Product detail</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>User</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="register.html" class="nav-link">Register / login</a></li>
                          <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li>
                          <li class="nav-item"><a href="customer-order.html" class="nav-link">Order history detail</a></li>
                          <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                          <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer account / change password</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Order process</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="basket.html" class="nav-link">Shopping cart</a></li>
                          <li class="nav-item"><a href="checkout1.html" class="nav-link">Checkout - step 1</a></li>
                          <li class="nav-item"><a href="checkout2.html" class="nav-link">Checkout - step 2</a></li>
                          <li class="nav-item"><a href="checkout3.html" class="nav-link">Checkout - step 3</a></li>
                          <li class="nav-item"><a href="checkout4.html" class="nav-link">Checkout - step 4</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Pages and blog</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing</a></li>
                          <li class="nav-item"><a href="post.html" class="nav-link">Blog Post</a></li>
                          <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                          <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                          <li class="nav-item"><a href="text-right.html" class="nav-link">Text page - right sidebar</a></li>
                          <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a></div>
            </div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">New account / Sign in</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-12">
              <div class="box">
                <h1>New account</h1>
                <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>
                <div id="responseDiv" class="alert text-center" style=" display:none;">
                                <button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
                                <span id="pesan"></span>
                              </div> 
                <hr>
                <form class="form-horizontal" id="submit">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="register_nama" id="register_nama" class="form-control textbox">
                        <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                      </div>
                    </div>
                   <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Nama PT/UD</label>
                    <input type="text" name="register_nama_pt" id="register_nama_pt" class="form-control textbox">
                    <i class="form-control-feedback"></i>
                    <span class="text-warning" ></span>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                        <label for="name">Deskripsi PT/UD</label>
                        <textarea class="form-control textbox" rows="1" name="register_deskripsi_pt" id="register_deskripsi_pt"></textarea>
                        <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                      </div>
                     
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="name">Alamat</label>
                        <input type="text" name="register_alamat" id="register_alamat"  class="form-control textbox">
                        <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                      </div>
                    </div>
                   <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Kota</label>
                    <input type="text" name="register_kota" id="register_kota" class="form-control textbox">
                    <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                  </div>
                </div>
                <div class="col-lg-4">
                      <div class="form-group">
                        <label for="name">No Tlp</label>
                        <input type="text" name="register_no_tlp" id="register_no_tlp"  class="form-control textbox">
                        <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="register_email" id="register_email" class="form-control textbox">
                        <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                      </div>
                    </div>
                   <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Kode NPWP</label>
                    <input type="text" name="register_kode_npwp" id="register_kode_npwp"  class="form-control textbox">
                    <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                  </div>
                </div>
                <div class="col-lg-4">
                       <div class="form-group">
                        <label for="register_username">Username</label>
                        <input type="text" name="register_username" id="register_username" class="form-control textbox">
                        <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="name">Password</label>
                        <input type="text" name="register_password" id="register_password"  class="form-control textbox">
                        <i class="form-control-feedback"></i>
                        <span class="text-warning" ></span>
                      </div>
                    </div>
                   <div class="col-lg-4">
                 <div style="margin-top: 22px;" class="custom-file">
                  <input type="file" name="file" class="custom-file-input" id="register_file">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                  <i class="form-control-feedback"></i>
                  <span class="text-warning" ></span>
                </div>
                </div>
                 <div class="col-lg-4">
                
                    </div>
                </div>
                <hr>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Pages</h4>
            <ul class="list-unstyled">
              <li><a href="text.html">About us</a></li>
              <li><a href="text.html">Terms and conditions</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">User section</h4>
            <ul class="list-unstyled">
              <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
              <li><a href="register.html">Regiter</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Top categories</h4>
            <h5>Men</h5>
            <ul class="list-unstyled">
              <li><a href="category.html">T-shirts</a></li>
              <li><a href="category.html">Shirts</a></li>
              <li><a href="category.html">Accessories</a></li>
            </ul>
            <h5>Ladies</h5>
            <ul class="list-unstyled">
              <li><a href="category.html">T-shirts</a></li>
              <li><a href="category.html">Skirts</a></li>
              <li><a href="category.html">Pants</a></li>
              <li><a href="category.html">Accessories</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Where to find us</h4>
            <p><strong>Obaju Ltd.</strong><br>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p><a href="contact.html">Go to contact page</a>
            <hr class="d-block d-md-none">
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Get the news</h4>
            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
              </div>
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Stay in touch</h4>
            <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class=""><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2019 Your name goes here.</p>
          </div>
          <div class="col-lg-6">
            <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/p/big-bootstrap-tutorial">Bootstrapious</a>
              <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
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

        $('textarea').each(function(){ 
            $(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
                if (! $(this).val()){ //this mengacu pada text box yang sedang fokus
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
        $('#register_nama').blur(function(){
            var register_nama= $(this).val();
            var len= register_nama.length;
            if(len>0){ //jika ada isinya
                if(!valid_register_nama(register_nama)){ //jika nama tidak valid
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Nama tidak valid");
                    return apply_feedback_error(this);
                } else {
                    if (len>30){ //jika karakter >30
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal karakter 30");
                        return apply_feedback_error(this);
                    }
                }
            } 
        });

        //mengecek textbox Register Nama PT/UD Valid Atau Tidak
        $('#register_nama_pt').blur(function(){
            var register_nama_pt = $(this).val();
            var len= register_nama_pt.length;
            if(len>30){ //jika ada isinya
                  $(this).parent().find('.text-warning').text("");
                  $(this).parent().find('.text-warning').text("Maximal karakter 30");
                  return apply_feedback_error(this);
                }
        });

        //mengecek textbox Register Deskripsi PT/UD Valid Atau Tidak
        $('#register_deskripsi_pt').blur(function(){
            var register_deskripsi_pt = $(this).val();
            var len= register_deskripsi_pt.length;
            if(len>50){ //jika ada isinya
                  $(this).parent().find('.text-warning').text("");
                  $(this).parent().find('.text-warning').text("Maximal karakter 50");
                  return apply_feedback_error(this);
                }
        });

        //mengecek textbox Kota Valid Atau Tidak
        $('#register_kota').blur(function(){
            var register_kota= $(this).val();
            var len= register_kota.length;
            if(len>0){ //jika ada isinya
                if(!valid_register_kota(register_kota)){ //jika nama tidak valid
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Nama kota tidak valid");
                    $(this).parent().find('.form-control').removeClass('is-valid');
                    $(this).parent().find('.form-control').addClass('is-invalid');
                    return apply_feedback_error(this);
                } else {
                    if (len>30){ //jika karakter >30
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal karakter 30");
                        return apply_feedback_error(this);
                    }
                }
            } 
        });

        //mengecek textbox Alamat Valid Atau Tidak
        $('#register_alamat').blur(function(){
            var register_alamat= $(this).val();
            var len= register_alamat.length;
            if(len>0){ //jika ada isinya
                    if (len>30){ //jika karakter >30
                        $(this).parent().find('.text-warning').text("");
                        $(this).parent().find('.text-warning').text("Maximal karakter 30");
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
      
           $('#register_email').blur(function(){
            var register_email = $('#register_email').val();
            var url = '<?php echo base_url(); ?>';
            var len= register_email.length;
            if(len>0){ 
                if(!valid_register_email(register_email)){ 
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
                         url: url+'Auth/register_checkemail',
                         type: "POST",
                         data: "register_email="+register_email,
                         dataType: "text",
                         success: function(data){
                                   if (data==0){ //pada file check email.php, apabila email sudah ada di database makan akan mengembalikan nilai 0
                                  $('#register_email').parent().find('.text-warning').text("");
                                  $('#register_email').parent().find('.text-warning').text("Email sudah ada");
                                  return apply_feedback_error('#register_email');
                                   }
                                     }
                            });
                        
                        }
                }
            } 
        });

        //Mengecek Kode NPWP
        $('#register_kode_npwp').blur(function(){
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
        $('#register_username').blur(function(){
            var url = '<?php echo base_url(); ?>';
            var register_username = $(this).val();
            var len = register_username.length;
            if(len>0){ 
                if(!valid_register_username(register_username)){ 
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Username Tidak Valid (gunakan hurup!)");
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
                        var url = '<?php echo base_url(); ?>';
                        $.ajax({
                         url: url+"Auth/register_checkusername",
                         type: "POST",
                         data: "register_username="+register_username,
                         dataType: "text",
                         success: function(data){
                                  if (data==0){ //pada controler auth fungsi check username, apabila email sudah ada di database makan akan mengembalikan nilai 0
                                  $('#register_username').parent().find('.text-warning').text("");
                                  $('#register_username').parent().find('.text-warning').text("Username sudah ada");
                                  return apply_feedback_error('#register_username');
                                   }
                                     }
                            });
                        }
                }
            } 
        });

        //mengecek password
        $('#register_password').blur(function(){
            var register_password = $(this).val();
            var len=register_password.length;
            if (len>0 && len<8) {
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("Password minimal 8 karakter");
                return apply_feedback_error(this);
            } else {
                if(len>35) {
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Password maximal 35 karakter");
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
        $('#register_no_tlp').blur(function(){
            var register_no_tlp=$(this).val();
            var len=register_no_tlp.length;
            if (len>0 && len<=10 && valid_register_no_tlp(register_no_tlp)){
                $(this).parent().find('.text-warning').text("");
                $(this).parent().find('.text-warning').text("Nomer HP terlalu pendek");
                $(this).parent().find('.form-control').removeClass('is-valid');
                $(this).parent().find('.form-control').addClass('is-invalid');
                return apply_feedback_error(this);
            } else {
                if(len>0 && !valid_register_no_tlp(register_no_tlp)){
                    $(this).parent().find('.text-warning').text("");
                    $(this).parent().find('.text-warning').text("Format nomer hp tidak sah.(ex: +6285736262623)");
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
        $('#produsen_registerForm').submit(function(e){
            e.preventDefault();
            var url = '<?php echo base_url(); ?>';
                  $.ajax({
                    url:url+'Auth/register_produsen',
                    type:"post",
                    data:new FormData('this'),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                  success: function(data){
                      alert("upload sukses");
                    }
                  });
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

        $('#submit').submit(function(e){
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
             $.ajax({
                 url:'<?php echo base_url();?>auth/do_upload',
                 type:"post",
                 data:new FormData(this),
                 processData:false,
                 contentType:false,
                 cache:false,
                 async:false,
                  success:function(response){
                      $('#loginText').html('Login');
                      if(response.error){
                        $('#pesan').html('Register Berhasil! Silahkan Melakukan Login untuk Masuk ke sistem E-Tendering');
                        $('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
                      }
                      else{
                        $('#pesan').html('Register Berhasil! Silahkan Melakukan Login untuk Masuk ke sistem E-Tendering');
                        $('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
                        
                      }
                    }
             });
         
           };
        });
    });

    //fungsi cek nama
    function valid_register_nama(register_nama) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(register_nama);
    }

    function valid_register_kota(kota) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(kota);
    }
    //fungsi cek tanggal lahir
    //function valid_tanggal(tanggal){
        //var pola= new RegExp(/\b\d{1,2}[\/-]\d{1,2}[\/-]\d{4}\b/);
        //return pola.test(tanggal);
    //}
    //fungsi cek email
    function valid_register_email(register_email){
        var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
        return pola.test(register_email);
    }
    //fungsi cek phone 
    function valid_register_no_tlp(register_no_tlp){
        var pola = new RegExp(/^[0-9-+]+$/);
        return pola.test(register_no_tlp);
    }

    //fungsi cek kode npwp
    function valid_register_kode_npwp(register_kode_npwp){
        var pola = new RegExp(/^[0-9-+]+$/);
        return pola.test(register_kode_npwp);
    }

    //fungsi cek username
    function valid_register_username(register_username) {
        var pola= new RegExp(/^[a-z A-Z]+$/);
        return pola.test(register_username);
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