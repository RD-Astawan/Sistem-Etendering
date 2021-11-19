<?php 
class Post extends MY_controller{
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('is_login')!=TRUE) {
            redirect(base_url("home"));
      }
		$this->load->library('upload');
		$this->load->model('M_admin','m_admin');
	}

	function add_post(){
      $config['upload_path']      = './assets/Gambar/post/';
      $config['allowed_types']    = 'gif|jpg|png|jpeg';
      //$config['max_size']       = '2048';

      $post_judul   = $this->input->post('post_judul');
      $post_isi   = $this->input->post('post_isi');
      $post_author =	$this->input->post('post_author');

      $pre_slug   =  strip_tags($this->input->post('post_slug',TRUE));
      $string     =  preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $pre_slug);
      $trim       =  trim($string);
      $add_slash  =  strtolower(str_replace(" ", "-", $trim));
      $post_slug  =  $add_slash;

      $upload_image = $_FILES['post_file']['name'];
      $this->upload->initialize($config);
         if(!empty($_FILES['post_file']['name'])){
            if($this->upload->do_upload('post_file')){
           		$new_image = $this->upload->data('file_name');
             	$this->m_admin->insert_post($post_judul, $post_isi, $new_image,$post_author, $post_slug);
               $this->SetLog('Admin menambah data post');
            }
            else{
            ?>
            	<script type="text/javascript">
            		toastr.options.onHidden = function() { window.location.href = 'post'; }
                  toastr.warning('Data post tidak diupload.', 'Gagal!');
               </script>
            <?php
            }
         }
         else{
            ?>
            	<script type="text/javascript">
            		toastr.options.onHidden = function() { window.location.href = 'post'; }
                  toastr.warning('Data post tidak diupload.', 'Gagal!');
               </script>
            <?php
         }
   }

	function get_post(){
		$post_kode   = $this->input->get('id');
		$data        = $this->m_admin->get_post_by_code($post_kode);
		echo json_encode($data);
	}

	function edit_post(){
		$post_id	    = $this->input->post('post_id');
		$post_judul  = $this->input->post('post_judul');
      $post_isi    = $this->input->post('post_isi');
      $post_author =	$this->input->post('post_author');

      $config['upload_path']      = './assets/Gambar/post/';
      $config['allowed_types']    = 'gif|jpg|png|jpeg';
      //$config['max_size']       = '2048';

      $upload_image = $_FILES['post_file']['name'];
      $this->upload->initialize($config);
         if(!empty($_FILES['post_file']['name'])){
            if($this->upload->do_upload('post_file')){
           		$new_image = $this->upload->data('file_name');
               $this->m_admin->edit_post_dengan_gambar($post_id, $post_judul, $post_isi, $new_image,$post_author);
               $this->SetLog('Admin merubah data post');
            }
            else{
            ?>
            	<script type="text/javascript">
            		toastr.options.onHidden = function() { window.location.href = 'http://localhost/TenderV2/page/view_post'; }
                  toastr.warning('Data post tidak diupload.', 'Gagal!');
               </script>
            <?php
            }
         }
         else{
            $this->m_admin->edit_post_tanpa_gambar($post_id, $post_judul, $post_isi, $post_author);
            $this->SetLog('Admin merubah data post');
         }
	}

	function delete_post(){
		$post_id=$this->input->post('kode');
      $data=$this->m_admin->delete_post($post_id);
      $this->SetLog('Admin menghapus data post');
      echo json_encode($data);
	}
}
?>