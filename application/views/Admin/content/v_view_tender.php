<!-- page content -->
<div class="right_col" role="main">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h3><b>Data Tender</b></h3>
               <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th style="width: 5%;"><center>#</center></th>
                        <th style="width: 10%;"><center>Judul Tender</center></th>
                        <th style="width: 10%;"><center><center>Deadline</center></th>
                        <th style="width: 10%;"><center>User Produsen</center></th>
                        <th style="width: 20%;"><center>Tanggal Buka/Tutup</center></th>
                        <th style="width: 10%;"><center>Status Tender</center></th>
                        <th><center>Aksi</center></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $no=0;
                        foreach ($dataTender as $row) :
                        $no++;
                     ?>
                     <tr>
                        <td style="vertical-align: middle;"><center><?php echo $no;?></center></td>
                        <td style="vertical-align: middle;"><?php echo $row->tittle;?></td>
                        <td style="vertical-align: middle;"><center><?php echo $row->deadline;?></center></td>
                        <td style="vertical-align: middle;"><center><?php echo $row->username_konsumen;?></center></td>
                        <td style="vertical-align: middle;"><center><?php echo $row->tanggal_buka;?> / <?php echo $row->tanggal_tutup;?></center></td>
                        <td style="vertical-align: middle;">
                           <?php
                              $tgl_sekarang  = date('Y-m-d');
                              if($row->tanggal_tutup < $tgl_sekarang && $row->status_tender == 'Non-aktif'){
                                 ?>
                                    <center><button class="btn btn-success btn-xs" disabled style="width: 80px;">Non_Aktif</button></center>
                                 <?php
                                 }
                              else{
                                 ?>
                                    <center><button class="btn btn-warning btn-xs" disabled style="width: 80px;">Aktif</button></center>
                                 <?php
                              }
                           ?>
                        </td>
                        <td>
                            <center><a href="<?php echo base_url() ?>page/view_detail_tender/<?php echo $row->id_tender ?>" class="btn btn-primary btn-sm"><span class="fa fa-pencil"></span></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm item_hapus" data="<?php echo $row->id_tender ?>"><span class="fa fa-trash"></span></a></center>
                        </td>
                        </tr>
                     <?php endforeach;?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<!--MODAL HAPUS-->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Data Admin</h4>
         </div>
         <form class="form-horizontal">
            <div class="modal-body">             
               <input type="hidden" name="kode" id="textkode" value="">
               <div class="alert alert-success"><p>Apakah Anda yakin mau memhapus Data ini?</p></div>              
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
               <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!--END MODAL HAPUS-->

<script type="text/javascript">
   $(document).ready(function(){
   //GET HAPUS
      $('.item_hapus').on('click',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
      });

      $('#btn_hapus').on('click',function(){
         var kode=$('#textkode').val();
         $.ajax({
         type : "POST",
         url  : "<?php echo base_url('admin/Tender/delete_tender')?>",
         dataType : "JSON",
            data : {kode: kode},
            success: function(data){
               $('#ModalHapus').modal('hide');
               toastr.options.onHidden = function() { window.location.href = 'view_tender'; }
               toastr.success('Data tender berhasil dihapus.', 'Berhasil!');
                         
            }
         });
         return false;
      });
   });
</script>


