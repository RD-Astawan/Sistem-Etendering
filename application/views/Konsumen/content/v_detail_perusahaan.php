<style type="text/css">
	 #tombol_kembali {
     /*line-height: 12px;*/
     /*width: 18px;*/
     /*font-size: 8pt;
     font-family: tahoma;
     margin-top: 1px;
     margin-right: 2px;*/
     position:absolute;
     /*top:0;*/
     right:0;
     bottom: 0;
     margin-bottom: 10px;
     margin-right: 10px;
 }
</style>
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<div class="panel panel-profile">
				<div class="clearfix">
					<!-- LEFT COLUMN -->
					<div class="profile-left">
						<!-- PROFILE HEADER -->
						<div class="profile-header">
							<div class="overlay"></div>
							<div class="profile-main">
								<img src="<?php echo base_url().'assets/Gambar/profile/'.$dataProdusen->foto; ?>" class="img-circle" alt="Avatar" style="width: 90px; height: 90px;">
									<h3 class="name"><?php echo $dataProdusen->nama_pt  ?></h3>
								<span class="online-status status-available">Tersedia</span>
							</div>
							<?php
								$projek_selesai 	= $totalProjekSelesai->num_rows();
								$total_lamaran		= $totalLamaran->num_rows();
								$total_dikerjakan = $totalProjekDikerjakan->num_rows();
							?>
							<div class="profile-stat">
								<div class="row">
									<div class="col-md-4 stat-item">
										<?= $projek_selesai ?> <span>Projek Selesai</span>
									</div>
									<div class="col-md-4 stat-item">
										<?= $total_lamaran ?> <span>Lamaran</span>
									</div>
									<div class="col-md-4 stat-item">
										<?= $total_dikerjakan ?> <span>Projek Deal</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END PROFILE HEADER -->
						<!-- PROFILE DETAIL -->
						<div class="profile-detail">
							<div class="profile-info">
								<h4 class="heading">Info</h4>
								<ul class="list-unstyled list-justify">
									<li>Nama Lengkap <span><?php echo $dataProdusen->nama  ?></span></li>
									<li>Alamat <span><?php echo $dataProdusen->alamat  ?></span></li>
									<li>Kota <span><?php echo $dataProdusen->kota  ?></span></li>
									<li>No Telepon <span><a href="https://www.themeineed.com"><?php echo $dataProdusen->no_tlp  ?></a></span></li>
								</ul>
							</div>
							<div class="profile-info">
								<h4 class="heading">Media Sosial</h4>
								<ul class="list-inline social-icons">
									<li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="google-plus-bg"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
								</ul>
							</div>
							<div class="profile-info">
								<h4 class="heading">Deskripsi Perusahaan</h4>
								<p class="text-justify"><?php echo $dataProdusen->deskripsi_pt  ?></p>
							</div>
						</div>
						<!-- END PROFILE DETAIL -->
					</div>
					<!-- END LEFT COLUMN -->
					<!-- RIGHT COLUMN -->
					<div class="profile-right">
						<h4 class="heading">Foto-Foto Projek</h4>
						<!-- AWARDS -->
						<div class="awards">
							<div class="row">
								<?php
									if($dataFotoProgres->num_rows() == 0){
                      			?>
                      			<div class="">
                      				<center>
                      					<p>Belum Ada Foto Projek</p>
                      				</center>
                      			</div>	
                      	<?php
                    			}
                    			else{
                           	foreach($dataFotoProgres->result() as $row): 
								?>
								<div class="col-md-3">
									<img src="<?php echo base_url().'assets/Gambar/progres_pengerjaan/'.$row->progres_gambar1; ?>" alt="gambar" class="img-fluid gallery-pengerjaan">
								</div>
								<?php endforeach; 
									}
								?>
							</div>
						</div>
						<!-- END AWARDS -->
						<?php
							$count = $dataProjek->num_rows();
						?>
						<!-- TABBED CONTENT -->
						<div class="custom-tabs-line tabs-line-bottom left-aligned">
							<ul class="nav" role="tablist">
								<li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent Lamaran</a></li>
								<li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Projek Deal <span class="badge"><?php echo $count ?></span></a></li>
							</ul>
						</div>		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab-bottom-left1">
								<ul class="list-unstyled activity-timeline">
									<?php
                             	$no = 1;
                             	foreach($dataRecentLamaran as $row): 
									?>
									<li>
										<i class="fa fa-cloud-upload activity-icon"></i>
										<p>Mengirimkan data lamaran ke tender &nbsp;<a href="#"><?= $row->tittle; ?></a> <span class="timestamp"><?= $row->lamaran_dibuat; ?></span></p>
									</li>
									<?php 
                        		$no++;
                        		endforeach;
		                     ?>
								</ul>
							</div>
							<div class="tab-pane fade" id="tab-bottom-left2">
								<div class="table-responsive">
									<table class="table project-table">
										<thead>
											<tr>
												<th>Projek</th>
												<th>Progress</th>
												<th>Deadline</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
											<?php
												if($dataProjek->num_rows()==0){
													?>
														<tr style="text-align:center;"><td colspan="4">Belum Ada Projek yg Deal</td></tr>;
													<?php
												}
												else{
                                    foreach($dataProjek->result() as $row): 
											?>
											<tr>
												<td><p><?= $row->pengerjaan_judul ?></p></td>
												<td>
													<div class="progress">
														<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
															<span>60% Complete</span>
														</div>
													</div>
												</td>
												<td><p><?= $row->pengerjaan_deadline ?></p></td>
												<td>
													<center><?php 
														if($row->pengerjaan_status == 'Diminta'){
															?>
															<span class="label label-success">&nbsp;&nbsp;&nbsp;Diminta&nbsp;&nbsp;&nbsp;</span>
															<?php
														}
														else if($row->pengerjaan_status == 'Dikerjakan'){
															?>
															<span class="label label-warning">Dikerjakan</span>
															<?php
														}
														else{
															?>
															<span class="label label-default">&nbsp;&nbsp;&nbsp;Selesai&nbsp;&nbsp;&nbsp;</span>
															<?php
														}
														?>
													</center>
												</td>
											</tr>
											<?php endforeach; } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- END TABBED CONTENT -->
						<form>
							<input id="tombol_kembali" type="button" class="btn btn-warning" value="Kembali" onclick="history.go(-1)">
						</form>
					</div>
					<!-- END RIGHT COLUMN -->
				</div>
			</div>
		</div>
	</div>
<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

<script src="<?= base_url('assets/Gsap/gsap.min.js'); ?>"></script>
<script>
	gsap.from('.gallery-pengerjaan', { duration: 1, y: -100, opacity: 0, ease: 'circ' });
</script>