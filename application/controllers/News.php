<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    private $data;

	public function __construct() {
        parent::__construct();
		$this->load->model('news_model');

        $this->data = [ 'page' => "news",
                        'judul' => "News"
                      ];
    }

	public function index() {
        $this->load->view('templates/header');

		$this->data['subjudul'] = "List";

        $this->data['news'] = $this->news_model->get_list_news();

		$this->load->view('templates/nav', $this->data);
		$this->load->view('news/newslist');
		$this->load->view('templates/footer');
    }

    public function entrinews(){
        $this->load->view('templates/header');

		$this->data['subjudul'] = "Entri";

		$this->load->view('templates/nav', $this->data);
		$this->load->view('news/newsentry');
		$this->load->view('templates/footer');
    }

    public function submitnews(){
        $this->news_model->save_news();
        redirect(base_url().'news');
    }



}
