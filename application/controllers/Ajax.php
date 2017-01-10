<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('user_model');
    }


    public function cekusername(){
        if( $this->user_model->namausersudahterdaftar( $this->input->post('namausernya') ) ){
            echo "1";
        } else {
            echo "0";
        }
    }

    public function cekemail(){
        if( $this->user_model->emailsudahterdaftar( $this->input->post('emailaddr') ) ){
            echo "1";
        } else {
            echo "0";
        }
    }

}
