<div class="top_nav">
   <div class="nav_menu">
      <nav>
         <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
         </div>
         <ul class="nav navbar-nav navbar-right">
            <li class="">
               <?php 
                  error_reporting(0);
                  $id_admin=$this->session->userdata('sess_id');
                  $query=$this->db->query("SELECT * FROM tb_admin WHERE id_admin='$id_admin'");
                  $data=$query->row_array();
               ?>
               <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url().'assets/Gambar/users/'.$data['foto']; ?>"><?php echo $this->session->userdata('ses_nama');?>
                  <span class=" fa fa-angle-down"></span>
               </a>
               <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="<?= base_url('page/profil') ?>"><i class="fa fa-user pull-right"></i> Profile</a></li>
                  <li><a href="<?= base_url('admin/Users/Logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
               </ul>
            </li>
            <li role="presentation" class="dropdown">
               <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
               </a>
            </li>
        </ul>
      </nav>
   </div>
</div>