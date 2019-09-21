<?php
    class User extends CI_Controller
	{
		public function __construct()
		{
	         parent::__construct();
			 $this->load->helper('url');
             $this->load->database();
			 
		}
		public function login(){
			$this->load->view('Login');
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
			$this->form_validation->set_rules('con_pass','confirm password','required|trim');
			
			if($this->form_validation->run()==false)
			{
				$this->insert();
			}
			else
			{
				$this->load->library('encrypt');
				
				$data=array(
				     'name'  =>$this->input->post('name'),
					 'email'  =>$this->input->post('email'),
					 'pass'  =>$this->encrypt->encode($this->input->post('pass'))
					 
				);
				$this->load->model('UserModel');
				$this->UserModel->insert($data);
				$this->session->set_flashdata('action','Data Inserted');
				redirect('User');
				
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