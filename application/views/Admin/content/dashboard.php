
        <!-- page content -->
        <div class="right_col" role="main">
         <?php
            if($data_tanggal_tender->num_rows() > 0 ){
               ?>
                <script type="text/javascript">
          $(document).ready(function(){
            var dateObj = new Date();
            var month = dateObj.getUTCMonth() + 1; //months from 1-12
            var day = dateObj.getUTCDate();
            var year = dateObj.getUTCFullYear();

            var kode = year + "-" + month + "-" + day;
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('admin/Tender/update_status_tender')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            
                    }
                });
                return false;
          });
        </script>
        <?php
            }
         ?>

         <script src="<?php echo base_url()?>/assets/Chart/Chart.js"></script>


          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <center><span class="count_top"><i class="fa fa-desktop"></i> Total Tender</span>
              <div class="count green"><?php echo $count_tender->num_rows();  ?></div>
              <span class="count_bottom">Tender</span></center>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <center><span class="count_top"><i class="fa fa-table"></i> Total Lamaran</span>
              <div class="count green"><?php echo $count_lamaran->num_rows();  ?></div>
              <span class="count_bottom">Lamaran</span></center>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <center><span class="count_top"><i class="fa fa-user"></i> Total Produsen</span>
              <div class="count green"><?php echo $count_produsen->num_rows();  ?></div>
              <span class="count_bottom">Produsen</span></center>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <center><span class="count_top"><i class="fa fa-user"></i> Total Konsumen</span>
              <div class="count green"><?php echo $count_konsumen->num_rows();  ?></div>
              <span class="count_bottom">Konsumen</span></center>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <center><span class="count_top"><i class="fa fa-shopping-cart"></i> Total Tender Deal</span>
              <div class="count green"><?php echo $count_konsumen->num_rows();  ?></div>
              <span class="count_bottom">Deal</span></center>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <center><span class="count_top"><i class="fa fa-thumbs-up"></i> Total Review</span>
              <div class="count green"><?php echo 19 //$count_konsumen->num_rows();  ?></div>
              <span class="count_bottom">Review</span></center>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row mt-3">
                <div class="col-lg-6">
                  <div id="accordionTwo" role="tablist">
                    <div class="card">
                      <div id="collapseFour" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionTwo" class="collapse show">
                        <div class="card-body">
                          <canvas id="lamaran_graph"></canvas>

                          <?php
                          foreach($data_lamgraph as $data){
                              $merk[] = $data->status_lamaran; 
                              $stok[] = (float) $data->jumlah;?><br><?php
                          }
                         
                          ?>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
             <div class="col-lg-6">
                  <div id="accordionTwo" role="tablist">
                    <div class="card">
                      <div id="collapseFour" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionTwo" class="collapse show">
                        <div class="card-body">
                          <canvas id="tender_graph"></canvas>
                          <?php
                          foreach($data_tengraph as $data){
                              $status[] = $data->status_tender; 
                              $hasil[] = (float) $data->hasil;?><br><?php
                          }
                          
                         
                          ?>
                        </div>
                      </div>
                    </div>
                </div>
              </div>


            </div>

          </div>
        </div>


          <script>
            //Graph 1
            var ctx = document.getElementById('lamaran_graph').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($merk);?>,
                    datasets: [{
                        label: 'Data Lamaran',
                        data: <?php echo json_encode($stok);?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });

            //Graph 2
            var ctx = document.getElementById('tender_graph').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($status);?>,
                    datasets: [{
                        label: 'Data Tender',
                        data: <?php echo json_encode($hasil);?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>

             
  </body>
</html>
