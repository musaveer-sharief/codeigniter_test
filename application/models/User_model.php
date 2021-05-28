<?php
class User_model extends CI_model{
	
	function create($formArray){
		$this->db->insert('users', $formArray);	//insert users into database		
	}
	
	function all(){
		
		return $users = $this->db->get('users')->result_array();  //Select * from users;
	}
	
}
?>