<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		
		$data['page'] = "home";			
		$data['judul'] = "Dashboard";
		$data['subjudul'] = "Overview";

		$this->load->view('templates/nav', $data);

		$this->load->view('home');

		$this->load->view('templates/footer');

	}
}
