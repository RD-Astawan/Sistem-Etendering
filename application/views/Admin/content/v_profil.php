<div class="right_col" role="main">
   <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
         <div class="x_panel">
            <div class="x_title">
               <h3><b>Data Admin</b></h3>
               <div class="clearfix"></div>
            </div>
               <div class="x_content">
                  <div class="row">
                     <div class="card mb-3" style="max-width: 100%;">
                        <div class="row no-gutters">
                           <div class="col-md-6">
                              <div class="card-body">
                              <h4 class="card-title" style="margin-left: 23px;"><b>Informasi Profil Administrator</b></h4><br />
                                 <div class="x_content refresh">
                                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
                                       <div class="form-group row" style="margin-left: 10px;">
                                          <label for="nama lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="" readonly>
                                          </div>
                                        </div>
                                       <div class="form-group row" style="margin-left: 10px;">
                                          <label for="username" class="col-sm-3 col-form-label">Username</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control" id="username" name="username" value="" readonly>
                                          </div>
                                       </div>
                                       <div class="form-group row" style="margin-left: 10px;">
                                          <label for="jenis kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="" readonly>
                                          </div>
                                       </div>
                                       <div class="form-group row" style="margin-left: 10px;">
                                          <label for="email" class="col-sm-3 col-form-label">E - mail</label>
                                          <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email" name="email" value="" readonly>
                                          </div>
                                       </div>
                                       <div class="form-group row" style="margin-left: 10px;">
                                          <div class="col-sm-9">
                                            <input type="hidden" class="form-control" id="id_admin" name="id_admin" value="<?php echo $this->session->userdata('sess_id');?>">
                                          </div>
                                       </div> 
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <?php 
                                 error_reporting(0);
                                 $id_admin=$this->session->userdata('sess_id');
                                 $query=$this->db->query("SELECT * FROM tb_admin WHERE id_admin='$id_admin'");
                                 $data=$query->row_array();
                              ?>
                              <img src="<?php echo base_url().'assets/Gambar/users/'.$data['foto']; ?>" class="card-img img-thumbnail" style="width: 230px; height: 260px; margin-left: 7px;">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

   tampil_data_profil()

   function tampil_data_profil(){
   var id = document.getElementById("id_admin").value;
      $.ajax({
       type : "GET",
         url  : "<?php echo site_url('admin/Users/get_profil') ?>",
         dataType : "JSON",
         data : {id:id},
         success: function(data){
            $.each(data,function(username, full_name, email, jenis_kelamin){
               $('[name="username"]').val(data.username);
               $('[name="nama_lengkap"]').val(data.full_name);
               $('[name="email"]').val(data.email);
               $('[name="jenis_kelamin"]').val(data.jenis_kelamin);    
            });
         }
      });
   }
});
</script>

