<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konsumen extends CI_Model{

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

  function list_tender($username){
    $hsl=$this->db->query("SELECT * FROM tb_tender WHERE username_konsumen='$username'");
    return $hsl;
  }

    function get_data_produsen($id_produsen){
      $query = $this->db->where("id_produsen", $id_produsen)
        ->get("tb_produsen");

    if($query){
      return $query->row();
    }else{
      return false;
    }
  }

  function insert_tender($judul, $deskripsi, $gambar, $deadline, $username_konsumen, $tanggal_buka, $tanggal_tutup, $id_status_tender){
        $hasil = $this->db->query("INSERT INTO tb_tender (tittle, deskripsi, gambar, deadline, username_konsumen, tanggal_buka, tanggal_tutup, id_status_tender)VALUES('$judul','$deskripsi','$gambar','$deadline','$username_konsumen', '$tanggal_buka','$tanggal_tutup','$id_status_tender')");

    return $hasil;
  }
  function create($table,$data){
    $query = $this->db->insert($table, $data);
    return $this->db->insert_id();// return last insert id
}
 function create_2($table,$data){
    $query = $this->db->insert($table, $data);
    return $this->db->insert_id();// return last insert id
}

  function list_pengerjaan_tender($id_konsumen){
    $hsl=$this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE id_konsumen='$id_konsumen'");
    return $hsl;
  }

  function detail_pengerjaan($pengerjaan_id){
    $hsl=$this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE pengerjaan_id='$pengerjaan_id'");
    return $hsl->row();
  }
  function progresbar_pengerjaan($pengerjaan_id, $id_produsen){
    $hsl=$this->db->query("SELECT * FROM tb_progres_pengerjaan WHERE pengerjaan_id='$pengerjaan_id' AND id_produsen='$id_produsen'");
    return $hsl->row();
  }

  function get_rating($id_konsumen, $id_produsen){
      // User rating
      $this->db->select('rating');
      $this->db->from('tb_rating');
      $this->db->where("id_konsumen", $id_konsumen);
      $this->db->where("id_produsen", $id_produsen);
      $userRatingquery = $this->db->get();
          
          $userpostResult = $userRatingquery->result_array();

          $userRating = 0;
          if(count($userpostResult)>0){
            $userRating = $userpostResult[0]['rating'];
          }
          $arrayRating = array('rating' => $userRating );
          return $arrayRating;
  }

  // Save user rating
  function userRating($id_konsumen,$id_produsen, $id_tender, $rating, $ulasan){
    $this->db->select('*');
    $this->db->from('tb_rating');
    $this->db->where("id_produsen", $id_produsen);
    $this->db->where("id_konsumen", $id_konsumen);
    $userRatingquery = $this->db->get();
        
        // $userRatingResult = $userRatingquery->result_array();
        // if(count($userRatingResult) > 0){

        //   $postRating_id = $userRatingResult[0]['id_rating'];
        //   // Update
        //     $value=array('rating'=>$rating);
        //     $this->db->where('id_rating',$postRating_id);
        //     $this->db->update('tb_rating',$value);
        // }else{
          $userRating = array(
               "id_produsen" => $id_produsen,
               "id_konsumen" => $id_konsumen,
               "id_tender" => $id_tender,
               "rating" => $rating,
               "ulasan" => $ulasan
            );

            $this->db->insert('tb_rating', $userRating);
        //}
    }
    function cek_status_rating($id_produsen, $id_konsumen, $id_tender){
      $this->db->where('id_produsen', $id_produsen);
      $this->db->where('id_konsumen', $id_konsumen);
      $this->db->where('id_tender', $id_tender);
      return $this->db->get('tb_rating')->row_array();
    }
    function konfirmasi_tender($id_produsen, $id_konsumen, $id_tender){
      $sql = $this->db->query("UPDATE tb_pengerjaan_tender SET pengerjaan_status='Selesai' WHERE id_produsen='$id_produsen' AND id_konsumen='$id_konsumen' AND id_tender = '$id_tender'");
      return $sql;
    }
    function data_profile($id_konsumen){
      $hsl=$this->db->query("SELECT * FROM tb_konsumen WHERE id_konsumen = '$id_konsumen'");
      return $hsl->row();
    }

    public function checkemail_konsumen($email){
      $this->db->where('email', $email);
      return $this->db->get('tb_konsumen')->row_array();
    }

    public function checkusername_konsumen($username){
      $this->db->where('username', $username);
      return $this->db->get('tb_konsumen')->row_array();
    }

    
    function update_data_profile_dengan_gambar($id_konsumen, $nama, $alamat, $no_tlp, $kota, $email, $username, $new_image){
      $hsl=$this->db->query("UPDATE tb_konsumen SET nama='$nama', alamat='$alamat',no_tlp='$no_tlp',kota='$kota', email='$email', username='$username', foto='$new_image' WHERE id_konsumen='$id_konsumen'");
      return $hsl;
    }

    function update_data_profile_tanpa_gambar($id_konsumen, $nama, $alamat, $no_tlp, $kota, $email, $username){
      $hsl=$this->db->query("UPDATE tb_konsumen SET nama='$nama', alamat='$alamat',no_tlp='$no_tlp',kota='$kota', email='$email', username='$username' WHERE id_konsumen='$id_konsumen'");
      return $hsl;
    }

    function insert_permintaan_tender($id_konsumen, $id_produsen, $id_tender, $pengerjaan_judul, $pengerjaan_deskripsi, $pengerjaan_deadline, $pengerjaan_gambar){
        $hasil = $this->db->query("INSERT INTO tb_permintaan_pengerjaan (id_tender, id_konsumen, id_produsen, permintaan_judul, permintaan_deskripsi, permintaan_deadline, permintaan_gambar)VALUES('$id_tender','$id_konsumen','$id_produsen','$pengerjaan_judul','$pengerjaan_deskripsi','$pengerjaan_deadline', '$pengerjaan_gambar')");

    return $hasil;
  }

  function data_password($id_konsumen){
    $hsl=$this->db->query("SELECT * FROM tb_konsumen WHERE id_konsumen = '$id_konsumen'");
      return $hsl->row();
  }

  function change_passwrod($password_encrypt, $id_konsumen){
    $hsl = $this->db->query("UPDATE tb_konsumen SET password='$password_encrypt' WHERE id_konsumen = '$id_konsumen'" );
    return $hsl;
  }

  function progres_pengerjaan($id_konsumen){
    $hasil = $this->db->query("SELECT * FROM tb_pengerjaan_tender INNER JOIN tb_progres_pengerjaan ON tb_pengerjaan_tender.pengerjaan_id = tb_progres_pengerjaan.pengerjaan_id WHERE tb_pengerjaan_tender.id_konsumen='$id_konsumen'");
    return $hasil;
  }

  function sel_progres($id_konsumen){
    $this->db->select('*');
    $data = $this->db->get('tb_pengerjaan_tender');
    $response = $data->result_array();
    return $response;
  }

  function delete_tender($tender_id){
    $hasil = $this->db->query("DELETE tb_tender, tb_lamaran FROM tb_tender INNER JOIN tb_lamaran ON tb_tender.id_tender = tb_lamaran.id_tender WHERE tb_tender.id_tender='$tender_id'");
    return $hasil;
  }

  function get_data_grafik($tgl1, $tgl2){
      $hasil = $this->db->query("SELECT * FROM tb_tender INNER JOIN tb_lamaran ON tb_tender.id_tender = tb_lamaran.id_tender WHERE tb_tender.id_tender = '28'");
      return $hasil;
  }

  function get_reminder_tender($username){
    $hsl=$this->db->query("SELECT * FROM tb_tender WHERE username_konsumen='$username'");
    return $hsl;
  }

  function get_data_recent_lamaran($username_produsen){
    $hsl = $this->db->query("SELECT tittle, lamaran_dibuat FROM tb_tender JOIN tb_lamaran ON tb_lamaran.id_tender = tb_tender.id_tender WHERE tb_lamaran.username_produsen = '$username_produsen' LIMIT 4");
    return $hsl->result();
  }

  function get_data_projek($id_produsen){
    $hsl = $this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE id_produsen = '$id_produsen' LIMIT 5");
    return $hsl;
  }

  function get_data_progres($id_produsen){
    $hsl = $this->db->query("SELECT * FROM tb_progres_pengerjaan WHERE id_produsen = '$id_produsen' LIMIT 4");
    return $hsl;
  }

  function get_data_total_projek_selesai($id_produsen){
    $hsl = $this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE id_produsen = '$id_produsen' AND pengerjaan_status = 'selesai'");
    return $hsl;
  }

  function get_data_total_lamaran($username_produsen){
    $hsl = $this->db->query("SELECT * FROM tb_lamaran WHERE username_produsen = '$username_produsen'");
    return $hsl;
  }

  function get_data_total_prokek_dikerjakan($id_produsen){
    $hsl = $this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE id_produsen = '$id_produsen' AND pengerjaan_status = 'Dikerjakan'");
    return $hsl;
  }
  function get_data_status_permintaan($id_tender, $id_konsumen, $id_produsen){
    $hsl = $this->db->query("SELECT * FROM tb_permintaan_pengerjaan WHERE id_tender = '$id_tender' AND id_konsumen = '$id_konsumen' AND id_produsen = '$id_produsen'");
    return $hsl->row_array();
  }
  function cek_data_tender($id_tender){
    $hsl=$this->db->query("SELECT * FROM tb_tender WHERE id_tender='$id_tender'");
    return $hsl;
  }
  function delete_tender_1($id_tender){
    $hsl=$this->db->query("DELETE FROM tb_tender WHERE id_tender='$id_tender'");
    return $hsl;
  }
  function get_selected_progres($id_pengerjaan){
    $this->db->select('*');
    $this->db->where('pengerjaan_id', $id_pengerjaan);
    $data = $this->db->get('tb_progres_pengerjaan');
    $response = $data->result_array();

    return $response;
  }
  function jum_tender_didaftarkan($username_konsumen){
    $hasil = $this->db->query("SELECT * FROM tb_tender WHERE username_konsumen = '$username_konsumen'");
    return $hasil;
  }
  function jum_tender_dikerjakan($id_konsumen){
    $hasil = $this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE id_konsumen = '$id_konsumen'");
    return $hasil;
  }
  function jum_tender_selesai($id_konsumen){
    $hasil = $this->db->query("SELECT * FROM tb_pengerjaan_tender WHERE id_konsumen = '$id_konsumen' AND pengerjaan_status='Tunda'");
    return $hasil;
  }
  function data_tender($username_konsumen){
    $hasil = $this->db->query("SELECT * FROM tb_tender INNER JOIN tb_status_tender ON tb_tender.id_status_tender = tb_status_tender.id_status_tender WHERE tb_tender.username_konsumen = '$username_konsumen'");
    return $hasil->result();
  }

  function tender_dikerjakan(){
    $hasil = $this->db->query("SELECT * FROM tb_pengerjaan_tender LIMIT 3");
    return $hasil->result();
  }

  function review_konsumen(){
    $hasil = $this->db->query("SELECT * FROM tb_rating INNER JOIN tb_konsumen ON tb_rating.id_konsumen = tb_konsumen.id_konsumen LIMIT 4");
    return $hasil->result();
  }

  function cari_data_tender(){
    $hasil = $this->db->query("SELECT * FROM tb_tender ORDER BY id_tender DESC LIMIT 1");
    return $hasil->result();
  }

}

?>