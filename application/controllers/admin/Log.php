<?php 
class Log extends MY_controller{
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('is_login')!=TRUE) {
            redirect(base_url("home"));
      	}
		$this->load->library('upload');
		$this->load->model('M_admin','m_admin');
		
	}

	function delete_log(){
        $id_log=$this->input->post('kode');
        $data=$this->m_admin->delete_log($id_log);
        $this->SetLog('Admin menghapus data log aktivitas');
        echo json_encode($data);
    }

    public function delete_checkbox(){
        $data_checkboxs = $this->input->post('log_ids');
        $this->m_admin->delete_log_checkbox($data_checkboxs);
        $this->SetLog('Admin menghapus data log aktivitas');
        echo 1;
        exit;
   }

}
?>