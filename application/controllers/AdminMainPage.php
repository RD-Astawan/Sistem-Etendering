<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMainPage extends MY_controller{

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('is_login')!=TRUE) {
      		redirect(base_url("home"));
    	}
	}

	public function index() {
		$tgl_sekarang  = date('Y-m-d');
		$this->parseData['data_tanggal_tender']	= $this->M_admin->get_data_tanggal_tender($tgl_sekarang);
		$this->parseData['data_lamgraph']	=	$this->M_admin->get_grafik_lamaran();
		$this->parseData['data_tengraph']	=	$this->M_admin->get_grafik_tender();
		$this->parseData['count_tender']	= 	$this->M_admin->get_total_tender();
		$this->parseData['count_lamaran']	= 	$this->M_admin->get_total_lamaran();
		$this->parseData['count_produsen']	= 	$this->M_admin->get_total_produsen();
		$this->parseData['count_konsumen']	= 	$this->M_admin->get_total_konsumen();
		//$this->parseData['count_lamaran']	= 	$this->M_admin->get_total_projek();
		// $this->parseData['count_lamaran']	= 	$this->M_admin->get_total_pengerjaan();


		$this->parseData['title'] = 'Dashboard';
		$this->parseData['content'] = 'Admin/content/dashboard';
		$this->load->view('Admin/AdminMainView', $this->parseData);
	}

	public function users(){
		$this->parseData['dataUsers']	= $this->M_admin->getAllUser();
		$this->parseData['content']		= 'Admin/content/master/users';
		$this->parseData['title']		= 'Data Pengguna';
		$this->load->view('Admin/AdminMainView', $this->parseData);
	}

	public function produsen(){
		$this->parseData['dataProdusen']	= $this->M_admin->getAllProdusen();
		$this->parseData['content']			= 'Admin/content/master/produsen';
		$this->parseData['title']			= 'Data Produsen';
		$this->load->view('Admin/AdminMainView', $this->parseData);
	}

	public function konsumen(){
		$this->parseData['dataKonsumen']	= $this->M_admin->getAllKonsumen();
		$this->parseData['content']			= 'Admin/content/master/konsumen';
		$this->parseData['title']			= 'Data Produsen';
		$this->load->view('Admin/AdminMainView', $this->parseData);
	}

	public function tender(){
		$this->parseData['dataTender']		= $this->M_admin->getAllTender();
		$this->parseData['content']			= 'Admin/content/tender';
		$this->parseData['title']			= 'List Tender';
		$this->load->view('Admin/AdminMainView', $this->parseData);
	}

	public function log(){
		$this->parseData['dataLog'] = $this->M_admin->getAllLog();
		$this->parseData['content'] = 'Admin/content/logs';
		$this->parseData['title']	= 'Data Log Activitas';
		$this->load->view('Admin/AdminMainView', $this->parseData);
	}

	public function upload_sliders(){
		$this->parseData['dataSliders'] = $this->M_admin->getAllSliders();
		$this->parseData['content']		= 'Admin/content/Dashboard/upload_slider';
		$this->parseData['title']		= 'Data Upload Slider';
		$this->load->view('Admin/AdminMainView', $this->parseData);
	}

	public function slider(){
		$this->parseData['dataslider'] = $this->M_admin->sliders_list();
		$this->parseData['content']		= 'Admin/content/v_slider';
		$this->load->view('Admin/AdminMainView', $this->parseData);
	}

	public function add_post(){
		//$this->parseData['dataPost'] = $this->M_admin->get_all_post();
		$this->parseData['content']	 = 'Admin/content/v_add_post';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function edit_post($post_id){
		$post_id = $this->uri->segment(3);
		$this->parseData['dataPost'] 	= $this->M_admin->get_edit_post($post_id);
		$this->parseData['content']	= 'Admin/content/v_edit_post';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function view_post(){
		$this->parseData['dataPost'] = $this->M_admin->post_list();
		$this->parseData['content']		= 'Admin/content/v_view_post';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function view_tender(){
		$this->parseData['dataTender'] 	= $this->M_admin->get_all_tender();
		$this->parseData['content']		= 'Admin/content/v_view_tender';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function view_lamaran(){
		$this->parseData['dataLamaran'] = $this->M_admin->get_all_lamaran();
		$this->parseData['content']		= 'Admin/content/v_view_lamaran';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function view_produsen(){
		$this->parseData['data_produsen'] = $this->M_admin->get_all_produsen();
		$this->parseData['content']		= 'Admin/content/v_view_produsen';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function view_konsumen(){
		$this->parseData['data_konsumen'] = $this->M_admin->get_all_konsumen();
		$this->parseData['content']		= 'Admin/content/v_view_konsumen';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function view_admin(){
		$this->parseData['data_admin'] = $this->M_admin->get_all_admin();
		$this->parseData['content']		= 'Admin/content/v_admin';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function edit_profile(){
		$this->parseData['content']		= 'Admin/content/v_edit_profile';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function profil(){
		$this->parseData['content']		= 'Admin/content/v_profil';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function add_sliders(){
		$this->parseData['content']		= 'Admin/content/v_add_slider';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function edit_sliders($id_slider){
		$id_slider = $this->uri->segment(3);
		$this->parseData['dataSlider'] 	= $this->M_admin->get_edit_slider($id_slider);
		$this->parseData['content']		= 'Admin/content/v_edit_slider';
		$this->load->view('Admin/adminmainView', $this->parseData);
	}

	public function add_admin(){
		$this->parseData['content']		= 'Admin/content/v_add_admin';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

	public function edit_admin($id_admin){
		$id_admin = $this->uri->segment(3);
		$this->parseData['data_admin'] 	= $this->M_admin->get_edit_admin($id_admin);
		$this->parseData['content']		= 'Admin/content/v_edit_admin';
		$this->load->view('Admin/adminmainView', $this->parseData);
	}

	public function view_detail_tender(){
    	$id_tender = $this->uri->segment(3);
    	$this->parseData['data_view_tender']	=	$this->M_admin->get_detail_tender($id_tender);
    	$this->parseData['content']		= 'Admin/content/v_detail_tender';
		$this->load->view('Admin/adminmainView', $this->parseData);
    }

    public function view_detail_produsen($id_produsen){
		$id_produsen = $this->uri->segment(3);
		$this->parseData['data_produsen'] 	= $this->M_admin->get_detail_produsen($id_produsen);
		$this->parseData['content']		= 'Admin/content/v_detail_produsen';
		$this->load->view('Admin/adminmainView', $this->parseData);
	}

	public function view_detail_konsumen($id_konsumen){
		$id_produsen = $this->uri->segment(3);
		$this->parseData['data_konsumen'] 	= $this->M_admin->get_detail_konsumen($id_konsumen);
		$this->parseData['content']		= 'Admin/content/v_detail_konsumen';
		$this->load->view('Admin/adminmainView', $this->parseData);
	}
	public function view_log(){
		$this->parseData['data_log'] = $this->M_admin->get_all_log();
		$this->parseData['content']		= 'Admin/content/v_view_log';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}
	public function edit_kontak(){
		$this->parseData['data_kontak']	=	$this->M_admin->get_data_kontak();
		$this->parseData['content']		=	'Admin/content/v_edit_kontak';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}
	public function edit_tentang(){
		$this->parseData['data_tentang']	=	$this->M_admin->get_data_tentang();
		$this->parseData['content']			=	'Admin/content/v_edit_tentang';
		$this->load->view('Admin/AdminmainView', $this->parseData);
	}

}
?>