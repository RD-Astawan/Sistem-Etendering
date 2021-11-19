<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_Admin','m_admin');
    $this->load->model('M_Konsumen','m_konsumen');
    $this->load->model('M_ichm');
    $this->load->model('M_Home','m_home');
    $this->load->model(array('M_tender','M_produsen'));
    if ($this->session->userdata('is_login')!=TRUE) {
      redirect(base_url("home"));
    }
    $this->load->library('upload');
  }

  
  function index(){
      $username =  $this->session->userdata('ses_username');
      $tgl1 = date("Y-m-d");
      $tgl2 = date('Y-m-d', strtotime('+20 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari

      $data = $this->m_konsumen->get_data_grafik($tgl1, $tgl2)->result();
      $x['reminder_tender'] = $this->m_konsumen->get_reminder_tender($username);
      $x['data'] = json_encode($data);
      



      $this->load->view('Konsumen/inc/v_navbar');
      $this->load->view('Konsumen/v_view_beranda', $x);
  }

  function list_tender(){
      $username =  $this->session->userdata('ses_username');
      $data['tender'] = $this->m_konsumen->list_tender($username);
      $this->load->view('Konsumen/inc/v_navbar');
      $this->load->view('Konsumen/v_view_tender',$data);
  }


  function add_tender(){
      $this->load->view('Konsumen/inc/v_navbar');
      $this->load->view('Konsumen/v_add_tender');
  }

  function save_tender(){
    $output = array('error'   => false);
    $output = array('success' => false);
    $output = array('warning' => false);
    $judul = $this->input->post('tender_judul');
    $deskripsi   = $this->input->post('tender_deskripsi');
    $deadline    = $this->input->post('tender_deadline');
    $tanggal_tutup = $this->input->post('tender_tanggal_tutup');
    $tanggal_buka  = date("Y-m-d");
    $username_konsumen =  $this->session->userdata('ses_username');
    $id_status_tender = '1';

        $config['upload_path']      = './assets/Gambar/tender/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';
        //$config['max_size']       = '2048';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);
        if(!empty($_FILES['tender_gambar']['name'])){
            if($this->upload->do_upload('tender_gambar')){
                $gbr = $this->upload->data();
                //Compress Image
                $this->_create_thumbs($gbr['file_name']);

                $gambar       = $gbr['file_name'];
                $image_large  = $gbr['file_name'];
                $image_medium = $gbr['file_name'];
                $image_small  = $gbr['file_name'];


                // $config['image_library']='gd2';
                // $config['source_image']='./assets/Gambar/tender/'.$gbr['file_name'];
                // $config['create_thumb']= FALSE;
                // $config['maintain_ratio']= FALSE;
                // $config['quality']= '100%';
                // $config['width']= 450;
                // $config['height']= 450;
                // $config['new_image']= './assets/Gambar/tender/'.$gbr['file_name'];
                // $this->load->library('image_lib', $config);
                // $this->image_lib->resize();

                // $gambar=$gbr['file_name'];

                $data1 = array(
                        'tittle' => $judul,
                        'deskripsi' => $deskripsi,
                        'gambar'  => $gambar,
                        'deadline'  => $deadline,
                        'username_konsumen' => $username_konsumen,
                        'tanggal_buka'  => $tanggal_buka,
                        'tanggal_tutup' => $tanggal_tutup,
                        'id_status_tender'  => $id_status_tender
                );

                $id_tender = $this->m_konsumen->create('tb_tender',$data1);
                $data = array(
                        'post_id'   =>  '',
                        'image_large' =>  $image_large,
                        'image_medium'  =>  $image_medium,
                        'image_small' => $image_small,
                        'id_tender' => $id_tender
                );
                $insert1 = $this->m_konsumen->create('tb_gambar',$data);
                $output['success'] = true;
           }
           else{
              $output['warning'] = true;
           }
        }
        else{
            $output['error'] = true;
        }
    echo json_encode($output);
  }

  function _create_thumbs($file_name){
        // Image resizing config
        $config = array(
            // Image for tender
            array(
                'image_library' => 'GD2',
                'source_image'  => './assets/Gambar/tender/'.$file_name,
                'maintain_ratio'=> FALSE,
                'width'         => 450,
                'height'        => 450,
                'new_image'     => './assets/Gambar/tender/'.$file_name
                ),
            // Image Large
            array(
                'image_library' => 'GD2',
                'source_image'  => './assets/Gambar/tender/'.$file_name,
                'maintain_ratio'=> FALSE,
                'width'         => 555,
                'height'        => 230,
                'new_image'     => './assets/Gambar/tender/large/'.$file_name
                ),
            // image Medium
            array(
                'image_library' => 'GD2',
                'source_image'  => './assets/Gambar/tender/'.$file_name,
                'maintain_ratio'=> FALSE,
                'width'         => 770,
                'height'        => 420,
                'new_image'     => './assets/Gambar/tender/medium/'.$file_name
                ),
            // Image Small
            array(
                'image_library' => 'GD2',
                'source_image'  => './assets/Gambar/tender/'.$file_name,
                'maintain_ratio'=> FALSE,
                'width'         => 100,
                'height'        => 67,
                'new_image'     => './assets/Gambar/tender/small/'.$file_name
            ));
 
        $this->load->library('image_lib', $config[0]);
        foreach ($config as $item){
            $this->image_lib->initialize($item);
            if(!$this->image_lib->resize()){
                return false;
            }
            $this->image_lib->clear();
        }
    }

  // function ajax_get_list_pelamar(){
  //   $data = $this->M_produsen->get_list_pelamar();
  //   echo json_encode($data);
  // }

  // function edit_tender(){
  //   echo $this->input->post('deskripsi');
  // }

  // function view_rekomendasi(){
  //     $this->load->view('Konsumen/Header');
  //     $this->load->view('Konsumen/v_view_rekomendasi');
  // }

  function detail_tender($id_tender, $rekomendasi=''){
    $hasil = false;
    if($rekomendasi == 'rekomendasi'){
      $hasil = $this->M_ichm->getTenderRecommendation($id_tender);
       
        
    }

    $data['hasil'] = $hasil;
    $data['detail_tender'] = $this->m_admin->detail_tender($id_tender);

      $this->load->view('Konsumen/inc/v_navbar');
      $this->load->view('Konsumen/v_detail_rekomendasi', $data);
  }

  function list_pengerjaan_tender(){
      $id_konsumen      = $this->session->userdata('ses_id');
      $data['pengerjaan_tender']   = $this->m_konsumen->list_pengerjaan_tender($id_konsumen);
      $this->load->view('Konsumen/inc/v_navbar');
      $this->load->view('Konsumen/v_view_pengerjaan_tender', $data);
  }

  function detail_pengerjaan($pengerjaan_id, $id_produsen){
      $id_konsumen = $this->session->userdata('ses_id');
      $data['detail_pengerjaan']  = $this->m_konsumen->detail_pengerjaan($pengerjaan_id);
      $data['rating']             = $this->m_konsumen->get_rating($id_konsumen, $id_produsen);
      $this->load->view('Konsumen/v_detail_pengerjaan', $data);
  }



  public function userRating(){
        // id_konsumen
        $id_konsumen = $this->session->userdata('ses_id');
        $rating = $this->input->post('rating');
        $id_produsen = $this->input->post('id_produsen');
        
        $hasil = $this->m_konsumen->userRating($id_konsumen,$id_produsen,$rating);

        // echo $averageRating;
        exit;
    }

  function profile(){
      $id_konsumen      = $this->session->userdata('ses_id');
      $data['profile']  = $this->m_konsumen->data_profile($id_konsumen);
      $this->load->view('Konsumen/inc/v_navbar');
      $this->load->view('Konsumen/v_view_profile', $data);
  }

  function edit_profile(){
    $output = array('error' => false);
    $id_konsumen = $this->input->post('id_konsumen');
    $nama = $this->input->post('profile_nama');
    $alamat = $this->input->post('profile_alamat');
    $no_tlp = $this->input->post('profile_no_tlp');
    $kota = $this->input->post('profile_kota');
    $email  = $this->input->post('profile_email');
    $username = $this->input->post('profile_username');

        $config['upload_path']    = './assets/Gambar/profile/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg|bmp';
        //$config['max_size']     = '2048';

        $this->upload->initialize($config);
      

        if(!empty($_FILES['file_foto']['name'])){
          if($this->upload->do_upload('file_foto')){
            $new_image = $this->upload->data('file_name');

              $this->m_konsumen->update_data_profile_dengan_gambar($id_konsumen, $nama, $alamat, $no_tlp, $kota, $email, $username, $new_image);
                $output['success'] = true;
              
          }
          else{
            $output['warning'] = true;
          }
        }
        else{
            $this->m_konsumen->update_data_profile_tanpa_gambar($id_konsumen, $nama, $alamat, $no_tlp, $kota, $email, $username);
           $output['success'] = true;
          }

          echo json_encode($output);
  }

  function checkemail_konsumen(){
    $email = $_POST['email'];
    $ses_email      = $this->session->userdata('ses_email');
    $data = $this->m_konsumen->checkemail_konsumen($email);

    
    if($data>0){
      if($data['email'] == $ses_email){
        echo 1;
      }
      else{
        echo 0;
      }
    }
    else{
      echo 1;
    }
  }

  function checkusername_konsumen(){
    $username = $_POST['username'];
    $ses_username      = $this->session->userdata('ses_username');
    $data = $this->m_konsumen->checkusername_konsumen($username);

    if($data>0){
      if($data['username'] == $ses_username){
        echo 1;
      }
      else{
        echo 0;
      }
    }
    else{
      echo 1;
    }
  }

  function add_pengerjaan(){
    $id_konsumen      = $this->session->userdata('ses_id');
    $pengerjaan_judul     = $this->input->post('pengerjaan_judul');
    $pengerjaan_deskripsi = $this->input->post('pengerjaan_deskripsi');
    $pengerjaan_deadline  = $this->input->post('pengerjaan_deadline');
    $pengerjaan_gambar    = $this->input->post('pengerjaan_gambar');
    $id_produsen          = $this->input->post('id_produsen');
    $pengerjaan_status    = 1;
    $this->m_konsumen->insert_pengerjaan_tender($id_konsumen, $id_produsen, $pengerjaan_judul, $pengerjaan_deskripsi, $pengerjaan_deadline, $pengerjaan_gambar, $pengerjaan_status);
  }

  function change_passwrod(){
      $id_konsumen  = $this->session->userdata('ses_id');
      $data['pass'] = $this->m_konsumen->data_password($id_konsumen);
      $this->load->view('Konsumen/inc/v_navbar');
      $this->load->view('Konsumen/v_change_password', $data);
  }

  function save_new_pass(){
    $output = array('warning' => false);
    $output = array('error' => false);
    $output = array('success' => false);
    $database_password  = $this->input->post('password_database');
    $old_password = $this->input->post('password_lama');
    $current_password = $this->input->post('password_baru');
    $confirm_password = $this->input->post('password_confirm');
    $password_encrypt = md5($this->input->post('password_baru'));
    $id_konsumen      = $this->input->post('id_konsumen');

    if(md5($old_password) != $database_password){
      $output['warning'] = true;
    }
    else{
      if($old_password == $current_password){
        $output['error'] = true;
      }
      else{
        $this->m_konsumen->change_passwrod($password_encrypt, $id_konsumen);
        $output['success'] = true;
      }
    }
    echo json_encode($output);
  }

  function progres_pengerjaan_tender(){
      $id_konsumen  = $this->session->userdata('ses_id');
      $data['progres_pengerjaan']  = $this->m_konsumen->progres_pengerjaan($id_konsumen);
      $this->load->view('Konsumen/inc/v_navbar');
      $this->load->view('Konsumen/v_view_progres_tender',$data);
  }

  function delete_tender(){
    $tender_id  = $this->input->post('kode');
    $data     = $this->m_konsumen->delete_tender($tender_id);
    echo json_encode($data);
  }

  function logout(){
      $this->session->sess_destroy();
      $url=base_url('Home');
      redirect($url);
  }

}
