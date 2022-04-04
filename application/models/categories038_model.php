<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories038_model extends CI_Model {

    public function create()
	{
		$data = array (
            'category_name_038'    => $this->input->post('category_name_038'),
            'category_description_038'   => $this->input->post('category_description_038')    
        );
        $this->db->insert('categories038',$data);
	}

    public function read()
	{
		$query=$this->db->get('categories038');
        return $query->result();
	}
    public function read_by($id)
	{
        $this->db->where('category_id_038',$id);
		$query=$this->db->get('categories038');
        return $query->row();
	}
    public function update($id){
        $data = array (
            'category_name_038'    => $this->input->post('category_name_038'),
            'category_description_038'   => $this->input->post('category_description_038')    
        );
        $this->db->where('category_id_038',$id);
        $this->db->update('categories038',$data);
	}
    public function delete($id)
    {
        $this->db->where('category_id_038',$id);
        $this->db->delete('categories038');
    }
}
