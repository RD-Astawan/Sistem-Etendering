<!-- page content -->
   <div class="right_col" role="main">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_title">
                  <h5><b>Detail Data Tender</b></h5>
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
                                             <label>Judul Tender</label>
                                             <input type="text" value="<?php echo $data_view_tender->tittle ?>" class="form-control textbox" readonly>
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                              <label for="exampleFormControlTextarea1">Deskripsi Tender</label>
                                              <textarea class="form-control" rows="3" readonly><?php echo $data_view_tender->deskripsi ?></textarea>
                                            </div>

                                          <div class="form-group">
                                             <label>Deadline Tender</label>
                                             <input type="text" value="<?php echo $data_view_tender->deadline ?>" class="form-control" readonly>
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Username Konsumen</label>
                                             <input type="text" value="<?php echo $data_view_tender->username_konsumen ?>" class="form-control" readonly>
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Tanggal Awal Tender</label>
                                             <input type="text" class="form-control" value="<?php echo $data_view_tender->tanggal_buka ?>" readonly>
                                             <span class="text-warning" ></span>
                                          </div>

                                          <div class="form-group">
                                             <label>Tanggal Tutup Tender</label>
                                             <input type="text" class="form-control" value="<?php echo $data_view_tender->tanggal_tutup ?>" readonly>
                                             <span class="text-warning" ></span>
                                          </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                  <?php 
                                      error_reporting(0);
                                      $id_tender   = $data_view_tender->id_tender;
                                      $query      = $this->db->query("SELECT * FROM tb_tender WHERE id_tender='$id_tender'");
                                      $data       = $query->row_array();
                                  ?>
                                  <img src="<?php echo base_url().'assets/Gambar/tender/'.$data['gambar']; ?>" class="card-img img-thumbnail" style="width: 310px; height: 352px; margin-left: 7px; margin-top: 28px;">
                              </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="ln_solid"></div>
                                 <div class="form-group" style="margin-left: 15px;">
                                    <button class="btn btn-warning btn-sm" type="button" onclick="location.href='<?php echo base_url();?>page/view_tender'">Kembali</button>
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



