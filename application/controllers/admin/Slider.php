<?php
class Slider extends MY_controller{
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('is_login')!=TRUE) {
            redirect(base_url("home"));
      }
		$this->load->library('upload');
		$this->load->model('M_admin','m_admin');
		
	}

	function update_data_sliders(){
		$id_slider   = $this->input->post('id_slider');
		$caption_1   = $this->input->post('caption_1');
 		$caption_2   = $this->input->post('caption_2');
 		$caption_3   = $this->input->post('caption_3');
				
      $config['upload_path'] 		= './assets/Gambar/slider/';
      $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
      //$config['max_size']		= '2048';

      $this->upload->initialize($config);

      if(!empty($_FILES['file']['name'])){
      	if($this->upload->do_upload('file')){
        	   $new_image = $this->upload->data('file_name');
            $this->m_admin->update_data_sliders_dengan_gambar($id_slider, $caption_1, $caption_2, $caption_3, $new_image);
            $this->SetLog('Admin merubah data slider');
         }
         else{
        	   echo $this->session->set_flashdata('msg','warning');
        	   redirect('page/profil');
         }
      }
      else{
         $this->m_admin->update_data_sliders_tanpa_gambar($id_slider, $caption_1, $caption_2, $caption_3);
         $this->SetLog('Admin merubah data slider');
      }   
	}

	function add_slider(){
      $caption_1   = $this->input->post('caption_1');
      $caption_2   = $this->input->post('caption_2');
      $caption_3   = $this->input->post('caption_3');
      $config['upload_path'] 		= './assets/Gambar/slider/';
      $config['allowed_types'] 	= 'gif|jpg|png|jpeg|bmp';
      //$config['max_size']		= '2048';

      $this->upload->initialize($config);
      if(!empty($_FILES['file']['name'])){
         if($this->upload->do_upload('file')){
	        	$new_image = $this->upload->data('file_name');
          		$this->m_admin->insert_sliders($caption_1, $caption_2, $caption_3, $new_image);
               $this->SetLog('Admin menambahkan data slider');
         }
         else{
	        	?>
            <script type="text/javascript">
               toastr.options.onHidden = function() { window.location.href = 'http://localhost/TenderV2/page/Slider'; }
               toastr.warning('Data Gambar tidak diupload.', 'Gagal!');
            </script>
            <?php
         }
      }
      else{
         ?>
            <script type="text/javascript">
               toastr.options.onHidden = function() { window.location.href = 'http://localhost/TenderV2/page/Slider'; }
               toastr.error('Data Slider gagal diupload.', 'Gagal!');
            </script>
         <?php
      }
   }

   function delete_sliders(){
      $id_tender  = $this->input->post('kode');
      $item       = $this->m_konsumen->cek_data_tender($id_tender)->row();
      if($item->gambar != null){
         $target_file = './assets/Gambar/slider/'.$item->gambar;
         unlink($target_file);
      }

      $data=$this->m_admin->delete_sliders($id_slider);
      $this->SetLog('Admin hapus data slider');
      echo json_encode($data);
   }

	


	

}