<?php
    class User extends CI_Controller
	{
		public function __construct()
		{
	         parent::__construct();
			 $this->load->helper('url');
			 $this->load->model('UserModel');
			
			 
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
					redirect('user/insert');
				}elseif($userType == "support"){
					redirect('user/insert');
				}else{
					redirect('user/insert');
				}
				}else{//remain on login page and set flashdata message as error(see login view)
					$this->session->set_flashdata('message',$result);
					redirect('user/login');
			}
			
		}
		public function index()
		{
			$this->load->view('errorMessage');
		}
		public function insert()
	    {
		
	       $this->load->view('Registration');	
		}
		function insert_validation()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name','full name','required|trim');
		    $this->form_validation->set_rules('email','email','required|trim');
			$this->form_validation->set_rules('pass','password','required|trim');
			$this->form_validation->set_rules('con_pass','confirm password','required|trim|matches[pass]');
			
			if($this->form_validation->run()==false)
			{
				$this->insert();
			}
			else
			{
				//$this->load->library('encrypt');
				
				$pass=$this->input->post('pass');
				$pass_hash=password_hash($pass,PASSWORD_DEFAULT);
				$data=array(
				
				     'name'  =>$this->input->post('name'),
					 'email'  =>$this->input->post('email'),

					 'password'  =>$pass_hash
					 
				);
				//$this->load->model('UserModel');
				$this->UserModel->insert($data);
				$this->session->set_flashdata('action','Data Inserted');
				redirect('User/login');
				
			}
		}
	}
	?>
	
	
	 <!--/*  if($this->input->post('register'))
		    {
		        $name=$this->input->post('name');
		        $email=$this->input->post('email');
		        $pass=$this->input->post('pass');
		
		        $que=$this->db->query("select * from users where email='".$email."'");
		        $row = $que->num_rows();
		       if($row)
		        {
		         $data['error']="<p style='color:red'>*This user already exists*</p>";
		        }
		       else
		        {
		         $que=$this->db->query("insert into users(name,email,password) values('$name','$email','$pass')");
		
		         $data['error']="<p style='color:blue'>Your account created successfully</p>";
		        }			
				
		    }*/-->