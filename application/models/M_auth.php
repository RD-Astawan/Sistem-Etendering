<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model{
	public function auth_konsumen($username,$password){
		$query = $this->db->query("SELECT * FROM tb_konsumen WHERE username = '$username' AND password = MD5('$password') LIMIT 1");
		return $query;
	}

	public function auth_produsen($username,$password){
		$query = $this->db->query("SELECT * FROM tb_produsen WHERE username = '$username' AND password = MD5('$password') LIMIT 1");
		return $query;
	}

	public function auth_admin($username,$password){
		$query = $this->db->query("SELECT * FROM tb_admin WHERE username = '$username' AND password = MD5('$password') LIMIT 1");
		return $query;
	}

	

	public function login($username, $password){
			$this->db->where('username',$password);
			$this->db->where('password', md5($password));
    		$this->db->join('tb_role', 'tb_role.id_role = tb_user.id_role');
    		return $this->db->get('tb_user')->row_array();
		}

	public function register($data, $tb_konsumen){
		$this->db->insert($tb_konsumen,$data);
		return 'berhasil';
	}

	public function register_produsen($data, $tb_produsen){
		$this->db->insert($tb_produsen,$data);
		return 'berhasil';
	}

	public function checkemail($email){
		$this->db->where('email', $email);
		return $this->db->get('tb_konsumen')->row_array();
	}

	public function register_checkemail($register_email){
		$this->db->where('email', $register_email);
		return $this->db->get('tb_produsen')->row_array();
	}

	public function checkusername($username){
		$this->db->where('username', $username);
		return $this->db->get('tb_konsumen')->row_array();
	}

	public function register_checkusername($register_username){
		$this->db->where('username', $register_username);
		return $this->db->get('tb_produsen')->row_array();
	}

	public function check_username_produsen($username){
		$this->db->where('username', $username);
		return $this->db->get('tb_produsen')->row_array();
	}

}


