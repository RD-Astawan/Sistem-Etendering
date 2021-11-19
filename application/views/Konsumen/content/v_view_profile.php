<style type="text/css">
   body {
    background-color: #f3f6f8;
    margin-top: 20px;
  }
  
  .thumb-lg {
    height: 100px;
    width: 100px;
  }
  
  .profile-user-box {
    position: relative;
    border-radius: 5px;
  }
  
  .bg-custom {
    /*background-color: #02c0ce !important; */
    background-image: url(<?php echo base_url('assets/Gambar/gambaran/profile-bg.jpg'); ?>);
  }
  
  .profile-user-box {
    position: relative;
    border-radius: 5px;
  }
  
  .card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
  }
  
  .inbox-widget .inbox-item img {
    width: 40px;
  }
  
  .inbox-widget .inbox-item {
    border-bottom: 1px solid #f3f6f8;
    overflow: hidden;
    padding: 10px 0;
    position: relative;
  }
  
  .inbox-widget .inbox-item .inbox-item-img {
    display: block;
    float: left;
    margin-right: 15px;
    width: 40px;
  }
  
  .inbox-widget .inbox-item img {
    width: 40px;
  }
  
  .inbox-widget .inbox-item .inbox-item-author {
    color: #313a46;
    display: block;
    margin: 0;
  }
  
  .inbox-widget .inbox-item .inbox-item-text {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0;
  }
  
  .inbox-widget .inbox-item .inbox-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 12px;
  }
  
  .comment-list .comment-box-item {
    position: relative;
  }
  
  .comment-list .comment-box-item .commnet-item-date {
    color: #98a6ad;
    font-size: 11px;
    position: absolute;
    right: 7px;
    top: 2px;
  }
  
  .comment-list .comment-box-item .commnet-item-msg {
    color: #313a46;
    display: block;
    margin: 10px 0;
    font-weight: 400;
    font-size: 15px;
    line-height: 24px;
  }
  
  .comment-list .comment-box-item .commnet-item-user {
    color: #98a6ad;
    display: block;
    font-size: 14px;
    margin: 0;
  }
  
  .comment-list a + a {
    margin-top: 15px;
    display: block;
  }
  
  .ribbon-box .ribbon-primary {
    background: #2d7bf4;
  }
  
  .ribbon-box .ribbon {
    position: relative;
    float: left;
    clear: both;
    padding: 5px 12px 5px 12px;
    margin-left: -30px;
    margin-bottom: 15px;
    font-family: Rubik, sans-serif;
    -webkit-box-shadow: 2px 5px 10px rgba(49, 58, 70, 0.15);
    -o-box-shadow: 2px 5px 10px rgba(49, 58, 70, 0.15);
    box-shadow: 2px 5px 10px rgba(49, 58, 70, 0.15);
    color: #fff;
    font-size: 13px;
  }
  
  .text-custom {
    color: #02c0ce !important;
  }
  
  .badge-custom {
    background: #02c0ce;
    color: #fff;
  }
  
  .badge {
    font-family: Rubik, sans-serif;
    -webkit-box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0 0 rgba(0, 0, 0, 0.02);
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.06), 0 1px 0 0 rgba(0, 0, 0, 0.02);
    padding: 0.35em 0.5em;
    font-weight: 500;
  }
  
  .text-muted {
    color: #98a6ad !important;
  }
  
  .font-13 {
    font-size: 13px !important;
  }
</style>
<div class="loader_bg">
   <div class="loader"></div>
