<div class="col-md-3 left_col">
   <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
         <a href="" class="site_title"><i class="fa fa-paw"></i> <span>E-tendering</span></a>
      </div>
      <div class="clearfix"></div>
         <div class="profile clearfix">
            <?php 
               error_reporting(0);
               $id_admin=$this->session->userdata('sess_id');
               $query=$this->db->query("SELECT * FROM tb_admin WHERE id_admin='$id_admin'");
               $data=$query->row_array();
            ?>
            <div class="profile_pic">
               <img src="<?php echo base_url().'assets/Gambar/users/'.$data['foto']; ?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
               <span>Welcome,</span>
               <h2><?php echo $this->session->userdata('ses_nama');?></h2>
            </div>
         </div>
         <br />
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
               <h3>Menu</h3>
               <ul class="nav side-menu">
                  <li>
                     <a href="<?= base_url('page') ?>"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li>
                     <a href="<?= base_url('page/slider') ?>"><i class="fa fa-image"></i> Slider </a>
                  </li>
                  <li>
                     <a><i class="fa fa-edit"></i> Post <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                        <li><a href="<?= base_url('page/add_post') ?>">Add New</a></li>
                        <li><a href="<?= base_url('page/view_post') ?>">Post</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="<?= base_url('page/view_tender') ?>"><i class="fa fa-desktop"></i> Tender <span class=""></span></a>
                  </li>
                  <li>
                     <a href="<?= base_url('page/view_lamaran') ?>"><i class="fa fa-table"></i> Lamaran <span class=""></span></a>
                  </li>
                  <li><a><i class="fa fa-user"></i> Users <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                        <li><a href="<?= base_url('page/view_produsen') ?>">Produsen</a></li>
                        <li><a href="<?= base_url('page/view_konsumen') ?>">Konsumen</a></li>
                        <li><a href="<?= base_url('page/view_admin') ?>">Admin</a></li>
                     </ul>
                  </li>
                  <li>
                     <a><i class="fa fa-file-image-o"></i> Overview <span class="fa fa-chevron-down"></span></a>
                     <ul class="nav child_menu">
                        <li><a href="<?= base_url('page/edit_kontak') ?>">Edit Kontak</a></li>
                        <li><a href="<?= base_url('page/edit_tentang') ?>">Edit Tentang</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="<?= base_url('page/view_log') ?>"><i class="fa fa-history"></i>Log</a>
                  </li>
               </ul>
            </div>
            <hr style="border:1px solid #2d4d6c;">
            <div class="menu_section">
               <h3>ADMIN</h3>
               <ul class="nav side-menu">
                  <li><a><i class="fa fa-users"></i> Admin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?= base_url('page/profil') ?>">My Profile</a></li>
                        <li><a href="<?= base_url('page/edit_profile') ?>">Edit Profile</a></li>
                    </ul>
                  </li>
               </ul>
            </div>
         </div>
   </div>
</div>