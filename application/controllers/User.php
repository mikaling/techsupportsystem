<?php
    class User extends CI_Controller
	{
		public function __construct()
		{
	         parent::__construct();
			 $this->load->helper('url');
			 $this->load->model('UserModel');
       $this->load->helper('form');
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

        public function logout() {
            $user_data = $this->session->all_userdata();
            foreach ($user_data as $key=>$value) {
                if($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                    $this->session->unset_userdata($key);
                }
            }
            $this->session->sess_destroy();
            redirect('user/login');
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
				}elseif($userType == "support" || $userType == "admin"){
					redirect('ticket');
				}else{
					redirect('user/insert');
				}
				}else{//remain on login page and set flashdata message as error(see login view)
					$this->session->set_flashdata('message',$result);
					redirect('user/login');
			}

		}
		
		   public function profile()
		   {
			  $data['title']='User Profile';
			  $data['header_icon'] = '';
			  
			  $this->load->view('templates/header',$data);
			  $this->load->view('templates/support_navbar');
			  $this->load->view('profile');
			  $this->load->view('templates/footer');
		   }
		   public function message()
		   {
			   $this->load->view('errorMessage');

		   }

           public function insert()
		   {
               $this->load->view('templates/header');
			   $this->load->view('templates/support_navbar');
			   $this->load->view('add_user');
			   $this->load->view('templates/footer');
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
				   $pass=$this->input->post('pass');
				   $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
				   $data=array(
				         'name' =>$this->input->post('name'),
						 'email'=>$this->input->post('email'),
                         'password'=>$pass_hash,
                         'user_type'=>$this->input->post('user_type')
				   );
				   $this->UserModel->insert($data);
				   $this->session->set_flashdata('action','Data Inserted');
				   redirect('user/insert_validation');
			   }
		   }
		   
		   
		    
	}
	?>
