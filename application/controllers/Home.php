<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->view('home');
	}
	
	function logout()
	{
		// destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		redirect('home/index');
	}

	function about()
	{
		$this->load->view('about');
	}

	function services()
	{
		$this->load->view('services');
	}

	function gallery()
	{
		$this->load->view('gallery');
	}

	function contact()
	{
		$this->load->view('contact');
	}
}


