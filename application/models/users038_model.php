<?php
defined('BASEPATH') || exit('No direct script access allowed');

class Users038_model extends CI_Model {

    public function create()
	{
		$data = array (
            'username_038'  => $this->input->post('username_038'),
            'usertype_038'  => $this->input->post('usertype_038'),
            'fullname_038'  => $this->input->post('fullname_038'),
            'password_038'  => password_hash($this->input->post('usertype_038'), PASSWORD_DEFAULT)   
        );
        $this->db->insert('users038',$data);
	}

    public function read()
	{
		$query=$this->db->get('users038');
        return $query->result();
	}
    public function read_by($id)
	{
        $this->db->where('userid_038',$id);
		$query=$this->db->get('users038');
        return $query->row();
	}
    public function update($id){
        $data = array (
            'username_038'  => $this->input->post('username_038'),
            'password_038'  => $this->input->post('password_038'),
            'usertype_038'  => $this->input->post('usertype_038'),
            'fullname_038'  => $this->input->post('fullname_038')    
        );
        $this->db->where('userid_038',$id);
        $this->db->update('users038',$data);
	}
    public function delete($id)
    {
        $this->db->where('userid_038',$id);
        $this->db->delete('users038');
    }

    public function reset($type)
	{
		$this->db->set('password_038', password_hash($type, PASSWORD_DEFAULT));
		$this->db->where('usertype_038',$type);
		$this->db->update('users038');
	}
}
