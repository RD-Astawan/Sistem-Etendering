<?php 
	defined('BASEPATH') or exit('No direct script access allowed');
	class MY_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->model('AuthModel','auth',TRUE);
			//$this->checkAuth();
			if ($this->session->userdata('is_login')!=TRUE) {
      		redirect(base_url("home"));
    	}
			$this->load->model('M_admin');

		}
		public $parseData = [
			'navbar' => 'Admin/inc/navbar',
			'sidebar' => 'Admin/inc/sidebar',
			'content' => '',
			'title'	=> ''
		];
		public $parseData_kon = [
			'navbars' => 'Konsumen/inc/v_navbar_isi',
			'sidebars' => 'Konsumen/inc/v_sidebar_isi',
			'contents' => '',
			'tittle'	=> ''
		];

		public $parseData_pro = [
			'navbar_pro' => 'Produsen/inc/v_navbar_isi',
			'sidebar_pro' => 'Produsen/inc/v_sidebar_isi',
			'content_pro' => '',
			'tittle'	=> ''
		];

		public function message($title = NULL, $text = NULL, $type = NULL){
			return $this->session->set_flashdata([
				'title' => $title,
				'text'	=> $text,
				'type'	=> $type
			]);
		}
		public function SetLog($Message = NULL){
			$Data = [
						'log_author' 	=> $this->session->userdata('ses_nama'),
						'log_desc'		=> $Message,
						'log_created'	=> date('Y-m-d H:i:s')
					];
					return $this->db->insert('tb_log',$Data);
		}

		
	}


?>