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
		
		  $data['title'] = 'Create a news item';
 
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('Nickname', 'Nickname', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Home_Address', 'Home address', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('CP_num', 'Cellphone number');
		$this->form_validation->set_rules('Comment', 'Comment', 'required');
		
		
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
 
        }
		
		  else
        {
            $this->news_model->set_news();
            $this->load->view('templates/header', $data);
            $this->load->view('news/success');
            $this->load->view('templates/footer');
        }
    }
	
	 public function edit()
    {
        $User_ID = $this->uri->segment(3);
        
        if (empty($User_ID))
        {
            show_404();
        }

		
		
		
		
		