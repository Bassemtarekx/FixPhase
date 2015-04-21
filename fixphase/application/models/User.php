<?php

class User extends CI_Model{
 public function insert_user()
 {
	 $pass= $this->input->post('password');
	 $fname= strtolower($this->input->post('Fname'));
	 
	 $lname= strtolower($this->input->post('Lname'));
	 $data = array(
	 'username'=> strtolower($this->input->post('username')),
	 'password'=> strtolower($this->encrypt->encode($pass)),
	 	 'role'=> strtolower($this->input->post('role')),

	 
	 'email'=> strtolower($this->input->post('email')),	
     'full_name'=> $fname . " " . $lname
	 );
	 
	 
	 $query = $this->db->insert('users',$data);
	 if($query)
	 {
		 echo "Registration Done.";
	 }
     	 else
		 {
			 echo "Error!";
		 }
	 
 } 
}
