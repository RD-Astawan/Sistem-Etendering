<?php 
class Lamaran extends MY_controller{
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('is_login')!=TRUE) {
            redirect(base_url("home"));
      	}
		$this->load->library('upload');
		$this->load->model('M_admin','m_admin');
		
	}

	function delete_lamaran(){
        $id_lamaran=$this->input->post('kode');
        $data=$this->m_admin->delete_lamaran($id_lamaran);
        $this->SetLog('Admin menghapus data lamaran');
        echo json_encode($data);
    }

}
?>