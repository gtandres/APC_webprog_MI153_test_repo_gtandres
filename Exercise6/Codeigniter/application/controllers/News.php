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
		$this->load->view('news/index', $data);
        $this->load->view('templates/footer');
	}
	
	 public function view($User_ID = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($User_ID);
		
	 if (empty($data['news_item']))
        {
            show_404();
	}
	
	  $this->load->view('templates/header', $data);
      $this->load->view('news/view', $data);
	  $this->load->view('templates/footer');
	  }
	  
	   public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');