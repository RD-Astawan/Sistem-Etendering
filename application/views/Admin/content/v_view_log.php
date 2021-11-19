<!-- page content -->
<div class="right_col" role="main">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h4><b>Data Log</b></h4>
               <div class="clearfix"></div>
            </div>

            <div class="x_content">
               
               <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th style="width: 5%;"><center>#</center></th>
                        <th style="width: 5%;"><center></center></th>
                        <th style="width: 25%;"><center>Pengubah</center></th>
                        <th style="width: 35%;"><center>Deskripsi Perubahan</center></th>
                        <th style="width: 20%;"><center>Tanggal dirubah</center></th>
                        <th><center>Aksi</center></th>
                        
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $no=0;
                        foreach ($data_log as $row) :
                           $id = $row->id_log;
                        $no++;
                     ?>
                     <tr>
                        <td style="vertical-align: middle;"><center><?php echo $no;?></center></td>
                        <td><center><input type="checkbox" class='checkbox' name='delete' value='<?= $id ?>' ></center></td>
                        <td style="vertical-align: middle;"><?php echo $row->log_author;?></td>
                        <td style="vertical-align: middle;"><?php echo $row->log_desc;?></td>
                        <td style="vertical-align: middle;"><center><?php echo $row->log_created;?></center></td>
                        <td><center>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm item_hapus" data="<?php echo $row->id_log ?>"><span class="fa fa-trash"></span></a></center>
                            
                        </td>
                        
                        </tr>
                     <?php endforeach;?>
                  </tbody>

               </table>
                  <input href="javascript:void(0);" class="btn btn-sm btn-danger" type="button" id="delete" value='Hapus'>
                  <label style="margin-left: 10px;">
                     <input type="checkbox" id="checkall" value='1'> &nbsp;Pilih Semua
                  </label>
               
               
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
            <h4 class="modal-title" id="myModalLabel">Hapus Data Produsen</h4>
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

<!--MODAL HAPUS-->
<div class="modal fade" id="checkHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
            <h4 class="modal-title" id="myModalLabel">Hapus Data Produsen</h4>
         </div>
         <form class="form-horizontal">
            <div class="modal-body">             
               <!-- <input type="hidden" name="kode" id="textkode" value=""> -->
               <div class="alert alert-success"><p>Apakah Anda yakin mau memhapus Data ini?</p></div>              
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
               <button class="btn_hapus btn btn-danger" id="btn_hapus2">Hapus</button>
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
            url  : "<?php echo base_url('admin/Log/delete_log')?>",
            dataType : "JSON",
               data : {kode: kode},
               success: function(data){
                  $('#ModalHapus').modal('hide');
                  toastr.options.onHidden = function() { window.location.href = 'view_log'; }
                  toastr.success('Data log aktivitas berhasil dihapus.', 'Berhasil!');
                            
               }
            });
            return false;
         });

      // Check all
        $("#checkall").change(function(){

           var checked = $(this).is(':checked');
           if(checked){
              $(".checkbox").each(function(){
                  $(this).prop("checked",true);
              });
           }else{
              $(".checkbox").each(function(){
                  $(this).prop("checked",false);
              });
           }
        });

        // Changing state of CheckAll checkbox 
        $(".checkbox").click(function(){

           if($(".checkbox").length == $(".checkbox:checked").length) {
               $("#checkall").prop("checked", true);
           } else {
               $("#checkall").prop("checked",false);
           }

        });

        // Delete button clicked
        $('#delete').click(function(){

           // Confirm alert
           
               $('#checkHapus').modal('show');

           $('#btn_hapus2').on('click',function(){

              // Get userid from checked checkboxes
              var logs_arr = [];
              $(".checkbox:checked").each(function(){
                  var userid = $(this).val();

                  logs_arr.push(userid);
              });

              // Array length
              var length = logs_arr.length;

              if(length > 0){

                 // AJAX request
                 $.ajax({
                    url: '<?= base_url() ?>admin/Log/delete_checkbox',
                    type: 'post',
                    data: {log_ids: logs_arr},
                    success: function(response){

                       // Remove <tr>
                       $(".checkbox:checked").each(function(){
                           var userid = $(this).val();
                           $('#tr_'+userid).remove();
                       });
                    }
                 });
              }
           }) 

        });

   });
</script>





                  

                        

    

