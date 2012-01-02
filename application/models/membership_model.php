<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Membership_model extends CI_Model{
    
  function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('membership');
		
		if($query->num_rows == 1)
		{
			return true;
		}
		
	}
        
        public function create_member(){
            
            $new_member_insert_data = array(
                'first_name' =>$this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')));
            
            $insert = $this->db->insert('membership',$new_member_insert_data);
            
            return $insert;
            
            
        }
    
    public function listar(){
        
        $query = $this->db->get('membership');
        
        return $query->result();
    }
    
}
?>
