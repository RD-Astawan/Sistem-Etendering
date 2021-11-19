<?php 
class Users extends MY_controller{
	function __construct(){
		parent::__construct();
		//if($this->session->userdata('masuk') !=TRUE){
            //$url=base_url('administrator');
            //redirect($url);
        //};
		$this->load->library('upload');
		$this->load->model('M_admin','m_admin');
		$this->load->model('M_auth','m_auth');
		
	}

	function view_produsen(){
		$data = $this->m_admin->get_all_produsen();
		echo json_encode($data);
	}

	function view_konsumen(){
		$data = $this->m_admin->get_all_konsumen();
		echo json_encode($data);
	}

	function get_profil(){
		$data	= $this->input->get('id');
		$hasil	= $this->m_admin->get_profil_by_code($data);
		echo json_encode($hasil);
	}

	function update_data_profil(){
		$id_admin			= $this->input->post('id_admin');
        $nama_lengkap 		= $this->input->post('nama_lengkap');
        $username			= $this->input->post('username');
        $password			= $this->input->post('password');
        $jenis_kelamin		= $this->input->post('jk');
        $email				= $this->input->post('email');
        $konfirm_password	= $this->input->post('konfirm_password');

        $config['upload_path'] 		= './assets/Gambar/users/';
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
        //$config['max_size']			= '2048';

        $upload_image = $_FILES['foto']['name'];
        $this->upload->initialize($config);
	    $this->load->library('upload', $config);

        if(!empty($_FILES['foto']['name'])){
         	if($this->upload->do_upload('foto')){
	        	$new_image = $this->upload->data('file_name');

	        	if (empty($password) && empty($konfirm_password)) {
                	$this->m_admin->update_data_profil_tanpa_pass($id_admin, $nama_lengkap, $username, $jenis_kelamin, $email, $new_image);
                    $this->SetLog('Admin merubah data profile admin');
                	echo $this->session->set_flashdata('msg','info');
       				redirect('page/profil');
				}
				elseif ($password <> $konfirm_password) {
					echo $this->session->set_flashdata('msg','error');
       				redirect('page/edit_profile');
				}
				else{
       				$this->m_admin->update_data_profil_dengan_pass($id_admin, $nama_lengkap, $username, $password, $jenis_kelamin, $email, $new_image);
            		echo $this->session->set_flashdata('msg','info');
                    $this->SetLog('Admin merubah data profile admin');
       				redirect('page/profil');
       				}	
	        }
	        else{
	        	echo $this->session->set_flashdata('msg','warning');
	        	redirect('page/profil');
	        }
        }
        else{
         	if(empty($password) && empty($konfirm_password)){
         		$this->m_admin->update_data_profil_tanpa_pass_dan_gambar($id_admin, $nama_lengkap, $username, $jenis_kelamin, $email);
                $this->SetLog('Admin merubah data profile admin');
         		echo $this->session->set_flashdata('msg','info');
         		redirect('page/profil');
         	}
         	else if($password <> $konfirm_password){
         		echo $this->session->set_flashdata('msg','error');
         		redirect('page/edit_profile');
         	}
         	else{
         		$this->m_admin->update_data_profil_tanpa_gambar($id_admin, $nama_lengkap, $username, $password, $jenis_kelamin, $email);
                $this->SetLog('Admin merubah data profile admin');
         		echo $this->session->set_flashdata('msg','info');
         		redirect('page/profil');
         	}
        }
	}

	public function check_username(){
		$username 	= $_POST['username'];
		$id 		= $this->input->post('id');
		$data = $this->m_admin->check_username($username);

		if ($data>0){
			if($data['id_admin'] == $id){
				echo 1;
			}
			else{
				echo 0;
			}
		} else {
		    echo 1;
		}
	}

	

