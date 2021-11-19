<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produsen extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('M_produsen','M_tender'));
    //Codeigniter : Write Less Do More
    if ($this->session->userdata('is_login')!=TRUE) {
      redirect(base_url("home"));
    }
    $this->load->library('upload');
  }
  
  function index(){
      $tender['tender'] = $this->M_tender->get_all_tender();
      for ($i=0; $i < sizeof($tender['tender']); $i++) {
        $tender['tender'][$i]->tanggal_buka = date('d F Y', strtotime($tender['tender'][$i]->tanggal_buka));
        $tender['tender'][$i]->tanggal_tutup = date('d F Y', strtotime($tender['tender'][$i]->tanggal_tutup));
        $tender['tender'][$i]->deadline = date('d F Y', strtotime($tender['tender'][$i]->deadline));
      }
      $this->load->view('Produsen/inc/v_navbar');
      $this->load->view('Produsen/inc/v_sidebar');
      $this->load->view('Produsen/v_view_beranda', $tender);
      
  }

  function detail_tender(){
      
      $this->load->view('Produsen/inc/navbar');
      $this->load->view('Produsen/inc/sidebar');
      $this->load->view('Produsen/Detail_tender');
      $this->load->view('Produsen/inc/footer');
  }

  function profil(){

    $this->load->view('Produsen/Header');
    $this->load->view('Produsen/Profil');
  }

  function list_lamaran(){
    $username_produsen = $this->session->userdata('ses_username');
    $data['lamaran'] = $this->M_produsen->list_lamaran($username_produsen);
    $this->load->view('Produsen/inc/v_navbar');
    $this->load->view('Produsen/inc/v_sidebar');
    $this->load->view('Produsen/v_view_lamaran',$data);
  }

  function view_edit_lamaran($id_lamaran){
    $data['edit_lamaran'] = $this->M_produsen->edit_lamaran($id_lamaran);
    $this->load->view('Produsen/inc/v_navbar');
    $this->load->view('Produsen/inc/v_sidebar');
    $this->load->view('Produsen/v_edit_lamaran',$data);
  }

  

  function lamar_tender(){
    $data = $this->M_produsen->lamar_tender();
    if ($data==1) {
      $this->session->set_flashdata('success', 'Berhasil Melamar Pada Tender!');
    }
    else {
      $this->session->set_flashdata('error', 'Gagal Melamar Pada Tender!');
    }
    redirect('Produsen/');
  }

  function edit_lamar_tender(){
        $tawaran_harga     = $this->input->post('tawaran_harga');
        $id_lamaran     = $this->input->post('id_lamaran');

        $config['upload_path']    = './assets/File_RAB_Tender/';
        $config['allowed_types']  = 'pdf|docx';
        //$config['max_size']     = '2048';

        $upload_image = $_FILES['file_penawaran']['name'];
        $this->upload->initialize($config);



        if(!empty($_FILES['file_penawaran']['name'])){
          if($this->upload->do_upload('file_penawaran')){
            $rab = $this->upload->data('file_name');
            $this->M_produsen->update_data_lamaran_dengan_file($id_lamaran, $rab, $tawaran_harga);
            ?>
            <script type="text/javascript">
            toastr.options.onHidden = function() { window.location.href = 'Produsen'; }
                  toastr.warning('Data post tidak diupload.', 'Gagal!');
                  </script>
                  <?php

          }
          else{
            echo $this->session->set_flashdata('msg','warning');
            redirect('page/profil');
          }
        }
        else{
         
        }
  }

  function progres_tender(){
    $id_produsen = $this->session->userdata('ses_id');
    $data['list_pengerjaan'] = $this->M_produsen->get_pengerjaan_tender($id_produsen);
    $this->load->view('Produsen/inc/v_navbar');
    $this->load->view('Produsen/inc/v_sidebar');
    $this->load->view('Produsen/v_view_progres_tender', $data);
  }

  function upload_progres_tender(){
      $config['upload_path'] = './assets/Gambar/progres_pengerjaan/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

      $keterangan = $this->input->post('progres_keterangan');
      $pengerjaan_id = $this->input->post('pengerjaan_tender');
      $id_produsen = $this->session->userdata('ses_id');
      $this->upload->initialize($config);

      if(!empty($_FILES['progres_gambar1']['name'])){
        if($this->upload->do_upload('progres_gambar1')){
          $gbr = $this->upload->data();

          //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/Gambar/progres_pengerjaan/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '90%';
                $config['width']= 400;
                $config['height']= 400;
                $config['new_image']= './assets/Gambar/progres_pengerjaan/400x400/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();
                $gambar1=$gbr['file_name'];
        }
      }
      if(!empty($_FILES['progres_gambar2']['name'])){
        if($this->upload->do_upload('progres_gambar2')){
         $gbr2 = $this->upload->data();

          //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/Gambar/progres_pengerjaan/'.$gbr2['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '90%';
                $config['width']= 400;
                $config['height']= 400;
                $config['new_image']= './assets/Gambar/progres_pengerjaan/400x400/'.$gbr2['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();
                $gambar2=$gbr2['file_name'];



        }
      }
      if(!empty($_FILES['progres_gambar3']['name'])){
        if($this->upload->do_upload('progres_gambar3')){
         $gbr3 = $this->upload->data();

          //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/Gambar/progres_pengerjaan/'.$gbr3['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['width']= 400;
                $config['height']= 400;
                $config['new_image']= './assets/Gambar/progres_pengerjaan/400x400/'.$gbr3['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();
                $this->image_lib->clear();
                $gambar3=$gbr3['file_name'];
        }
      }

      if($gambar1 !='' && $gambar2 !='' && $gambar3 !=''){
        $this->M_produsen->insert_progres_tender($id_produsen, $pengerjaan_id, $keterangan, $gambar1, $gambar2, $gambar3);
      }
      else{
        echo 'Data ada yang salah';
      }

      // for ($i=1; $i <=3 ; $i++) { 
      //   if(!empty($_FILES['file_progres'.$i]['name'])){
      //     if(!$this->upload->do_upload('file_progres'.$i))
      //       $this->upload->display_errors();  
      //     else
      //       $gambar.$i = $this->upload->data('file_name');
      //       $this->M_produsen->insert_progres_tender($id_produsen, $pengerjaan_id, $keterangan, $gambar1, $gambar2, $gambar3);
      //   }
      // }
  }

  function list_permintaan(){
    $id_produsen = $this->session->userdata('ses_id');
    $data['permintaan'] = $this->M_produsen->list_permintaan($id_produsen);
    $this->load->view('Produsen/inc/v_navbar');
    $this->load->view('Produsen/inc/v_sidebar');
    $this->load->view('Produsen/v_view_permintaan',$data);
  }

  function proses_konfirmasi_pengerjaan(){
    $pengerjaan_id = $_POST['id'];

    $update = $this->M_produsen->update_status_pengerjaan($pengerjaan_id);
    if($update)
    {
      $data['isSuccess']=true;
    }
    else
    {
      $data['isSuccess']=false;
    }
    echo json_encode($data);

  }

  function konfirmasi_pengerjaan_selesai(){
    $pengerjaan_id = $_POST['id'];

    $update = $this->M_produsen->update_status_pengerjaan_selesai($pengerjaan_id);
    if($update)
    {
      $data['isSuccess']=true;
    }
    else
    {
      $data['isSuccess']=false;
    }
    echo json_encode($data);
  }

  function list_pengerjaan(){
    $id_produsen = $this->session->userdata('ses_id');
    $data['pengerjaan'] = $this->M_produsen->list_pengerjaan($id_produsen);
    $this->load->view('Produsen/inc/v_navbar');
    $this->load->view('Produsen/inc/v_sidebar');
    $this->load->view('Produsen/v_view_pengerjaan',$data);
  }

  function profile(){
      $id_produsen      = $this->session->userdata('ses_id');
      $data['profile']  = $this->M_produsen->data_profile($id_produsen);
      $this->load->view('Produsen/inc/v_navbar');
      $this->load->view('Produsen/inc/v_sidebar');
      $this->load->view('produsen/v_view_profile', $data);
  }

   function checkemail_produsen(){
    $email = $_POST['email'];
    $ses_email      = $this->session->userdata('ses_email');
    $data = $this->M_produsen->checkemail_produsen($email);

    
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

  function checkusername_produsen(){
    $username = $_POST['username'];
    $ses_username      = $this->session->userdata('ses_username');
    $data = $this->M_produsen->checkusername_produsen($username);

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

  function edit_profile(){
    $output = array('error' => false);
    $id_produsen = $this->input->post('id_produsen');
    $nama = $this->input->post('profile_nama');
    $alamat = $this->input->post('profile_alamat');
    $no_tlp = $this->input->post('profile_no_tlp');
    $kota = $this->input->post('profile_kota');
    $email  = $this->input->post('profile_email');
    $kode_npwp  = $this->input->post('profile_kode_npwp');
    $username = $this->input->post('profile_username');

        $config['upload_path']    = './assets/Gambar/profile/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;
        //$config['max_size']     = '2048';

        $this->upload->initialize($config);
      

        if(!empty($_FILES['foto_produsen']['name'])){
          if($this->upload->do_upload('foto_produsen')){
            $gambar = $this->upload->data('file_name');

              $this->M_produsen->update_data_profile_dengan_gambar($id_produsen, $nama, $alamat, $kota, $no_tlp, $email, $kode_npwp, $username, $gambar);
                $output['success'] = true;
              
          }
          else{
            $output['warning'] = true;
          }
        }
        else{
            $this->M_produsen->update_data_profile_tanpa_gambar($id_produsen, $nama, $alamat, $no_tlp, $kota, $email, $kode_npwp, $username);
           $output['success'] = true;
          }

          echo json_encode($output);
  }

  function pt_profile(){
      $id_produsen      = $this->session->userdata('ses_id');
      $data['profile_pt']  = $this->M_produsen->data_profile_pt($id_produsen);
      $this->load->view('Produsen/inc/v_navbar');
      $this->load->view('Produsen/inc/v_sidebar');
      $this->load->view('produsen/v_view_profile_pt', $data);
  }

  function edit_profile_pt(){
    $output       = array('error' => false);
    $id_produsen  = $this->input->post('id_produsen');
    $nama_pt      = $this->input->post('profile_nama_pt');
    $deskripsi_pt = $this->input->post('profile_deskripsi_pt');

        if(!empty($nama_pt) && !empty($deskripsi_pt)){
              $this->M_produsen->update_data_profile_pt($id_produsen, $nama_pt, $deskripsi_pt);
                $output['success'] = true;
          }
        else{
            $output['warning'] = true;
          }
          echo json_encode($output);
  }

  function change_password_produsen(){
    $id_produsen  = $this->session->userdata('ses_id');
    $data['pass_produsen'] = $this->M_produsen->data_password($id_produsen);
    $this->load->view('Produsen/inc/v_navbar');
    $this->load->view('Produsen/inc/v_sidebar');
    $this->load->view('produsen/v_view_change_password', $data);
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
    $id_produsen      = $this->input->post('id_produsen');

    if(md5($old_password) != $database_password){
      $output['warning'] = true;
    }
    else{
      if($old_password == $current_password){
        $output['error'] = true;
      }
      else{
        $this->M_produsen->change_passwrod($password_encrypt, $id_produsen);
        $output['success'] = true;
      }
    }
    echo json_encode($output);
  }

  function add_pengerjaan(){
    $id_tender            = $this->input->post('id_tender');
    $id_konsumen          = $this->input->post('id_konsumen');
    $id_produsen          = $this->input->post('id_produsen');
    $permintaan_judul     = $this->input->post('permintaan_judul');
    $permintaan_deskripsi = $this->input->post('permintaan_deskripsi');
    $permintaan_deadline  = $this->input->post('permintaan_deadline');
    $permintaan_gambar    = $this->input->post('permintaan_gambar');
   

    $this->M_produsen->insert_pengerjaan_tender($id_tender, $id_konsumen, $id_produsen ,$permintaan_judul, $permintaan_deskripsi, $permintaan_deadline, $permintaan_gambar);
  }

  function logout(){
      $this->session->sess_destroy();
      $url=base_url('Home');
      redirect($url);
  }

}
