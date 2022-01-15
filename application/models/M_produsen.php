<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produsen extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get_list_pelamar(){
    $this->db->join('tb_user', 'tb_user.username = tb_lamaran.username_produsen');
    $this->db->where('tb_lamaran.id_tender', $this->input->post('id_tender'));
    return $this->db->get('tb_lamaran')->result();
  }

  function lamar_tender(){
    $data=array(
      'id_tender' => $this->input->post('id_tender'),
      'username_produsen' =>$this->session->userdata('ses_username'),
      'tawaran_harga' => $this->input->post('tawaran_harga'),
      'id_status_lamaran' => 3
    );

    $nama_file = time().$_FILES['rab']['name'];
    $nama_file = str_replace(' ','_',$nama_file);
    $config['upload_path'] = './assets/file/rab/';
    $config['allowed_types'] = 'pdf';
    $config['file_name'] = $nama_file;
    $this->upload->initialize($config);

    if (!empty($_FILES['rab']['name'])) {
      $data['rab'] = $nama_file;
      if (!$this->upload->do_upload('rab')){
        echo $this->upload->display_errors();
        
      }
      else{
        //$result = array('upload_data' => $this->upload->data());
        if ($this->db->insert('tb_lamaran', $data)) {
          return 1;
        }
      }
    }
  }

  function list_lamaran($username_produsen){
    $hasil = $this->db->query("SELECT * FROM tb_lamaran INNER JOIN tb_tender ON tb_lamaran.id_tender = tb_tender.id_tender WHERE tb_lamaran.username_produsen='$username_produsen'");
    return $hasil;
  }

  function edit_lamaran($id_lamaran){
    $hasil = $this->db->query("SELECT * FROM tb_lamaran INNER JOIN tb_tender ON tb_lamaran.id_tender = tb_tender.id_tender WHERE tb_lamaran.id_lamaran='$id_lamaran'");
    return $hasil->row();
  }

  function update_data_lamaran_dengan_file($id_lamaran, $rab, $tawaran_harga){
    $hasil=$this->db->query("UPDATE tb_lamaran SET rab='$rab', tawaran_harga='$tawaran_harga' WHERE id_lamaran='$id_lamaran'");
        return $hasil;
  }

  function insert_progres_tender($id_produsen, $pengerjaan_id, $keterangan, $gambar1, $gambar2, $gambar3){
    $hasil = $this->db->query("INSERT INTO tb_progres_pengerjaan (id_produsen, pengerjaan_id, progres_keterangan, progres_gambar1, progres_gambar2, progres_gambar3)VALUES('$id_produsen','$pengerjaan_id','$keterangan','$gambar1','$gambar2', '$gambar3')");

    return $hasil;
  }

  function get_pengerjaan_tender($id_produsen){
    $hasil = $this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE id_produsen='$id_produsen'");
    return $hasil;
  }

  function list_permintaan($id_produsen){
    $hasil = $this->db->query("SELECT * FROM tb_permintaan_pengerjaan WHERE id_produsen='$id_produsen'");
    return $hasil;
  }

  function update_status_pengerjaan($pengerjaan_id){
    $update = $this->db->query("UPDATE tb_pengerjaan_tender SET pengerjaan_status='Dikerjakan' WHERE pengerjaan_id='$pengerjaan_id'");
    return $update;
  }

  function update_status_pengerjaan_selesai($pengerjaan_id){
    $update = $this->db->query("UPDATE tb_pengerjaan_tender SET pengerjaan_status='Tunda' WHERE pengerjaan_id='$pengerjaan_id'");
    return $update;
  }

   function list_pengerjaan($id_produsen){
    $hasil = $this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE id_produsen='$id_produsen' AND pengerjaan_status='Dikerjakan'");
    return $hasil;
  }

   function data_profile($id_produsen){
      $hsl=$this->db->query("SELECT * FROM tb_produsen WHERE id_produsen = '$id_produsen'");
      return $hsl->row();
    }

  public function checkemail_produsen($email){
      $this->db->where('email', $email);
      return $this->db->get('tb_produsen')->row_array();
  }

  public function checkusername_produsen($username){
    $this->db->where('username', $username);
    return $this->db->get('tb_produsen')->row_array();
  }

  function update_data_profile_dengan_gambar($id_produsen, $nama, $alamat, $kota, $no_tlp, $email, $kode_npwp, $username, $gambar){
      $hsl=$this->db->query("UPDATE tb_produsen SET nama='$nama', alamat='$alamat', kota='$kota', no_tlp='$no_tlp', email='$email', kode_npwp='$kode_npwp', username='$username', foto='$gambar' WHERE id_produsen='$id_produsen'");
      return $hsl;
  }

  function update_data_profile_tanpa_gambar($id_produsen, $nama, $alamat, $no_tlp, $kota, $email, $kode_npwp, $username){
      $hsl=$this->db->query("UPDATE tb_produsen SET nama='$nama', alamat='$alamat', no_tlp='$no_tlp', kota='$kota', email='$email', kode_npwp='$kode_npwp', username='$username' WHERE id_produsen='$id_produsen'");
      return $hsl;
  }

  function data_profile_pt($id_produsen){
      $hsl=$this->db->query("SELECT * FROM tb_produsen WHERE id_produsen = '$id_produsen'");
      return $hsl->row();
    }

  function update_data_profile_pt($id_produsen, $nama_pt, $deskripsi_pt){
      $hsl=$this->db->query("UPDATE tb_produsen SET nama_pt='$nama_pt', deskripsi_pt='$deskripsi_pt' WHERE id_produsen='$id_produsen'");
      return $hsl;
  }

  function data_password($id_produsen){
    $hsl=$this->db->query("SELECT * FROM tb_produsen WHERE id_produsen = '$id_produsen'");
      return $hsl->row();
  }

  function change_passwrod($password_encrypt, $id_produsen){
    $hsl = $this->db->query("UPDATE tb_produsen SET password='$password_encrypt' WHERE id_produsen = '$id_produsen'" );
    return $hsl;
  }
  function insert_pengerjaan_tender($id_tender, $id_konsumen, $id_produsen ,$pengerjaan_judul, $pengerjaan_deskripsi, $pengerjaan_deadline, $pengerjaan_gambar){
        $hasil = $this->db->query("INSERT INTO tb_pengerjaan_tender (id_tender, id_konsumen, id_produsen, pengerjaan_judul, pengerjaan_deskripsi, pengerjaan_deadline, pengerjaan_gambar, pengerjaan_status)VALUES('$id_tender','$id_konsumen','$id_produsen','$pengerjaan_judul','$pengerjaan_deskripsi','$pengerjaan_deadline', '$pengerjaan_gambar','Dikerjakan')");

           return $hasil;
      $this->db->where('id_tender', $id_tender);
      $this->db->where('id_konsumen', $id_konsumen);
      $this->db->where('id_produsen', $id_produsen);
      $coba =  $this->db->get('tb_pengerjaan_tender')->row_array();

      $ha = $coba->pengerjaan_id;

        $insert = $this->db->query("INSERT INTO tb_progres_pengerjaan (id_produsen, pengerjaan_id, progres_pengerjaan)VALUES('$id_produsen','$ha','0')");

        $delete = $this->db->query("DELETE FROM tb_permintaan_pengerjaan WHERE id_tender = '$id_tender' AND id_konsumen = '$id_konsumen' AND id_produsen = '$id_produsen'");


    return $insert;
    return $delete;

}

function jum_lamaran($username_produsen){
  $hasil = $this->db->query("SELECT * FROM tb_lamaran WHERE username_produsen = '$username_produsen'");
  return $hasil;
}
function jum_tender_dikerjakan($id_produsen){
  $hasil = $this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE id_produsen = '$id_produsen'");
  return $hasil;
}
function jum_tender_selesai($id_produsen){
  $hasil = $this->db->query("SELECT * FROM tb_produsen WHERE id_produsen = '$id_produsen'");
  return $hasil->row();
}
function data_tender($username_konsumen){
  $hasil = $this->db->query("SELECT * FROM tb_tender INNER JOIN tb_status_tender ON tb_tender.id_status_tender = tb_status_tender.id_status_tender WHERE tb_tender.username_konsumen = '$username_konsumen'");
  return $hasil->result();
}
}
