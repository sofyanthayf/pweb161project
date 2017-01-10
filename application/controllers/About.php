<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index() {
		$this->load->view('templates/header');
		
		$data['page'] = "about";			
		$data['judul'] = "About Us";
		$data['subjudul'] = "Tentang Kami";

		$this->load->view('templates/nav', $data);

		$this->load->view('about');

		$this->load->view('templates/footer');
	}

}
