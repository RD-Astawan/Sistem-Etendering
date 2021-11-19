<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller{
	public function index(){
		redirect('page');
	}

	public function message($title = NULL, $text = NULL, $type = NULL){
			return $this->session->set_flashdata([
				'title' => $title,
				'text'	=> $text,
				'type'	=> $type
			]);
		}

	
	
}





?>