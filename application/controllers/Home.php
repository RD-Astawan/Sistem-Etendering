<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('M_tender'));
    $this->load->model('M_admin','m_admin');
    $this->load->model('M_home','m_home');
    //Codeigniter : Write Less Do More
  }

  function index(){
    //$tender['tender'] = $this->M_tender->get_all_tender();
    //for ($i=0; $i < sizeof($tender['tender']); $i++) {
      //$tender['tender'][$i]->tanggal_buka = date('d F Y', strtotime($tender['tender'][$i]->tanggal_buka));
      //$tender['tender'][$i]->tanggal_tutup = date('d F Y', strtotime($tender['tender'][$i]->tanggal_tutup));
      //$tender['tender'][$i]->deadline = date('d F Y', strtotime($tender['tender'][$i]->deadline));
    //}
    $data['post']     =$this->m_home->get_post_home();
    $data['slider']   =$this->m_admin->sliders_list();
    $data['tender']   = $this->m_home->get_tender_home();
    $data['pengerjaan']   = $this->m_home->get_pengerjaan_home();
    $data['top_lamaran']   = $this->m_home->get_top_lamaran();
    //$this->load->view('Home/inc/navbar');
    $this->load->view('Home/Home_view', $data);
    //$this->load->view('Home/inc/footer');
  }

  function login(){
    $this->load->view('Home/v_login');
  }

  function register_konsumen(){
    $this->load->view('Home/v_konsumen_register');
  }

  function register_produsen(){
    $this->load->view('Home/v_produsen_register');
  }
  function view_more_tender(){
    $data['more_tender']  = $this->m_home->get_more_tender();
    $this->load->view('Home/v_view_more_tender', $data);
  }
  function kontak(){
    $this->load->view('Home/v_kontak');
  }
  function add_inbox(){
        $inbox_nama   = $this->input->post('inbox_nama');
        $inbox_email   = $this->input->post('inbox_email');
        $inbox_subjek   = $this->input->post('inbox_subjek');
        $inbox_pesan   = md5($this->input->post('inbox_pesan'));

    $this->m_home->insert_admin($inbox_nama, $inbox_email, $inbox_subjek, $inbox_pesan);
  }
  function view_tentang(){
    $this->load->view('Home/v_tentang');
  }

}
