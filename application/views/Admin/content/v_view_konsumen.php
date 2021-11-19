<!-- page content -->
<div class="right_col" role="main">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h4><b>Data Produsen</b></h4>
               <div class="clearfix"></div>
            </div>

            <div class="x_content">
               <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th style="width: 5%;"><center>#</center></th>
                        <th style="width: 25%;"><center>Nama</center></th>
                        <th style="width: 20%;"><center>Username</center></th>
                        <th style="width: 20%;"><center>Alamat</center></th>
                        <th style="width: 15%;"><center>No tlp</center></th>
                        <th style="width: 15%;"><center>Kota</center></th>
                        <th><center>Aksi</center></th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $no=0;
                        foreach ($data_konsumen as $row) :
                        $no++;
                     ?>
                     <tr>
                        <td style="vertical-align: middle;"><center><?php echo $no;?></center></td>
                        <td style="vertical-align: middle;"><?php echo $row->nama;?></td>
                        <td style="vertical-align: middle;"><?php echo $row->username;?></td>
                        <td style="vertical-align: middle;"><center><?php echo $row->alamat;?></center></td>
                        <td style="vertical-align: middle;"><center><?php echo $row->no_tlp;?></center></td>
                        <td style="vertical-align: middle;"><center><?php echo $row->kota;?></center></td>
                        <td><center>
                          <a href="<?php echo base_url() ?>page/view_detail_konsumen/<?php echo $row->id_konsumen ?>" class="btn btn-info btn-sm" style="width: 32px;"><span class="fa fa-info"></span></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm item_hapus" data="<?php echo $row->id_konsumen ?>"><span class="fa fa-trash"></span></a></center>
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
            <h4 class="modal-title" id="myModalLabel">Hapus Data Konsumen</h4>
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
            url  : "<?php echo base_url('admin/Users/delete_konsumen')?>",
            dataType : "JSON",
               data : {kode: kode},
               success: function(data){
                  $('#ModalHapus').modal('hide');
                  toastr.options.onHidden = function() { window.location.href = 'view_konsumen'; }
                  toastr.success('Data Konsumen berhasil dihapus.', 'Berhasil!');
                            
               }
            });
            return false;
         });
   });
</script>