<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	} 
	//public function index()
	//{
		//if ($this->session->userdata('isLoggedIn')) {
			//$this->load->view('v_redirect_home');
			//return;
		//}
		//$this->load->view('Auth/Login', FALSE);
	//}

	function do_upload(){
        $config['upload_path']="./assets/images";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = array('upload_data' => $this->upload->data());

	        $nama= $this->input->post('register_nama');
	        $nama_pt= $this->input->post('register_nama_pt');
	        $deskripsi_pt= $this->input->post('register_deskripsi_pt');
	        $alamat= $this->input->post('register_alamat');
	        $kota= $this->input->post('register_kota');
	        $no_tlp= $this->input->post('register_no_tlp');
	        $email= $this->input->post('register_email');
	        $kode_npwp= $this->input->post('register_kode_npwp');
	        $username= $this->input->post('register_username');
	        $password= $this->input->post('register_password');
	        $gambar= $data['upload_data']['file_name'];

	        $data = array(
			'nama'	=> $nama,
			'nama_pt'	=> $nama_pt,
			'deskripsi_pt'	=> $deskripsi_pt,
			'alamat'	=> $alamat,
			'kota'		=> $kota,
			'no_tlp'	=> $no_tlp,
			'email'		=> $email,
			'kode_npwp' => $kode_npwp,
			'username'	=> $username,
			'password'	=> $password,
			'gambar'	=> $gambar
		);
		$result = $this->M_auth->register_produsen($data, 'tb_produsen');
	    if($result=='berhasil'){
        	$output['success'] = true;
		}
		else{
			$output['error'] = true;
		}
		echo json_encode($output);
        }
     }

	public function login()
	{
		$output = array('error' => false);

		$username = $_POST['login_username'];
		$password = $_POST['login_password'];

		$cek_Konsumen 	= $this->M_auth->auth_konsumen($username, $password);
		$cek_Produsen 	= $this->M_auth->auth_produsen($username, $password);
		$cek_Admin		= $this->M_auth->auth_admin($username, $password);
		if($cek_Konsumen->num_rows() > 0){
			$data = $cek_Konsumen->row_array();
        		$this->session->set_userdata('is_login',TRUE);
				$this->session->set_userdata('akses','3');
				$this->session->set_userdata('ses_id',$data['id_konsumen']);
				$this->session->set_userdata('ses_nama',$data['nama']);
				$this->session->set_userdata('ses_username',$data['username']);
				$this->session->set_userdata('ses_email',$data['email']);
				$output['message'] = 'Logging in konsumen. Please wait...';
				$output['konsumen'] = true;

        }
        else if($cek_Produsen->num_rows() > 0){
        	$data = $cek_Produsen->row_array();
        		$this->session->set_userdata('is_login',TRUE);
				$this->session->set_userdata('akses','3');
				$this->session->set_userdata('ses_id',$data['id_produsen']);
				$this->session->set_userdata('ses_nama',$data['nama']);
				$this->session->set_userdata('ses_username',$data['username']);
				$this->session->set_userdata('ses_email',$data['email']);
        		$output['message'] = 'Logging in produsen. Please wait...';
        		$output['produsen'] = true;
        }
        else if($cek_Admin->num_rows() > 0){
        	$data = $cek_Admin->row_array();
        		$this->session->set_userdata('is_login',TRUE);
        		$this->session->set_userdata('akses','3');
        		$this->session->set_userdata('sess_id', $data['id_admin']);
        		$this->session->set_userdata('ses_nama',$data['full_name']);

				$this->session->set_userdata('username',$data['username']);
        		$output['message'] = 'Logging in admin. Please wait...';
        		$output['admin'] = true;
        }
		else{
			$output['error'] = true;
			$output['message'] = 'Login Invalid. User not found';
		}
		echo json_encode($output);
	}

	public function register()
	{
		$output = array('error' => false);

		//$data = $this->input->post();
		$nama	= $_POST['nama'];
		$alamat	= $_POST['alamat'];
		$no_tlp	= $_POST['no_tlp'];
		$kota	= $_POST['kota'];
		$email	= $_POST['email'];
		$username	= $_POST['username'];
		$password	= md5($_POST['password']);
		$foto		= 'img-default.png';

		$data = array(
			'nama'	=> $nama,
			'alamat'	=> $alamat,
			'no_tlp'	=> $no_tlp,
			'kota'		=> $kota,
			'email'		=> $email,
			'username'	=> $username,
			'password'	=> $password,
			'foto'		=> $foto
		);
		$simpan = $this->M_auth->register($data, 'tb_konsumen');
		if($simpan=='berhasil'){
        	$output['message'] = 'Register berhasil!, Silahkan melakukan login!';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Ada Kesalahan! Gagal melakukan register!!!';
		}
		echo json_encode($output);
	}

	public function register_produsen()
	{
		$output = array('error' => false);

		//$data = $this->input->post();
		$nama		= $_POST['produsen_nama'];
		$nama_pt	= $_POST['produsen_nama_pt'];
		$email		= $_POST['produsen_email'];
		$no_tlp		= $_POST['produsen_no_tlp'];
		$kode_npwp	= $_POST['produsen_kode_npwp'];
		$username	= $_POST['produsen_username'];
		$password	= md5($_POST['produsen_password']);
		$foto		= 'img-default.png';

		$data = array(
			'nama'	=> $nama,
			'nama_pt'	=> $nama_pt,
			'email'	=> $email,
			'no_tlp'		=> $no_tlp,
			'kode_npwp'		=> $kode_npwp,
			'username'	=> $username,
			'password'	=> $password,
			'foto'		=> $foto

		);
		$simpan = $this->M_auth->register_produsen($data, 'tb_produsen');
		if($simpan=='berhasil'){
        	$output['message'] = 'Register berhasil!, Silahkan melakukan login!';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Ada Kesalahan! Gagal melakukan register!!!';
		}
		echo json_encode($output);
	}


	public function checkemail(){
		$email = $_POST['email'];
		$data = $this->M_auth->checkemail($email);

		if ($data>0){
		    echo 0;
		} else {
		    echo 1;
		}
	}

	public function register_checkemail(){
		$register_email = $_POST['register_email'];
		$data = $this->M_auth->register_checkemail($register_email);

		if ($data>0){
		    echo 0;
		} else {
		    echo 1;
		}
	}

	public function check_username_produsen(){
		$username = $_POST['username'];
		$data = $this->M_auth->check_username_produsen($username);

		if ($data>0){
		    echo 0;
		} else {
		    echo 1;
		}
	}

	public function register_checkusername(){
		$register_username = $_POST['register_username'];
		$data = $this->M_auth->register_checkusername($register_username);

		if ($data>0){
		    echo 0;
		} else {
		    echo 1;
		}
	}

	public function home(){
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			$this->load->view('Produsen/Beranda');
		}
		else{
			redirect('/');
		}
		
	}

	public function unauth()
	{
		$this->session->sess_destroy();
		redirect('Auth','refresh');
	}
	
}
