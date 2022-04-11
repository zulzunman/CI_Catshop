<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats038_model extends CI_Model {

    public function create()
	{
		$data = array (
            'name_038'    => $this->input->post('name_038'),
            'type_038'    => $this->input->post('type_038'),
            'gender_038'  => $this->input->post('gender_038'),
            'age_038'     => $this->input->post('age_038'),
            'price_038'   => $this->input->post('price_038')    
        );
        $this->db->insert('cats038',$data);
	}

    public function read($limit, $start)
	{
        $this->db->limit($limit,$start);
        $this->db->where('sold_038','0');
		$query=$this->db->get('cats038');
        return $query->result();
	}
    public function read_by($id)
	{
        $this->db->where('id_038',$id);
		$query=$this->db->get('cats038');
        return $query->row();
	}
    public function update($id){
        $data = array (
            'name_038'    => $this->input->post('name_038'),
            'type_038'    => $this->input->post('type_038'),
            'gender_038'  => $this->input->post('gender_038'),
            'age_038'     => $this->input->post('age_038'),
            'price_038'   => $this->input->post('price_038')    
        );
        $this->db->where('id_038',$id);
        $this->db->update('cats038',$data);
	}
    public function delete($id)
    {
        $this->db->where('id_038',$id);
        $this->db->delete('cats038');
    }
    public function validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name_038','cat name','required');
        $this->form_validation->set_rules('type_038','cat type','required');
        $this->form_validation->set_rules('gender_038','cat gender','required');
        $this->form_validation->set_rules('age_038','cat age','required');
        $this->form_validation->set_rules('price_038','cat price','required');

        if($this->form_validation->run())
            return TRUE;
        else
            return FALSE;
    }
    public function sale ($id) {
        $data = array (
            'customer_name_038'   => $this-> input->post('customer_name_038'), 
            'customer_address_038'   => $this-> input->post('customer_address_038'), 
            'customer_phone_038' => $this-> input->post('customer_phone_038'), 
            'cat_id_038' => $id
        );
        $this->db->insert('catsales038', $data);
        $this->db->set('sold_038', '1');
        $this->db->where('id_038',$id);
        $this->db->update('cats038');
    }
    
    public function sales() {
        
        //$query=$this->db->get('catsales038');
        $this->db->select('*');
		$this->db->from('catsales038');
		$this->db->join('cats038', 'catsales038.cat_id_038 = cats038.id_038');
		$query = $this->db->get();
        return $query->result();
    }
}
