   <div class="header_top">
                <div class="container">
                    <div class="header_left float-right">
					
					<?php
						$sql=$this->db->query("SELECT * from tb_kontak");
						$header=$sql->row_array();
					?>
					
                        <span><i class="lotus-icon-location"></i> <?php echo $header['kontak_alamat']?></span>
                        <span><i class="lotus-icon-phone"></i><?php echo $header['kontak_tlp']?></span>
                    </div>
                    
                </div>
            </div>