<div class="loader_bg">
   <div class="loader"></div>
</div>
<div  id="main">
<!-- MAIN -->
<div class="main">
   <!-- MAIN CONTENT -->
   <div class="main-content">
      <div class="container-fluid">
         <!-- OVERVIEW -->
         <div class="panel panel-headline">
            <div class="panel-heading">
               <h3 class="panel-title">Daftar Pengerjaan Tender</h3>
               <hr/>
            </div>

               <div class="panel-body">
                  <div class="row">
                     <div class="col-md-12">
                      
                        <table id="example5" class="table table-striped table-bordered coba" style="width:100%;">
                          <thead>
                            <tr>
                               <th style="width: 5%; line-height: 2.6;">No</th>
                                <th style="width: 45%; line-height: 2.6;">Judul Tender</th>
                                <th style="width: 10%;">Deadline Pengerjaan</th>
                                <th style="width: 10%; line-height: 2.6;">Pengerjaan Status</th>
                                <th style="width: 10%; line-height: 2.6;">Status Tender</th>
                                <th style="width: 10%; line-height: 2.6;"><center>Konfirmasi Tender selesai</center></th>
                                <th style="width: 10%; line-height: 2.6;"><center>hapus Tender</center></th>
                            </tr>
                          </thead>
                        <tbody >
                                          <?php 
                                            $no=1;
                                            if($pengerjaan_tender->num_rows() == 0){
                                              ?>
                                              <tr style="text-align:center;">
                                                <td colspan="7">Belum Ada Pengerjaan</td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                              </tr>
                                              <?php
                                            }
                                            else{
                                            foreach ($pengerjaan_tender->result_array() as $row) :
                                               $date_array[] = $row;
                                          ?>
                                          <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $row['pengerjaan_judul'];?></td>
                                            <td><?php echo $row['pengerjaan_deadline']; ?></td>
                                            <td style="text-align: center;">
                                              <?php
                                                if($row['pengerjaan_status'] == 'Dikerjakan'){
                                                  ?>
                                                    <span class="label label-warning">DIKERJAKAN</span>
                                                  <?php
                                                }else if($row['pengerjaan_status'] == 'Tunda'){
                                                  ?>
                                                    <span class="label label-default">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUNDA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                  <?php
                                                }else{
                                                  ?>
                                                    <span class="label label-primary" style="width: 100%;">&nbsp;&nbsp;&nbsp;&nbsp;SELESAI&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                  <?php
                                                }
                                              ?>
                                            
                                              <input type="hidden" name="pengerjaan_status" id="status_pengerjaan" value="<?php echo $row['pengerjaan_status'];?>">
                                          </td>
                                            <td align="center;">
                                              <a href="<?php echo base_url() ?>kon_page/detail_pengerjaan/<?php echo $row['pengerjaan_id']; ?>/<?php echo $row['id_produsen']; ?>"><button type="button" class="btn btn-sm btn-info">DETAIL PENGERJAAN</button></a>
                                            </td>
                                            <td align="center;">
                                             
                                             <?php if($row['pengerjaan_status']=='Dikerjakan'){
                                              ?>
                                                <a href=""><button type="button" class="btn btn-sm btn-success" disabled>KONFIR SELESAI</button></a>
                                              <?php
                                            }else if($row['pengerjaan_status']=='Selesai'){
                                              ?>
                                                <a href=""><button type="button" class="btn btn-sm btn-success" disabled>TERKONFIRMASI</button></a>
                                              <?php
                                            }
                                              else{
                                                ?>
                                                  <button id="tbl-konfirmasi" onclick="cek_status_rating(this);" type="button" produsenID="<?php echo $row['id_produsen']; ?>" konsumenID="<?php echo $row['id_konsumen']; ?>" tenderID="<?php echo $row['id_tender']; ?>" class="btn btn-sm btn-success btn-konfir">KONFIR SELESAI</button>
                                                <?php
                                              }
                                              ?>

                                            
                                            </td>
                                            <td>
                                              <?php
                                              if($row['pengerjaan_status']=='Selesai'){
                                                ?>
                                                <a href="javascript:void(0);"><button type="button" class="btn btn-sm btn-danger" data="<?php echo $row['id_tender']; ?>" onclick="item_hapus(this);">HAPUS</button></a>
                                                <?php
                                              }
                                              else{
                                                ?>
                                                  <a href="javascript:void(0);"><button type="button" class="btn btn-sm btn-danger" data="<?php echo $row['id_tender']; ?>" disabled>HAPUS</button></a>
                                                <?php
                                              } 
                                              ?>
                                              
                                            </td>
                                          </tr>
                                          <?php $no++; endforeach;
                                         }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                          
                                        </tfoot>
                          
                      </table>
                   </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

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
  function cek_status_rating(e){
      const id_produsen = $(e).attr("produsenID");
      const id_konsumen = $(e).attr("konsumenID");
      const id_tender   = $(e).attr("tenderID");
      var status_tender = document.getElementById('status_pengerjaan').value;

      $.ajax({
        url: '<?php echo base_url() ?>kon_page/cek_status_rating',
        type: 'post',
        data: {id_produsen: id_produsen, id_konsumen: id_konsumen, id_tender: id_tender},
        success: function(data){
          if(data==0){
            toastr.options.onHidden = function() {  }
            toastr.warning('Tambahkan Rating & Ulasan Terlebih Dahulu!', 'warning!');
          }
          else{
            $.ajax({
        url: '<?php echo base_url() ?>kon_page/konfirmasi_tender',
        type: 'post',
        data: {id_produsen: id_produsen, id_konsumen: id_konsumen, id_tender: id_tender},
        success: function(response){
          // $(window).load(window.location.href + " #main" );
          
          
          $("#example5").load(document.URL +' #example5');
          if(status_tender == "Selesai"){
            $(e).html('Terkonfirmasi');
          }

        }
      })
          }
        }
      });
    };

     function item_hapus(e){
            var id=$(e).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
      };

      $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            // processing: true,
            // serverSide: true,
            url  : "<?php echo base_url('kon_page/delete_tender_1')?>",
            dataType : "JSON",
            data : {kode: kode},
            dataSrc: "",
               success: function(data){
                  $('#ModalHapus').modal('hide');
                  toastr.options.onHidden = function() { 
                  $("#example5").load(document.URL +' #example5'); }
                  toastr.success('Data admin berhasil dihapus.', 'Berhasil!');
                            
               }
            });
            return false;
         });

    // function konfirmasi(){
    //   const id_produsen = $('#tbl-konfirmasi').attr("produsenID");
    //   const id_konsumen = $('#tbl-konfirmasi').attr("konsumenID");
    //   const id_tender   = $('#tbl-konfirmasi').attr("tenderID");

    //   $.ajax({
    //     url: '<?php echo base_url() ?>kon_page/konfirmasi_tender',
    //     type: 'post',
    //     data: {id_produsen: id_produsen, id_konsumen: id_konsumen, id_tender: id_tender},
    //     success: function(response){
    //       // $(window).load(window.location.href + " #main" );
    //       //$("#main").load(document.URL + ' #main');
    //       $('#label').html("&nbsp;&nbsp;&nbsp;&nbsp;SELESAI&nbsp;&nbsp;&nbsp;&nbsp;");
    //       $('#label').removeClass('label-default');
    //       $('#label').addClass('label-primary');

    //     }
    //   })
    // }
  
</script>

<script type="text/javascript">
   $(document).ready(function() {
       var table = $('#example5').DataTable( {
            "paging":   true,
            "ordering": false,
            "searching": false,
            "bLengthChange": false,
            "info":     false

         });
   });
      
</script>
</body>
</html>
</body>

</html>
