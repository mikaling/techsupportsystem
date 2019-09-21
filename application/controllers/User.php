<?php
    class User extends CI_Controller
	{
		public function __construct()
		{
	         parent::__construct();
			 $this->load->helper('url');
			 $this->load->model('UserModel');
			 //$this->load->view('Login');
			 //$this->load->library('form_validation');
			 //$this->session->keep_flashdata('message');
			 
		}
		public function register()
		{
			$this->load->view('Registration');
		}

		public function login(){
			$this->load->view('Login');
			
		}

		public function loginValidation(){
			// $this->form_validation->set_rules('email', 'Email', 'required');
			// $this->form_validation->set_rules('pass', 'Password', 'required');

			// if($this->form_validation)->run()){

			// }

			$result = $this->UserModel->can_login($this->input->post('email'), $this->input->post('pass'));
			$userType = $this->session->userdata('user_type');
			
			if($result == ''){//if there's no error message:
				//redirect based on user type
				if($userType == "staff"){
					redirect('user/register');
				}elseif($userType == "support"){
					redirect('user/register');
				}else{
					redirect('user/register');
				}
				}else{//remain on login page and set flashdata message as error(see login view)
					$this->session->set_flashdata('message',$result);
					redirect('user/login');
			}
			
		}
	}
	?>