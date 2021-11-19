<!-- page content -->
   <div class="right_col" role="main">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_title">
                  <h5><b>Detail Data Konsumen</b></h5>
                     <div class="clearfix"></div>
               </div>
                  <div class="x_content">
                     <p class="text-muted font-13 m-b-30"></p>
              
                     <div class="row">
                        <div class="card mb-3" style="max-width: 100%;">
                           <div class="row no-gutters">
                              <div class="col-md-6">
                                 <div class="card-body">
                                    <div class="x_content">
                                      <form id="form_edit_admin" enctype="multipart/form-data">                     
                                          <div class="form-group">
                                             <label>Nama Lengkap</label>
                                             <input type="text" value="<?php echo $data_konsumen->nama ?>" class="form-control" readonly>
                                          </div>
                                          <div class="form-group">
                                             <label>Username</label>
                                             <input type="text" value="<?php echo $data_konsumen->username ?>" class="form-control" readonly>
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Alamat</label>
                                             <input type="text" value="<?php echo $data_konsumen->alamat ?>" class="form-control" readonly>
                                          </div>

                                          <div class="form-group">
                                             <label>kota</label>
                                             <input type="text" value="<?php echo $data_konsumen->kota ?>" class="form-control" readonly>
                                          </div>

                                          <div class="form-group">
                                             <label>No Telepon</label>
                                             <input type="text" value="<?php echo $data_konsumen->no_tlp ?>" class="form-control" readonly>
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Email</label>
                                             <input type="text" value="<?php echo $data_konsumen->email ?>" class="form-control" readonly>
                                          </div>

                                          <div class="form-group">
                                             <label>kota</label>
                                             <input type="text" value="<?php echo $data_konsumen->kota ?>" class="form-control" readonly>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                  <?php 
                                      error_reporting(0);
                                      $id_konsumen   = $data_konsumen->id_konsumen;
                                      $query      = $this->db->query("SELECT * FROM tb_konsumen WHERE id_konsumen='$id_konsumen'");
                                      $data       = $query->row_array();
                                  ?>
                                  <img src="<?php echo base_url().'assets/Gambar/users/'.$data['foto']; ?>" class="card-img img-thumbnail" style="width: 320px; height: 372px; margin-left: 7px; margin-top: 28px;">
                              </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="ln_solid"></div>
                                 <div class="form-group" style="margin-left: 15px;">
                                    <button class="btn btn-warning btn-sm" type="button" onclick="location.href='<?php echo base_url();?>page/view_konsumen'">Kembali</button>
                                 </div>
                              </div>
                           </div>
                        </form>

                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>