</div>
<!-- MAIN -->
<div class="main">
   <!-- MAIN CONTENT -->
   <div class="main-content">
      <div class="container-fluid">
         <!-- OVERVIEW -->
         <div class="panel panel-headline" style="background-color: #e6e6e6 !important;"> <!-- option f2ff2 color -->
        <div class="row">
            <div class="col-sm-12">
                <!-- meta -->
                <div class="profile-user-box card-box bg-custom">
                    <div class="row">
                        <?php 
                           error_reporting(0);
                           $id_konsumen = $this->session->userdata('ses_id');
                           $query       = $this->db->query("SELECT * FROM tb_konsumen WHERE id_konsumen='$id_konsumen'");
                           $data        = $query->row_array();
                        ?>
                        <div class="col-sm-6"><span class="float-left mr-3"><img src="<?php echo base_url().'assets/Gambar/users/'.$data['foto'] ?>" alt="" class="thumb-lg rounded-circle"></span>
                            <div class="media-body text-white">
                                <h4 class="mt-1 mb-1 font-18" style="color: #fff;"><?php echo $data['nama']; ?></h4>
                                <p class="text-light mb-0" style="color: #fff; margin-top: -10px;"><?php echo $data['kota']; ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="text-right">
                                 <a href="<?php echo base_url() ?>kon_page/edit_profile/<?php echo $row['id_konsumen']; ?>"><button type="button" class="btn btn-sm btn-info">EDIT PROFILE</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ meta -->
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-lg-4">
                <!-- Personal-Information -->
                <div class="card-box">
                    <h4 class="header-title mt-0">Informasi Pribadi</h4>
                    <div class="panel-body">
                        <p class="text-muted font-13" style="text-align:;">Hye, I’m Soeng Souy residing in this beautiful world. I create websites and mobile apps with great UX and UI design.</p>
                        <hr>
                        <div class="text-left">
                            <p class="text-muted font-13"><strong>Nama Lengkap :</strong> <span class="m-l-15"><?php echo $data['nama']; ?></span></p>
                            <p class="text-muted font-13"><strong>No Tlp :</strong><span class="m-l-15"><?php echo $data['no_tlp']; ?></span></p>
                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?php echo $data['email']; ?></span></p>
                            <p class="text-muted font-13"><strong>Alamat :</strong> <span class="m-l-15"><?php echo $data['alamat']; ?></span></p>
                            <p class="text-muted font-13"><strong>Username :</strong> <span class="m-l-15"><?php echo $data['username']; ?></span></p>
                            
                        </div>
                        <ul class="social-links list-inline mt-4 mb-0">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card-box tilebox-one"><i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0" style="text-align: center;">Jumlah Tender yg Didaftarkan</h6>
                            <h2 class="" data-plugin="counterup" style="text-align: center;"><?php echo $jum_tender_didaftarkan->num_rows(); ?></h2>
                            <center><span class="badge badge-custom">Tender Tedaftar</span></center></div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-4">
                        <div class="card-box tilebox-one"><i class="icon-paypal float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0" style="text-align: center;">Jumlah Tender yg Dikerjakan</h6>
                            <h2 class="" style="text-align: center;"><span data-plugin="counterup"><?php echo $jum_tender_dikerjakan->num_rows(); ?></span></h2><center><span class="badge badge-danger">Tender Dikerjakan</span></center></div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-4">
                        <div class="card-box tilebox-one"><i class="icon-rocket float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase mt-0" style="text-align: center;">Jumlah Tender yg Selesai Dikerjakan</h6>
                            <h2 class="" data-plugin="counterup" style="text-align: center;"><?php echo $jum_tender_selesai->num_rows(); ?></h2><center><span class="badge badge-custom">Tender Selesai</span></center></div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <div class="card-box">
                    <h4 class="header-title mb-3">Tender Saya</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Tender</th>
                                    <th>Tanggal Buka</th>
                                    <th>Tanggal Tutup</th>
                                    <th>Status Tender</th>
                                    <th>Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $nomer = 1;
                                    foreach ($tender as $data) {
                                    
                                ?>
                                <tr>
                                    <td><?php echo $nomer; ?></td>
                                    <td><?php echo $data->tittle; ?></td>
                                    <td align="center"><?php echo $data->tanggal_buka; ?></td>
                                    <td align="center"><?php echo $data->tanggal_tutup; ?></td>
                                    <td align="center">
                                        <?php if($data->id_status_tender == 1){
                                            ?>
                                            <span class="label label-info"><?php echo $data->status_tender; ?></span>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <span class="label label-warning"><?php echo $data->status_tender; ?></span>
                                            <?php
                                        } 
                                        ?>
                                        
                                    </td>
                                    <td align="center"><?php echo $data->deadline; ?></td>
                                </tr>
                                    <?php $nomer++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
       </div>
   </div>
   <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

<script type="text/javascript">
   // $(document).ready(function() {
   //    $('#example').DataTable( {
   //       "paging":   true,
   //       "ordering": false,
   //       "searching": true,
   //       "bLengthChange": false,
   //       "info":     false
   //    });
   // });
</script>

    



























