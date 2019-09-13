<?php
    class Hello extends CI_Controller
	{
		public function __construct()
		{
	         parent::__construct()
			 $this->load->helper('url');
	         $this->load->model('TechModel');
			 
		}
		public function index()
		{
			$this->load->view('Registration');
		}
	}
	?>