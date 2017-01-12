<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('user_model');
    }

	public function index()
	{
		$this->load->view('templates/header');

		$data['page'] = "user";
		$data['judul'] = "User";
		$data['subjudul'] = "List";

		$this->load->view('templates/nav', $data);

		$this->load->view('user/user');

		$this->load->view('templates/footer');

	}


	public function data( $iduser ){

		$this->load->view('templates/header');

		$data['page'] = "user";
		$data['judul'] = "Detail User";
		$data['subjudul'] = $iduser;

		$this->load->view('templates/nav', $data);

		$user['id'] = $iduser;
		$this->load->view('user/detailuser', $user);

		$this->load->view('templates/footer');

	}

	public function formRegister(){
		$data['page'] = "user";
		$data['judul'] = "Registration";
		$data['subjudul'] = "Form";

		$this->load->view('templates/header');
		$this->load->view('templates/nav', $data);
		$this->load->view('user/formregister', $data);
		$this->load->view('templates/footer');
	}

	public function register(){
		// var_dump( $this->input->post() );
		$this->user_model->registeruser();
		redirect( base_url() );
	}

	// formulir login user
	public function loginform( $status = 0 ){
		$data['page'] = "user";
		$data['judul'] = "User";
		$data['subjudul'] = "Login";
		$data['status'] = $status;

		$this->load->view('templates/header');
		$this->load->view('templates/nav', $data);
		$this->load->view('user/formlogin', $data);
		$this->load->view('templates/footer');

	}

	// proses login user
	public function login(){
		if( $this->user_model->userterdaftar( $this->input->post('user') )) {
			if( $this->user_model->passwordok( $this->input->post('pass') ) ){
				// user OK
				redirect( base_url().'user/profile');
			} else {
				// password salah
				redirect( base_url().'user/login/2');
			}
		} else {
			// username salah
			redirect( base_url().'user/login/1');
		}

	}

	public function editprofile(){
		$this->valid();

		if( $_SESSION['admin'] == 1 ){
			$adm = ' Admin ';
		} else {
			$adm = '';
		}
		$data['page'] = "user";
		$data['judul'] = "User";
		$data['subjudul'] = "Edit $adm Profil";

		$data['user'] = $this->user_model->getuser( $_SESSION['username'] );

		$this->load->view('templates/header');
		$this->load->view('templates/nav', $data);
		$this->load->view('user/editprofile', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$this->user_model->updateuser();

		$file = $_SESSION['username'].".jpg";
		// echo $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], './assets/foto/'.$file);

		redirect( base_url().'user/profile');
	}

	public function logout(){
		session_destroy();
		redirect('user/login');
	}

	private function valid(){
		if( !isset( $_SESSION['username'] ) ) redirect('user/login');
	}

}  // end of class
