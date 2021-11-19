<?php 
class Edit_Profile extends MY_controller{
	function __construct(){
		parent::__construct();
		//if($this->session->userdata('masuk') !=TRUE){
            //$url=base_url('administrator');
            //redirect($url);
        //};
		$this->load->library('upload');
		$this->load->model('M_admin','m_admin');
		
	}

	function view_post(){
		$data = $this->m_admin->get_all_post();
		echo json_encode($data);
	}

	function do_upload(){
        $config['upload_path']="../../../assets/Gambar/post";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = array('upload_data' => $this->upload->data());

	        $judul= $this->input->post('judul');
	        $image= $data['upload_data']['file_name']; 
	        
	        $result= $this->m_upload->simpan_upload($judul,$image);
	        echo json_decode($result);
        }
        else {
        	echo json_encode($this->upload->display_errors());
        }

     }

	function get_post(){
		$post_kode = $this->input->get('id');
		$data = $this->m_admin->get_post_by_code($post_kode);
		echo json_encode($data);
	}

	function update_post(){
		$post_id = $this->input->post('post_id');
		$post_judul = $this->input->post('post_judul');
		$post_tanggal = $this->input->post('post_tanggal');
		$post_kategori = $this->input->post('post_kategori');
		$post_author = $this->input->post('post_author');
		$post_isi = $this->input->post('post_isi');
		$post_gambar = $this->input->post('post_gambar');

		$data = $this->m_admin->update_post($post_id, $post_judul, $post_tanggal, $post_kategori, $post_author, $post_isi, $post_gambar);
		echo json_encode($data);
	}

	function delete_post(){
		$id_post = $this->input->post('id_post');
		$gambar=$this->input->post('gambar');
		//$path='./assets/Gambar/slider/'.$gambar;
		//unlink($path);
		$this->m_admin->hapus_post($id_post);
	}
}

?>