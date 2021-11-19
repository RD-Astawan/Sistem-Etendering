<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{

	//Admin
	public function get_post_home(){
		$hsl=$this->db->query("SELECT tb_post.*,DATE_FORMAT(post_tanggal,'%d/%m/%Y') AS post_tanggal FROM tb_post ORDER BY post_id DESC LIMIT 3");
		return $hsl;
	}

	function post(){
		$hsl=$this->db->query("SELECT tb_post.*,DATE_FORMAT(post_tanggal,'%d/%m/%Y') AS post_tanggal FROM tb_post  ORDER BY post_id DESC");
		return $hsl;
	}

	function blog_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tb_post.*,DATE_FORMAT(post_tanggal,'%d/%m/%Y') AS post_tanggal,DAY(post_tanggal) AS hari,LEFT(DATE_FORMAT(post_tanggal,'%M'),3) AS bulan FROM tb_post ORDER BY post_id DESC limit $offset,$limit");
		return $hsl;
	}

	public function get_tender_home(){
		$hsl=$this->db->query("SELECT * FROM tb_tender ORDER BY id_tender DESC LIMIT 4");
		return $hsl;
	}

	public function get_more_tender(){
		$hsl=$this->db->query("SELECT * FROM tb_tender ORDER BY id_tender DESC LIMIT 5");
		return $hsl;
	}
	public function get_pengerjaan_home(){
		$hsl=$this->db->query("SELECT * FROM tb_pengerjaan_tender ORDER BY pengerjaan_id DESC LIMIT 2");
		return $hsl;
	}
	public function get_top_lamaran(){
		$query = $this->db->query("SELECT T.tittle, T.tanggal_tutup, L.id_tender, COUNT(L.id_tender) as hasil FROM tb_lamaran as L INNER JOIN tb_tender as T ON L.id_tender=T.id_tender GROUP BY T.id_tender ASC LIMIT 3");

		 if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
	function insert_admin($inbox_nama, $inbox_email, $inbox_subjek, $inbox_pesan){
		$hasil = $this->db->query("INSERT INTO tb_inbox (inbox_nama, inbox_email, inbox_subjek, inbox_pesan)VALUES('$inbox_nama','$inbox_email','$inbox_subjek','$inbox_pesan')");

		return $hasil;
	}

}

?>