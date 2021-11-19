
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">E-Tendering Kerajian Khas Bali</h1>
            </div>
            <div class="col-md-5">
              <ul class="breadcrumb d-flex justify-content-end">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Category with left sidebar</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="content">
        <div class="container">
          <div class="row bar">
            <div class="col-md-3">
              <!-- MENUS AND FILTERS-->
              <div class="panel panel-default sidebar-menu" style="border-right: 1px solid #f1f1f1">
                <div class="panel-heading">
                  <h3 class="h4 panel-title">Menu</h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Tender </span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="<?php echo base_url('Produsen/index')  ?>" class="nav-link">Dashboard</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('Produsen/list_lamaran')  ?>" class="nav-link">Lamaran</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('Produsen/list_permintaan')  ?>" class="nav-link">Permintaan</a></li>
                        <li class="nav-item"><a href="<?php echo base_url('Produsen/list_pengerjaan')  ?>" class="nav-link">pengerjaan</a></li>
                        <li class="nav-item"><a href="<?= base_url('Produsen/progres_tender') ?>" class="nav-link">Progres</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Profile  </span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="<?= base_url('Produsen/profile') ?>" class="nav-link">My Profile</a></li>
                        <li class="nav-item"><a href="<?= base_url('Produsen/pt_profile') ?>" class="nav-link">PT Profile</a></li>
                        <li class="nav-item"><a href="<?= base_url('Produsen/change_password_produsen') ?>" class="nav-link">Change Password</a></li>
                      </ul>
                    </li>
                     <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-between"><span>Sistem  </span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="<?= base_url('Produsen/profile') ?>" class="nav-link">Laporan</a></li>
                        <li class="nav-item"><a href="<?= base_url('Produsen/logout') ?>" class="nav-link">Logout</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>           
            </div>