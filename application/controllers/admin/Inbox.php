<?php 
class Inbox extends MY_controller{
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('is_login')!=TRUE) {
            redirect(base_url("home"));
      	}
		$this->load->library('upload');
		$this->load->model('M_admin','m_admin');
	}

	function add_inbox(){
        $inbox_nama   = $this->input->post('nama_lengkap');
        $inbox_email   = $this->input->post('email');
        $inbox_subjek   = $this->input->post('username');
        $inbox_pesan   = md5($this->input->post('password'));

		$this->m_admin->insert_admin($username, $password, $nama_lengkap, $email, $kelamin, $foto);
	}

	public function edit_data_kontak(){
		$id 		= $this->input->post('id');
		$email 		= $this->input->post('email');
		$no_tlp 	= $this->input->post('no_tlp');
 		$alamat   	= $this->input->post('alamat');
 		$deskripsi 	= $this->input->post('deskripsi');
		
		$this->m_admin->update_data_kontak($id, $deskripsi, $alamat, $no_tlp, $email);
    	$this->SetLog('Admin utama merubah data admin');
	}

	public function edit_data_tentang(){
		$id_gambaran	= $this->input->post('id');
		$header  	 	= $this->input->post('header');
 		$deskripsi   	= $this->input->post('deskripsi');
 				
	    $config['upload_path'] 		= './assets/Gambar/gambaran/';
        $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
        //$config['max_size']			= '2048';

        $this->upload->initialize($config);
	    

        if(!empty($_FILES['gambar']['name'])){
         	if($this->upload->do_upload('gambar')){
         		$gambar = $this->upload->data('file_name');
       				$this->m_admin->update_data_tentang($id_gambaran, $header, $deskripsi, $gambar);
                    $this->SetLog('Admin merubah data gambaran perusahaan');
	        }
	        else{
	        	echo $this->session->set_flashdata('msg','warning');
	        	redirect('page/profil');
	        }
        }
        else{
    		$this->m_admin->update_data_tentang_tanpa_gambar($id_gambaran, $header, $deskripsi);
        }
	}
	        
}
?>