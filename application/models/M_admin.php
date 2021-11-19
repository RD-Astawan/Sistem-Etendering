<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model{
	//Dashboar
	function get_total_tender(){
		$hasil=$this->db->query("SELECT * FROM tb_tender");
		return $hasil;
	}

	function get_total_lamaran(){
		$hasil=$this->db->query("SELECT * FROM tb_lamaran");
		return $hasil;
	}

	function get_total_produsen(){
		$hasil=$this->db->query("SELECT * FROM tb_produsen");
		return $hasil;
	}

	function get_total_konsumen(){
		$hasil=$this->db->query("SELECT * FROM tb_konsumen");
		return $hasil;
	}

	function get_grafik_lamaran(){
		// $this->db->group_by('id_status_lamaran');
  		// $this->db->select('id_status_lamaran');
  		// $this->db->select("count(id_status_lamaran) as jumlah");
  		// return $this->db->from('tb_lamaran')
  		// ->get()
 		// ->result();
		$query = $this->db->query("SELECT S.status_lamaran, COUNT(L.id_status_lamaran) as jumlah FROM tb_lamaran as L  JOIN tb_status_lamaran as S ON L.id_status_lamaran=S.id_status_lamaran GROUP BY S.status_lamaran");

		 if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }

	}

	function get_grafik_tender(){
		$query = $this->db->query("SELECT ST.status_tender, COUNT(T.id_status_tender) as hasil FROM tb_tender as T  JOIN tb_status_Tender as ST ON T.id_status_tender=ST.id_status_tender GROUP BY ST.status_tender");

		 if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }

	}

	//Slider
	function sliders_list(){
		$hasil=$this->db->query("SELECT * FROM tb_slider");
		return $hasil->result();
	}

	function insert_sliders($caption_1, $caption_2, $caption_3, $new_image){
		$hasil = $this->db->query("INSERT INTO tb_slider (gambar, caption_1, caption_2, caption_3)VALUES('$new_image','$caption_1','$caption_2','$caption_3')");

		return $hasil;
	}
	function get_edit_slider($id_slider){
		$query = $this->db->where("id_slider", $id_slider)
				->get("tb_slider");

		if($query){
			return $query->row();
		}else{
			return false;
		}
	}
	function update_data_sliders_dengan_gambar($id_slider, $caption_1, $caption_2, $caption_3, $new_image){
		$hsl=$this->db->query("UPDATE tb_slider SET gambar='$new_image', caption_1='$caption_1',caption_2='$caption_2',caption_3='$caption_3' WHERE id_slider='$id_slider'");
		return $hsl;
	}

	function update_data_sliders_tanpa_gambar($id_slider, $caption_1, $caption_2, $caption_3){
		$hsl=$this->db->query("UPDATE tb_slider SET caption_1='$caption_1',caption_2='$caption_2',caption_3='$caption_3' WHERE id_slider ='$id_slider'");
		return $hsl;
	}

	function cek_data_sliders($id_slider){
		$hsl=$this->db->query("SELECT * FROM tb_slider WHERE id_slider='$id_slider'");
		return $hsl;
	}

	function delete_sliders($id_slider){
		$hsl=$this->db->query("DELETE FROM tb_slider WHERE id_slider='$id_slider'");
		return $hsl;
	}


	//Post
	function post_list(){
		$hasil = $this->db->query("SELECT * FROM tb_post");
		return $hasil->result();
	}
	function insert_post($post_judul, $post_isi, $new_image, $post_author, $post_slug){
        $hasil = $this->db->query("INSERT INTO tb_post (post_judul, post_isi, post_gambar, post_author, post_slug)VALUES('$post_judul','$post_isi','$new_image','$post_author','$post_slug')");

		return $hasil;
    }
    function get_edit_post($post_id){
		$query = $this->db->where("post_id", $post_id)
				->get("tb_post");

		if($query){
			return $query->row();
		}else{
			return false;
		}
	}
	function edit_post_dengan_gambar($post_id, $post_judul, $post_isi, $new_image,$post_author){
		$hasil = $this->db->query("UPDATE tb_post SET post_judul='$post_judul', post_isi='$post_isi', post_gambar='$new_image', post_author='$post_author' WHERE post_id='$post_id'");

		return $hasil;
	}
	function edit_post_tanpa_gambar($post_id, $post_judul, $post_isi, $post_author){
		$hasil = $this->db->query("UPDATE tb_post SET post_judul='$post_judul', post_isi='$post_isi', post_author='$post_author' WHERE post_id='$post_id'");

		return $hasil;
	}
	function delete_post($post_id){
		$hasil = $this->db->query("DELETE FROM tb_post WHERE post_id='$post_id'");
		return $hasil;
	}


	//tender
	function get_all_tender(){
		$hasil = $this->db->query("SELECT * FROM tb_tender INNER JOIN tb_status_tender ON tb_tender.id_status_tender = tb_status_tender.id_status_tender");
		//$hasil = $this->db->query("SELECT * FROM tb_lamaran INNER JOIN tb_status_lamaran ON tb_lamaran.id_status_lamaran = tb_status_lamaran.id_status_lamaran");
		return $hasil->result();
	}
	function get_detail_tender($id_tender){
		$query = $this->db->where("id_tender", $id_tender)
				->get("tb_tender");

		if($query){
			return $query->row($id_tender);
		}else{
			return false;
		}
	}
	function delete_tender($id_tender){
		$hsl=$this->db->query("DELETE FROM tb_tender WHERE id_tender='$id_tender'");
		return $hsl;
	}
	public function get_data_tanggal_tender($tgl_sekarang){
		$query = $this->db->query("SELECT * FROM tb_tender WHERE tanggal_tutup < '$tgl_sekarang'");
		return $query;
	}

	function update_status_tender($tgl_sekarang){
		$hasil = $this->db->query("UPDATE tb_tender SET id_status_tender='2' WHERE tanggal_tutup < '$tgl_sekarang'");

		return $hasil;
	}


	//Lamaran
	function get_all_lamaran(){
		$hasil = $this->db->query("SELECT * FROM tb_lamaran INNER JOIN tb_status_lamaran ON tb_lamaran.id_status_lamaran = tb_status_lamaran.id_status_lamaran");

		return $hasil->result();
	}

	function delete_lamaran($id_lamaran){
		$hsl=$this->db->query("DELETE FROM tb_lamaran WHERE id_lamaran='$id_lamaran'");
		return $hsl;
	}

	//Admin
	function get_all_admin(){
		$hasil=$this->db->query("SELECT * FROM tb_admin");
		return $hasil->result();
	}
	function insert_admin($username, $password, $nama_lengkap, $email, $kelamin, $foto){
		$hasil = $this->db->query("INSERT INTO tb_admin (username, password, full_name, email, jenis_kelamin, foto)VALUES('$username','$password','$nama_lengkap','$email', '$kelamin', '$foto')");

		return $hasil;
	}

	public function checkemail_admin($email){
		$this->db->where('email', $email);
		return $this->db->get('tb_admin')->row_array();
	}

	function get_edit_admin($id_admin){
		$query = $this->db->where("id_admin", $id_admin)
				->get("tb_admin");

		if($query){
			return $query->row();
		}else{
			return false;
		}
	}

	function update_data_admin_dengan_gambar_dan_pass($id_admin, $username, $password, $full_name, $email, $jenis_kelamin, $new_image){
		$hasil=$this->db->query("UPDATE tb_admin SET username='$username', password='$password', full_name='$full_name', email='$email', jenis_kelamin='$jenis_kelamin', foto='$new_image' WHERE id_admin='$id_admin'");
        return $hasil;
	}

	function update_data_admin_dengan_gambar_tanpa_pass($id_admin, $username, $full_name, $email, $jenis_kelamin, $new_image){
		$hasil=$this->db->query("UPDATE tb_admin SET username='$username', full_name='$full_name', email='$email', jenis_kelamin='$jenis_kelamin', foto='$new_image' WHERE id_admin='$id_admin'");
        return $hasil;
	}

	function update_data_admin_tanpa_gambar_tapi_dengan_pass($id_admin, $username, $password, $full_name, $email, $jenis_kelamin){
		$hasil=$this->db->query("UPDATE tb_admin SET username='$username', password='$password', full_name='$full_name', email='$email', jenis_kelamin='$jenis_kelamin' WHERE id_admin='$id_admin'");
        return $hasil;
	}
	
	function update_data_admin_tanpa_gambar_dan_pass($id_admin, $username, $full_name, $email, $jenis_kelamin){
		$hasil=$this->db->query("UPDATE tb_admin SET username='$username', full_name='$full_name', email='$email', jenis_kelamin='$jenis_kelamin' WHERE id_admin='$id_admin'");
        return $hasil;
	}

	function delete_admin($id_admin){
		$hsl=$this->db->query("DELETE FROM tb_admin WHERE id_admin='$id_admin'");
		return $hsl;
	}


	//Produsen
	function get_all_produsen(){
		$hasil = $this->db->query("SELECT * FROM tb_produsen");
		return $hasil->result();
	}
	function get_detail_produsen($id_produsen){
		$query = $this->db->where("id_produsen", $id_produsen)
				->get("tb_produsen");

		if($query){
			return $query->row();
		}else{
			return false;
		}
	}
	function delete_produsen($id_produsen){
		$hsl=$this->db->query("DELETE FROM tb_produsen WHERE id_produsen='$id_produsen'");
		return $hsl;
	}

	//Konsumen
	function get_all_konsumen(){
		$hasil = $this->db->query("SELECT * FROM tb_konsumen");
		return $hasil->result();
	}

	function get_detail_konsumen($id_konsumen){
		$query = $this->db->where("id_konsumen", $id_konsumen)
				->get("tb_konsumen");

		if($query){
			return $query->row();
		}else{
			return false;
		}
	}

	function delete_konsumen($id_konsumen){
		$hsl=$this->db->query("DELETE FROM tb_konsumen WHERE id_konsumen='$id_konsumen'");
		return $hsl;
	}

	//Detail Profile
	function get_profil_by_code($data){
		$hsl=$this->db->query("SELECT * FROM tb_admin WHERE id_admin='$data'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'username' => $data->username,
                    'password' => $data->password,
                    'full_name' => $data->full_name,
                    'email'		=> $data->email,
                    'jenis_kelamin'	=> $data->jenis_kelamin
                    );
            }
        }
        return $hasil; 
	}
	function update_data_profil_dengan_pass($id_admin, $nama_lengkap, $username, $password, $jenis_kelamin, $email, $new_image){
		$hasil=$this->db->query("UPDATE tb_admin SET username='$username', password='$password', full_name='$nama_lengkap', email='$email', jenis_kelamin='$jenis_kelamin', foto='$new_image' WHERE id_admin='$id_admin'");
        return $hasil;
	}
	function update_data_profil_tanpa_pass($id_admin, $nama_lengkap, $username, $jenis_kelamin, $email, $new_image){
		$hasil=$this->db->query("UPDATE tb_admin SET username='$username', full_name='$nama_lengkap', email='$email', jenis_kelamin='$jenis_kelamin', foto='$new_image', admin_created=date('Y-m-d') WHERE id_admin='$id_admin'");
        return $hasil;
	}
	function update_data_profil_tanpa_pass_dan_gambar($id_admin, $nama_lengkap, $username, $jenis_kelamin, $email){
		$hasil = $this->db->query("UPDATE tb_admin SET username='$username', full_name='$nama_lengkap', email='$email', jenis_kelamin='$jenis_kelamin'  WHERE id_admin='$id_admin'");

		return $hasil;
	}
	function update_data_profil_tanpa_gambar($id_admin, $nama_lengkap, $username, $password, $jenis_kelamin, $email){
		$hasil=$this->db->query("UPDATE tb_admin SET username='$username', password='$password', full_name='$nama_lengkap', email='$email', jenis_kelamin='$jenis_kelamin' WHERE id_admin='$id_admin'");
        return $hasil;
	}
	public function check_username($username){
		$this->db->where('username', $username);
		return $this->db->get('tb_admin')->row_array();
	}
	function detail_tender($id_tender){
		$hsl=$this->db->query("SELECT * FROM tb_tender WHERE id_tender='$id_tender'");
		return $hsl->row();
	}

	//Log
	function get_all_log(){
		$hasil = $this->db->query("SELECT * FROM tb_log");
		return $hasil->result();
	}
   	public function delete_log_checkbox($data_checkboxs = array() ){

      	foreach($data_checkboxs as $logid){
         	$this->db->delete('tb_log', array('id_log' => $logid));
      	}
      	return 1;
   	}
   	function delete_log($id_log){
		$hsl=$this->db->query("DELETE FROM tb_log WHERE id_log='$id_log'");
		return $hsl;
	}
	//Kontak
	function get_data_kontak(){
		$sql = $this->db->query("SELECT * FROM tb_kontak");
		return $sql->row();
	}
	function update_data_kontak($id, $deskripsi, $alamat, $no_tlp, $email){
		$sql= $this->db->query("UPDATE tb_kontak SET kontak_des = '$deskripsi', kontak_alamat = '$alamat', kontak_tlp = '$no_tlp', kontak_email = '$email' WHERE id_kontak = '$id'");
		return $sql;
	}
	//Tentang
	function get_data_tentang(){
		$sql = $this->db->query("SELECT * FROM tb_gambaran");
		return $sql->row();
	}
	function update_data_tentang($id_gambaran, $header, $deskripsi, $gambar){
		$sql = $this->db->query("UPDATE tb_gambaran SET gambaran_head = '$header', gambaran_des	= '$deskripsi', gambaran_gambar = '$gambar' WHERE id_gambaran = '$id_gambaran'");
		return $sql;
	}
	function update_data_tentang_tanpa_gambar($id_gambaran, $header, $deskripsi){
		$sql = $this->db->query("UPDATE tb_gambaran SET gambaran_head = '$header', gambaran_des = '$deskripsi' WHERE id_gambaran = '$id_gambaran'");
		return $sql;
	}
}
?>