<?php
   class UserModel extends CI_Model
   {
	   public function __construct()
	   {
		  parent::__construct();
	   }
	   
	   function insert($data)
      {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
      }

	   function can_login($email, $password){
		$this->db->where('email', $email);
		$query = $this->db->get('users');
		if($query->num_rows() > 0){
			foreach($query->result() as $row)
			{
			
				//Use encryption after implementation in registration!
				//$store_password = $this->encrypt->decode($row->password);
				$hashed_password=$row->password;

				//$store_password = $row->password;

				if(password_verify($password, $hashed_password))
				{
					$this->session->set_userdata('user_id', $row->user_id);
					$this->session->set_userdata('name', $row->name);
					$this->session->set_userdata('email', $row->email);
					$this->session->set_userdata('user_type', $row->user_type);
				}
				else
				{
					return 'Wrong Password';
				}
			
				
			}
		}
		else
		{
			return 'Wrong Email Address';
		}
	   }
	   public function get_user($id)
	   {
		   $this->db->where('id', $id);
		   $query = $this->db->get('users');
		   return $query->row(); 
	   }
   }   
 
?>