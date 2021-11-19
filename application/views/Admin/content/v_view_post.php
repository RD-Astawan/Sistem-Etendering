<!-- page content -->
<div class="right_col" role="main">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h4><b>DATA POST</b></h4>
               <div class="clearfix"></div>
            </div>
               <div class="x_content">
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                     <thead>
                        <tr>
                           <th style="width: 5%;"><center>#</center></th>
                           <th style="width: 15%;"><center>Gambar</center></th>
                           <th style="width: 40%;"><center>Judul</center></th>
                           <th style="width: 10%;"><center>Tanggal</center></th>
                           <th style="width: 20%;"><center>Author</center></th>
                           <th><center>Aksi</center></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $no=0;
                           foreach ($dataPost as $row) :
                           $no++;
                        ?>
                        <tr>
                           <td style="vertical-align: middle;"><center><?php echo $no;?></center></td>
                           <td><img width="200px" src="<?php echo base_url().'assets/Gambar/post/'.$row->post_gambar;?>"></td>
                           <td style="vertical-align: middle;"><?php echo $row->post_judul;?></td>
                           <td style="vertical-align: middle;"><center><?php echo $row->post_tanggal;?></center></td>
                           <td style="vertical-align: middle;"><center><?php echo $row->post_author;?></center></td>
                           <td style="width: 90px;text-align: center;vertical-align: middle;">
                              <a href="<?php echo base_url() ?>page/edit_post/<?php echo $row->post_id ?>" class="btn btn-info btn-sm"><span class="fa fa-pencil"></span></a>
                              <a href="javascript:void(0);" class="btn btn-danger btn-sm item_hapus" data="<?php echo $row->post_id ?>"><span class="fa fa-trash"></span></a>
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
            <h4 class="modal-title" id="myModalLabel">Hapus Data Post</h4>
         </div>
         <form class="form-horizontal">
            <div class="modal-body">             
               <input type="hidden" name="kode" id="post_kode" value="">
               <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus post ini?</p></div>
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
      $('#mydata').dataTable();
         //GET HAPUS
         $('.item_hapus').on('click',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
         });
         $('#btn_hapus').on('click',function(){
            var kode=$('#post_kode').val();
            $.ajax({
               type : "POST",
               url  : "<?php echo base_url('admin/Post/delete_post')?>",
               dataType : "JSON",
               data : {kode: kode},
                  success: function(data){
                     $('#ModalHapus').modal('hide');
                     toastr.options.onHidden = function() { window.location.href = 'view_post'; }
                     toastr.success('Data post berhasil dihapus.', 'Berhasil!'); 
                  }
            });
            return false;
         });
   });
</script>

