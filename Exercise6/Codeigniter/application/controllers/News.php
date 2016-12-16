<?php
class News extends CI_Controller {

 public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
	  public function index()
    {
        $data['userinfo'] = $this->news_model->get_news();
        $data['title'] = 'Website Visitors';
	
	
		$this->load->view('templates/header', $data);
		
	}