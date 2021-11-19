<header>
    <style type="text/css">
        .form{
            font-size: 11px !important;
        }
        .card{
            border:5px !important;
        }
    </style>
</header>
<!-- page content -->
   <div class="right_col" role="main">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                  <h5><b>Edit Data Admin</b></h5>
                     <div class="clearfix"></div>
                </div>
                  <div class="x_content">
                    <div class="row">
                        <!--Section: Block Content-->
                        <div class="card" style="height: 500px; background-color: #f2f2f2;" >
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <?php 
                                        error_reporting(0);
                                        $id_produsen   = $data_produsen->id_produsen;
                                        $query      = $this->db->query("SELECT * FROM tb_produsen WHERE id_produsen='$id_produsen'");
                                        $data       = $query->row_array();
                                    ?>
                                    <img src="<?php echo base_url().'assets/Gambar/users/'.$data['foto']; ?>" class="card-img img-thumbnail" style="width: 400px; height: 450px;">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title"><b class="text-capitalize"> <?php echo $data_produsen->nama_pt ?></b></h5>
                                        <p class="card-text"><small class="text-muted"><i>Perusahaan</i></small></p>
                                        <p class="text-justify" style=" padding-right:10px;"><?php echo $data_produsen->deskripsi_pt ?></p>
                                            <table class="table">
                                                <tbody >
                                                    <tr style="border: hidden !important;">
                                                      <th class="col-xs-3 form"><strong>Tanggal Bergabung</strong></th>
                                                      <td class="form"><?php echo $data_produsen->tgl_bergabung ?></td>
                                                    </tr>
                                                    <tr style="border: hidden !important;">
                                                      <th class="col-xs-3 form"><strong>Kode NPWP</strong></th>
                                                      <td class="form"><?php echo $data_produsen->kode_npwp ?></td>
                                                    </tr>
                                                     <tr style="border: hidden !important;">
                                                      <th class="col-xs-3 form"><strong>Proyek Selesai</strong></th>
                                                      <td class="form"><?php echo $data_produsen->proyek_selesai ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        <hr style="border: 1px solid #cccccc;">
                                        <p class="card-text"><small class="text-muted"><i>Data Individu</i></small></p>
                                            <table class="table">
                                              <tbody >
                                                <tr style="border: hidden !important;">
                                                    <th class="col-xs-3 form"><strong>Nama</strong></th>
                                                    <td class="form"><?php echo $data_produsen->nama ?></td>
                                                </tr>
                                                <tr style="border: hidden !important;">
                                                    <th class="col-xs-3 form"><strong>Username</strong></th>
                                                    <td class="form"><?php echo $data_produsen->username ?></td>
                                                </tr>
                                                <tr style="border: hidden !important;">
                                                    <th class="col-xs-3 form"><strong>Alamat</strong></th>
                                                    <td class="form"><?php echo $data_produsen->alamat ?></td>
                                                </tr>
                                                <tr style="border: hidden !important;">
                                                    <th class="col-xs-3 form"><strong>Kota</strong></th>
                                                    <td class="form"><?php echo $data_produsen->kota ?></td>
                                                </tr>
                                                <tr style="border: hidden !important;">
                                                    <th class="col-xs-3 form"><strong>No Telepon</strong></th>
                                                    <td class="form"><?php echo $data_produsen->np_tlp ?></td>
                                                </tr>
                                                <tr style="border: hidden !important;">
                                                    <th class="col-xs-3 form"><strong>Email</strong></th>
                                                    <td class="form"><?php echo $data_produsen->email ?></td>
                                                </tr>
                                              </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ln_solid"></div>
                                <div class="form-group">
                                    <button class="btn btn-warning btn-sm" type="button" onclick="location.href='<?php echo base_url();?>page/view_produsen'">Kembali</button>
                                </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>




