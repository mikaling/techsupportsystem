<?php
    class User extends CI_Controller
	{
		public function __construct()
		{
	         parent::__construct();
			 $this->load->helper('url');
	         $this->load->model('UserModel');
			 
		}
		public function register()
		{
			$this->load->view('Registration');
		}

		public function login(){
			$this->load->view('Login');
		}
	}
	?>