	function add_admin(){
        $nama_lengkap   = $this->input->post('nama_lengkap');
        $email   = $this->input->post('email');
        $username   = $this->input->post('username');
        $password   = md5($this->input->post('password'));
        $kelamin   = $this->input->post('kelamin');

       	$config['upload_path'] 		= './assets/Gambar/users/';
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
        //$config['max_size']			= '2048';

        $this->upload->initialize($config);
	    

        if(!empty($_FILES['foto']['name'])){
         	if($this->upload->do_upload('foto')){
	        	$foto = $this->upload->data('file_name');

       				$this->m_admin->insert_admin($username, $password, $nama_lengkap, $email, $kelamin, $foto);
                    $this->SetLog('Admin utama menambah data admin');
	        }
	        else{
	        	 ?>
              	<script type="text/javascript">
                	toastr.options.onHidden = function() { window.location.href = 'http://localhost/TenderV2/page/view_admin'; }
                  	toastr.warning('Data Gambar tidak diupload.', 'Gagal!');
               	</script>
            	<?php
	        }
        }
        else{
         		?>
	              	<script type="text/javascript">
	                	toastr.options.onHidden = function() { window.location.href = 'http://localhost/TenderV2/page/view_admin'; }
	                  	toastr.error('Data Slider gagal diupload.', 'Gagal!');
	               	</script>
            	<?php
         	}
   }

   	public function checkemail_admin(){
		$email = $_POST['email'];
		$data = $this->M_admin->checkemail_admin($email);

		if ($data>0){
		    echo 0;
		} else {
		    echo 1;
		}
	}

	public function edit_data_admin(){
		$id_admin		= $this->input->post('id_admin');
		$username  	 	= $this->input->post('username');
 		$password   	= md5($this->input->post('password'));
 		$full_name   	= $this->input->post('nama_lengkap');
 		$email   		= $this->input->post('email');
 		$jenis_kelamin	= $this->input->post('kelamin');
				
	    $config['upload_path'] 		= './assets/Gambar/users/';
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
        //$config['max_size']			= '2048';

        $this->upload->initialize($config);
	    

        if(!empty($_FILES['foto']['name'])){
         	if($this->upload->do_upload('foto')){
         		$new_image = $this->upload->data('file_name');
         		if(empty($password)){
         			
       				$this->m_admin->update_data_admin_dengan_gambar_tanpa_pass($id_admin, $username, $full_name, $email, $jenis_kelamin, $new_image);
                    $this->SetLog('Admin utama merubah data admin');
            		echo $this->session->set_flashdata('msg','info');
       				redirect('page/view_admin');
         		}
         		else{
       				$this->m_admin->update_data_admin_dengan_gambar_dan_pass($id_admin, $username, $password, $full_name, $email, $jenis_kelamin, $new_image);
                    $this->SetLog('Admin utama merubah data admin');
            		echo $this->session->set_flashdata('msg','info');
       				redirect('page/view_admin');
       			}
	        }
	        else{
	        	echo $this->session->set_flashdata('msg','warning');
	        	redirect('page/profil');
	        }
        }
        else{
    		if(!empty($password)){
    			$this->m_admin->update_data_admin_tanpa_gambar_tapi_dengan_pass($id_admin, $username, $password, $full_name, $email, $jenis_kelamin);
     			echo $this->session->set_flashdata('msg','info');
                $this->SetLog('Admin utama merubah data admin');
     			redirect('page/view_admin');
    		}
    		else{
    			$this->m_admin->update_data_admin_tanpa_gambar_dan_pass($id_admin, $username, $full_name, $email, $jenis_kelamin);
     			echo $this->session->set_flashdata('msg','info');
                $this->SetLog('Admin utama merubah data admin');
     			redirect('page/view_admin');
    		}	
        }
	}

	function delete_admin(){
        $id_admin=$this->input->post('kode');
        $data=$this->m_admin->delete_admin($id_admin);
        $this->SetLog('Admin menghapus data admin');
        echo json_encode($data);
    }

    function delete_produsen(){
        $id_produsen=$this->input->post('kode');
        $data=$this->m_admin->delete_produsen($id_produsen);
        $this->SetLog('Admin menghapus data produsen');
        echo json_encode($data);
    }

    function delete_konsumen(){
        $id_konsumen=$this->input->post('kode');
        $data=$this->m_admin->delete_konsumen($id_konsumen);
        $this->SetLog('Admin menghapus data konsumen');
        echo json_encode($data);
    }
	function logout(){
	    $this->session->sess_destroy();
	    //var_dump($this->session->userdata());
	    redirect('Home');
  	}
}
?>